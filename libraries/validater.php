<?php
class Validater {
  public function is_required($field_array){
    foreach($field_array as $field){
      if($_POST["".$field.""] == ''){
        return false;
      }
    }

    return true;
  }



  public function is_valid_email($email){
    if(filter_var($email, FILTER_VAIDARE_EMAIL)){
      return true;
    }else{
      return fslse;
    }
  }


  public function password_match($pw1,$pw2){
    if($pw1 == $pw2){
      return true;
    }else{
      return false;
    }
  }



}


 ?>
