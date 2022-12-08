 <?php
    require('./config.php');
    session_start();

    $details = $_POST['itemDetails'];
    $names = $_POST['itemName'];

    $detailsArray = explode(" ", $details);
    $_SESSION['details'] = $detailsArray;
   // print_r($_SESSION['details']);
   //  foreach($detailsArray as $detail) {
   //    echo $detail;
   //    echo '<br/>';
   //  }

    $namesArray = explode("//", $names);
    $_SESSION['names'] = $namesArray;
   //  print_r($_SESSION['names']);

   header('Location: ../pages/cart.php');