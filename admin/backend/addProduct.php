<?php
    require('../../backend/config.php');

    $itemName = $_POST['itemName'];
    $itemCategory = $_POST['itemCategory'];
    $itemPrice = $_POST['itemPrice'];
    $itemDesc = $_POST['itemDesc'];
    $itemSrc = $_POST['itemSrc'];

    $insertDataSql = "INSERT INTO products(title, description, category, price, img_source) VALUES('".$itemName."', '".$itemDesc."', '".$itemCategory."', '".$itemPrice."', '".$itemSrc."')";
    $insertData = $conn -> query($insertDataSql);

    header('Location: ../adminPanel.php');