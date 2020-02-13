<?php require 'core/init.php';?>

<?php

$topic = new Topic;
$user = new User;

$catagory = isset($_GET['catagory']) ? $_GET['catagory'] : null;

$user_id = isset($_GET['user']) ? $_GET['user'] : null;

$template = new Template('templates/topics.php');

if(isset($catagory)){
  $template->topics = $topic->get_by_catagory($catagory);
  $template->title = "Posts in '".($topic->get_catagory($catagory)->name)."'";
}

if(isset($user_id)){
  $template->topics = $topic->get_by_user($user_id);
}

if(!isset($catagory) && !isset($user_id)){
  $template->topics = $topic->get_all_topics();
}
$template->total_topics = $topic->get_total_topics();
$template->total_catagories = $topic->get_total_catagories();
$template->total_users = $user->getTotalUsers();

echo $template;

 ?>
