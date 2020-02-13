<?php

function redirect($page = false, $message = null, $message_type = null){
  if(is_string($page)){
    $location = $page;
  }else{
    $location = $_SERVER['SCRIPT_NAME'];
  }



  if($message != null){
    $_SESSION['message'] = $message;
  }

  if($message_type != null){
    $_SESSION['message_type'] = $message_type;
  }


  header("location: ".$location);
  exit;

}


function displayMessage(){
  if(!empty($_SESSION['message'])){
    $message = $_SESSION['message'];

    if($_SESSION['message_type'] =='error'){
      echo "<div class=\"alert alert-danger\">".$message."</div>";
    }else{
      echo "<div class=\"alert alert-success\">".$message."</div>";
    }
    unset($_SESSION['message']);
    unset($_SESSION['message_type']);

  }else{
    echo "";
  }
}
 function isLogedIn(){
  if(isset($_SESSION['is_loged_in'])){
    return true;
  }else{
    return false;
  }
}

 function getUSer(){
  $userArray = array();
  $userArray['user_id'] = $_SESSION['user_id'];
  $userArray['username'] = $_SESSION['username'];
  $userArray['name'] = $_SESSION['name'];

  return $userArray;
}
























 ?>
