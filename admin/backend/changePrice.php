<?php
    require('../../backend/config.php');

    $title = $_POST['titleItem'];
    $newPrice = $_POST['newPrice'];

    $updatePriceSql = "UPDATE products SET price=".$newPrice." WHERE title='".$title."'";
    $updatePrice = $conn -> query($updatePriceSql);

    header('Location: ../adminPanel.php');