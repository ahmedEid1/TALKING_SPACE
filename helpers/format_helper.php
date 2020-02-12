<?php

function format_date($date){
  $date = date("r j, Y, g:i a", strtotime($date));
  return $date;
}

function is_active($catagory){
  if(isset($_GET['catagory'])){
    if($_GET['catagory'] == $catagory){
      return "active";
    }else{
      return "";
    }
  }else{
    if($catagory==null){
      return "active" ;
    }
  }
}

 ?>
