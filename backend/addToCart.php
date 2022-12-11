 <?php
    require('./config.php');
    session_start();

    $_SESSION['title'] = $_POST['title'];
    $_SESSION['price'] = $_POST['title'];
    $_SESSION['source'] = $_POST['source'];
    $_SESSION['quantity'] = $_POST['quantity'];

    header('Location: ../pages/cart.php');
    