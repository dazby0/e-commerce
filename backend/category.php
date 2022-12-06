<?php
    session_start();
    require('./config.php');
    // $conn = new mysqli($host, $user, $password, $db);
    $_SESSION['category'] = $_POST['category'];
    // echo $_SESSION['category'];
    header('Location: ../pages/products.php');