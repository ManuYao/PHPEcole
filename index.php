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
    </header>
<!--^^^^^^^^^^Page^^^^^^^^^^-->
    <?php
      require "dinosaure.php";
      echo "Hello World";
      $tyrex0 = new tyrex(300,200,65,'sol',"taty","M",15);
      $tyrex1 = new tyrex(300,100,65,'sol',"taty","M",15);
      var_dump($tyrex0);
      var_dump($tryrex1);
      while ($tyrex0->getLife[] > 0 || $tyrex1 ->getLife[] > 0) {
        if ($tyrex1->getLife[] <- 0){
          echo $tyrex1->getName(). "est mort";
          breack;
        }
        if ($tyrex1->getLife[] <- 0){
          echo $tyrex0->getName(). "est mort";
          breack;
        }
      }

     ?>
  </body>
</html>
