<?php


if (isset($_GET['p'])) {
  switch ($_GET['p']) {
    case "aboutme":
      include "../templates/aproposView.php";
      break;
    case "history":
      include "../templates/histoireView.php";
      break;
    case "contact":
      include "../templates/contactView.php";
      break;
    default:
      include "../templates/erreur404View.php";
      break;
  }
} else {
  //  Default view : 
  include "../templates/acceuilView.php";
}
