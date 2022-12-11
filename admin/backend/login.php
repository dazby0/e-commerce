<?php
    require('../../backend/config.php');
  // Check if the login form has been submitted
  if (isset($_POST['username']) && isset($_POST['password'])) {
    // Get the username and password from the form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Connect to the database

    // Query the database to retrieve the hashed password for the given username
    $result = $conn->query("SELECT password FROM admins WHERE username = '" . $username . "'");
    $hashedPassword = $result->fetch_row()[0];

    // Verify that the given password matches the hashed password in the database
    if (password_verify($password, $hashedPassword)) {
      // If the password is correct, log the user in and redirect to the homepage
      session_start();
      $_SESSION['username'] = $username;
    //   header('Location: /adminPanel.html');
    } else {
      // If the password is incorrect, display an error message
      echo '<p>The username or password you entered is incorrect. Please try again.</p>';
    }
  }
?>