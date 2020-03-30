<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div id="image">
      <img src="" alt="Fond d'image">
    </div>
    <div class="logoText">
      <div id="Logo">
        <img src="" alt="LogoWeb">
      </div>
      <div id="text">
        <p></p>
      </div>
    </div>

    <?php
      require "class/tyrex.php";
      echo "Hello World";
      $tyrex = new $tyrex(300,200,65,'sol',"toto","M")
    
     ?>
  </body>
</html>
