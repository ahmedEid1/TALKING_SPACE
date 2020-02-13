<?php require 'core/init.php';?>

<?php
$topic = new Topic;



if(isset($_POST['do_create'])){
  $validate = new Validater;

  $data = array();

  $data['title'] = $_POST['title'];
  $data['body'] = $_POST['body'];
  $data['catagory_id'] = $_POST['catagory'];
  $data['user_id'] = getUser()['user_id'];
  $data['last_activity'] = date("Y-m-d H:i:a");


  $field_required = array("title","body","catagory");

  if($validate->is_required($field_required)){
    if($topic->create($data)){
      redirect("index.php" ,"your topic have been posted","success");
    }else{
      redirect("topic.php?id=".$topic_id,"something went wrong","error");
    }
  }else{
    redirect("create.php","please fill the required fields","error");
  }
}



$template = new Template('templates/create.php');
echo $template;


 ?>
