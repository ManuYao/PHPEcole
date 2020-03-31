<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Page Atelier 5</title>
    <link rel="stylesheet" href="vitrine.css">
  </head>
  <body>
    <header>
    <div class="#">
      <img id="back" src="img/imgAcc.jpg" alt="Fond d'image">
    </div>
      <nav>
        <div class="logoText">
          <div id="#">
            <img id="logo" src="img/Azerty.png" alt="LogoWeb">
          </div>
          <div id="text">
            <button class="bouton" type="button" name="button">Menu</button>
          </div>
        </div>
      </nav>
      <form method="POST" action="#">
    </header>
<!--^^^^^^^^^^Page^^^^^^^^^^-->
  <form action="#" method="POST">

    <?php
    require "Formulaire.php";
    $form = new autoform();
    $form->getInputText("name","Name");
    $form->getInputText("gender","Sexe");
    $form->getpwd("mdp","mdp");
    $form->getpwd("mdp1","mdp");
    $form->getInputSubmit("Valider");
     ?>
  </form>
     <?php
        if (!empty($_POST)) {
          echo $_POST["name"];
        }

        if ($_POST["mdp"] == $_POST["mdp1"] ) {
          echo $_POST["gender"];
        }
      ?>
  </body>
</html>
