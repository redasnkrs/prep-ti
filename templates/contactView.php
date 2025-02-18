<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../public/css/style.css">
  <title>Document</title>
</head>

<body>
  <nav>
    <?php include "inc/menuIncView.php" ?>
  </nav>
  <section class="top-page">
    <h1>Voulez vous nous contacter ?</h1>
    <h2>Plus bas retrouver un formulaire !</h2>
  </section>
  <section class="formu">
    <div class="container">
      <form action="">
        <div class="row">
          <div class="">
            <label for="fname">Nom</label>
          </div>
          <div class="col-75">
            <input type="text" id="fname" name="firstname" placeholder="Votre nom..">
          </div>
        </div>
        <div class="row">
          <div class="prenom">
            <label for="lname">Prénom</label>
          </div>
          <div class="col-75">
            <input type="text" id="lname" name="lastname" placeholder="Votre prénom..">
          </div>
        </div>
        <div class="row">
          <div class="sujet">
            <label for="subject">Message</label>
          </div>
          <div class="col-75">
            <textarea id="subject" name="subject" placeholder="Ecrivez quelque choses.." style="height:200px"></textarea>
          </div>
        </div>
        <br>
        <div class="row">
          <input type="submit" value="Envoyer">
        </div>
      </form>
    </div>
  </section>
  <footer>
    <?php include "inc/footerIncView.php" ?>
  </footer>
</body>

</html>