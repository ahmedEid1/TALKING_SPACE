<?php

class User {

  private $db;

  public function __construct(){
    $this->db = new Database;
  }

  public function uploadAvatar(){
    // didnet know how to make the original script work


    if(isset($_FILES['avatar'])){
        $errors= array();
        $file_name = $_FILES['avatar']['name'];
        $file_size =$_FILES['avatar']['size'];
        $file_tmp =$_FILES['avatar']['tmp_name'];
        $file_type=$_FILES['avatar']['type'];

        $temp = explode('.',$_FILES['avatar']['name']);
        $file_ext=strtolower(end($temp));

        $extensions= array("jpeg","jpg","png");

        if(in_array($file_ext,$extensions)=== false){
          $errors[]='extension not allowed, please choose a JPEG or PNG file.';

          redirect('register.php',"extension not allowed, please choose a JPEG or PNG file.","error");
        }

        if($file_size > 2097152){
          $errors[]='File size must be excately 2 MB';

          redirect('register.php',"extension not allowed, please choose a JPEG or PNG file.","error");

        }

        if(empty($errors)==true){
           move_uploaded_file($file_tmp,"images/avatars/".$file_name);
           echo "Success";
           return true;
        }else{
           print_r($errors);
        }
     }



  }


public function register($data){

    $this->db->query("INSERT INTO users (name,email,avater,username,
    password,about,last_activity)
     VALUES (:name,:email,:avater,:username,:password,:about,:last_activity)");

    $this->db->bind(":name", $data['name']);
    $this->db->bind(":email", $data['email']);
    $this->db->bind(":avater", $data['avatar']);
    $this->db->bind(":username", $data['username']);
    $this->db->bind(":password", $data['password']);
    $this->db->bind(":about", $data['about']);
    $this->db->bind(":last_activity", $data['last_activity']);

    if($this->db->execute()){
      return true;
    }else{
      return false;
    }


}



public function login($username, $password){
  $this->db->query("SELECT * FROM users WHERE username = :username
  AND password = :password");


  $this->db->bind(":username",$username);
  $this->db->bind(":password",$password);

  $row = $this->db->single();

  if($this->db->rowCount() > 0){
    $this->setUserData($row);
    return true;
  }else{
    return false;
  }
}

private function setUserData($row){
  $_SESSION['is_loged_in'] = true;
  $_SESSION['user_id'] = $row->id;
  $_SESSION['username'] = $row->username;
  $_SESSION['name'] = $row->name;
}

public function logout(){
  unset($_SESSION['is_loged_in']);
  unset($_SESSION['user_id']);
  unset($_SESSION['username']);
  unset($_SESSION['name']);
  return true;
}

public function getTotalUsers(){
  $this->db->query("SELECT * FROM users");
  $rows = $this->db->resultset();
  return $this->db->rowCount();
}

}



 ?>
