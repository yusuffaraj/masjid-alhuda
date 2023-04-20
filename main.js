const express = require('express');
const app = express();
const port = 3000;

app.get('/', (req, res) => {
  res.sendFile(__dirname + '/index.html');
});

app.get('/about', (req, res) => {
  res.sendFile(__dirname + '/about.html');
});

app.get('/prayers', (req, res) => {
  res.sendFile(__dirname + '/prayers.html');
});

app.get('/events', (req, res) => {
  res.sendFile(__dirname + '/events.html');
});

app.get('/contact', (req, res) => {
  res.sendFile(__dirname + '/contact.html');
});

app.listen(port, () => {
  console.log(`Server listening on port ${port}`);
});


var navLinks = document.getElementById("navLinks");
function showMenu(){
    navLinks.style.right = "0";
}
function hideMenu(){
    navLinks.style.right = "-200px";
}
