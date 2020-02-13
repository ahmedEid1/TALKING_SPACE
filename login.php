<?php include("core/init.php"); ?>

<?php
if(isset($_POST['do_login'])){
  $username = $_POST['username'];
  $password = md5($_POST['password']);

  $user = new User;

  if($user->login($username,$password)){
    redirect('index.php',"Yu have been loged in","success");
  }else{
    redirect("index.php","this login is not valid","error");
  }

}else{
  redirect("index.php");
}



 ?>
