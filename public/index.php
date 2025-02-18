<?php

// public\index.php

// Direction des liens 
if (isset($_GET['p'])) {
  switch ($_GET['p']) {
    case "aboutme":
      $title = "apropos";
      include "../templates/aproposView.php";
      break;
    case "history":
      $title = "histoire";
      include "../templates/histoireView.php";
      break;
    case "contact":
      $title = "contact";
      include "../templates/contactView.php";
      break;
    default:
      $title = "erreur404";
      include "../templates/erreur404View.php";
      break;
  }
} else {
  $title = "accueil";
  //  Default view : 
  include "../templates/acceuilView.php";
}
