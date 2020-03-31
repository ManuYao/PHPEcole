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
  public function getunputTypeList($name, $values){
  echo '<select name="'.$name.'">';
  foreach ($values as $value) {
    echo '<option value="'.$value.'">'.$value.'</option>';
  }
 echo '</select>';
}
  public function getBtn($tab){
  foreach ($tab as $element) {
    echo  '<input type="radio"  name="'.$element.'" value="'.$element.'" id="'.$element.'">';
    echo '<label for="'.$element.'">'.$element.'</label><br>';
    }
  }
  public function getTextArea($msg){
    echo '<textarea name="'.$msg.'" rows="10" cols="30">';
    echo '</textarea>';
  }
  public function getDate($msg, $date){
    echo '<label for="'.$date.'">'.$msg.'</label>';
    echo '<input type="date" id="'.$date.'" name="'.$date.'" ><br><br>';
  }
}
 ?>
