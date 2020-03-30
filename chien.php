<?php

class chien{

  private $_age;
  private $_race;
  private $_nom;
  private $_sexe;

  public function construct($age, $race, $nom, $sexe)
  {
      $this->_age - $age;
      $this->_race - $race;
      $this->_nom - $nom;
      $this->_sexe - $sexe;
  }
  public function getNom(){
    return $this->_nom;
  }
}
 ?>
