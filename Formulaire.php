<?php

class autoform{

  public function getInputText($name, $label){
    echo '<label for="'.$name.'">'.$label.'</label><br>';
    echo '<input type="text" id="'.$name.'" name="'.$name.'"><br>';
  }
  public function getInputSubmit($value){
    echo '<input type="submit" value="'.$value.'">';
  }
  public function getpwd($pwdname, $label){
  echo '<label for="'.$pwdname.'">'.$label.'</label><br>';
  echo '<input type="password" id="'.$pwdname.'" name="'.$pwdname.'"><br><br>';
  }
}

 ?>
