<?php

// Connect to the MySQL database
$conn = mysqli_connect('localhost', 'your_username', 'your_password', 'masjid_timetable');

// Check if the connection was successful
if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
}

// Retrieve the prayer timetable data from the database
$sql = "SELECT * FROM masjid_timetable";
$result = mysqli_query($conn, $sql);

// Check if there are any rows in the result set
if (mysqli_num_rows($result) > 0) {
    // Loop through the rows and display the data in an HTML table
    echo "<table>";
    echo "<tr><th>Prayer Name</th><th>Start Time</th><th>Jamaat Time</th><th>Date</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['prayer_name'] . "</td>";
        echo "<td>" . $row['start_time'] . "</td>";
        echo "<td>" . $row['jamaat_time'] . "</td>";
        echo "<td>" . $row['date'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No results found.";
}

// Close the database connection
mysqli_close($conn);

?>
