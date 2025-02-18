<?php


if (isset($_GET['p'])) {
  switch ($_GET['p']) {
    case "apropos":
      include "../templates/aproposView.php";
      break;
    case "histoire":
      include "../templates/histoireView.php";
      break;
    case "contact":
      include "../templates/contactView.php";
      break;
    default:
      include "../templates/erreur404View.php";
  }
} else {
  //  Default view : 
  include "../templates/acceuilView.php";
}
