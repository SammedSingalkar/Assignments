const express = require('express');
const bodyParser = require('body-parser');
const session = require('express-session');
const mysql = require('mysql');
let alert = require('alert'); 



const app = express();

// Use body-parser and express-session middleware
app.use(bodyParser.urlencoded({ extended: false }));
app.use(session({ secret: 'secret', resave: false, saveUninitialized: true }));

// Create a MySQL connection
const connection = mysql.createConnection({
  host: 'localhost',
  user: 'root',
  password: 'Iamsammed@12',
  database: 'student_registration'
});

// Connect to the database
connection.connect((error) => {
  if (error) throw error;
  console.log('Connected to the MySQL server');
});

// Render the login form
app.get('/login', (req, res) => {
  res.sendFile(__dirname + '/login.html');
});

// Handle login form submission
app.post('/login', (req, res) => {
  // Check the user's credentials against the database
  const email = req.body.email;
//   console.log(email);
  const password = req.body.password;
const query = 'SELECT * FROM student WHERE student_email  = ? AND student_password = ?';
  connection.query(query, [email, password],(error, results) => {
    if (results.length > 0) {
      // If the user is found, store their user ID in the session
    //   req.session.userId = results[0].id;
    alert('Authentication Sucessfull');
      res.redirect('/login');
    } else {
    //   res.send('Invalid email or password');
    alert("Invalid email or password")
    res.redirect('/login');
    }
  });
});

// Start the server
app.listen(3000, () => {
  console.log('Server listening on port 3000');
});
