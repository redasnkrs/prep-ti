<!-- templates\aproposView.php -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../public/css/style.css">
  <title><?= $title ?></title>
</head>

<body>
  <nav>
    <?php include "inc/menuIncView.php" ?>
  </nav>
  <section class="top-page">
    <h1>Ceci est la page A Propos</h1>
    <h2>Scrollez pour voir le contenue </h2>
  </section>
  <section class="avatar">
    <div class="contener">
      <img src="../public/img/avatar.jpg" alt="c'est reda legoat">
      <p>nom : Dahmani</p>
      <p>Prenom : Reda</p>
      <p>age : 22</p>
    </div>
  </section>
  <footer>
    <?php include "inc/footerIncView.php" ?>
  </footer>
</body>

</html>