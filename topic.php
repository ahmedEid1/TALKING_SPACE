<?php require 'core/init.php';?>

<?php

$topic = new Topic;
$user = new User;

$id = isset($_GET['id']) ? $_GET['id'] : null;


if(isset($_POST['do_replay'])){
  $data = array();

  $data['id'] = $_GET['id'];
  $data['body'] = $_POST['body'];
  $data['user_id'] = getUser()['user_id'];


  $validate =  new Validater;

  $filed_array = array("body");

  if($validate->is_required($filed_array)){
    if($topic->replay($data)){
      redirect('topic.php?id='.$id,"your replay has been submitted","success");
    }else{
      redirect('topic.php?id='.$id,"something went wrong","error");

    }
  }else{
    redirect('topic.php?id='.$id,"something is wrong","error");

  }
}

$template = new Template('templates/subject.php');

if(isset($id)){
  $template->topics = $topic->get_by_id($id);
  $template->replaies = $topic->get_replaies($id);

}
if(!isset($id)){
  $template->topics = $topic->get_all_topics();
}
$template->total_topics = $topic->get_total_topics();
$template->total_catagories = $topic->get_total_catagories();
$template->total_users = $user->getTotalUsers();

echo $template;

 ?>
