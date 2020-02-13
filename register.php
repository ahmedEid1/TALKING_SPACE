<?php require 'core/init.php';?>

<?php

$topic = new Topic;
$user = new User;
$validate = new Validater;

if(isset($_POST['register'])){

    $data = array();
    $data['name'] = $_POST['name'];
    $data['email'] = $_POST['email'];
    $data['username'] = $_POST['username'];
    $data['password'] = md5($_POST['password']);
    $data['password2'] = md5($_POST['password2']);
    $data['about'] = $_POST['about'];
    $data['last_activity'] = date("Y-m-d H:i:s");

$field_array = array('name','email','username','password','password2');

    if($validate->is_required($field_array)){
      if($validate->is_valid_email($data['email'])){
        if($validate->password_match($data['password'],$data['password2'])){
          echo "not working";
          if($user->uploadAvatar()){
              $data['avatar'] = $_FILES["avatar"]["name"];
          }   else{

              $data['avatar'] = 'avatar1.jpg';
          }



          if($user->register($data)){
            redirect("index.php","You are regisered and can now log in ","success");
          }else{
            redirect("index.php","somethimg went wrong ","error");

          }

        }else{
          redirect("register.php","your pass doesnt match","error");
        }
      }else{
        redirect("register.php","please use a valid email address","error");
      }

    }else {
      redirect("register.php","please fill the required fields","error");
    }




/*

*/
}



$template = new Template('templates/register.php');


echo $template;


 ?>
