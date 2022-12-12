<?php
    require('../../backend/config.php');
    $title = $_POST['titleItem'];
    
    $removeItemSql = "DELETE FROM products WHERE title='".$title."'";
    $removeItem = $conn -> query($removeItemSql); 

    header('Location: ../adminPanel.php');