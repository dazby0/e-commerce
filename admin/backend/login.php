<?php
    require('../../backend/config.php');
    session_start();

    $login = $_POST['username'];
    $password = $_POST['password'];

    $selectAdminsSql = "SELECT username, password FROM admins WHERE username='".$login."'";
    $selectAdmins = $conn -> query($selectAdminsSql);

    if($selectAdmins->num_rows > 0) {
      $row = $selectAdmins -> fetch_assoc();

      // echo password_hash('admin', PASSWORD_BCRYPT);

      if(password_verify($password, $row['password'])) {
        $_SESSION['logged'] = true;
        header('Location: ../adminPanel.php');
      }
      else header('Location: ../login.html');
    }
    else {
      header('Location: ../login.html');
    }