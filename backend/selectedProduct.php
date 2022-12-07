<?php
    session_start();
    require('./config.php');

    $_SESSION['productName'] = $_POST['titleItem'];
    
    header('Location: ../pages/product.php');