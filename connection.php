<?php
/*Connection MySQL*/
$link = 'mysql:dbname=php;host=localhost';
$user = 'root';
$mdp = '';

try {
  $test = new PDO($link, $user, $mdp);
} catch (PDOException $e) {
  echo 'Connection échoué:' , $e->getMessage();
}

 ?>
