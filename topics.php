<?php require 'core/init.php';?>

<?php

$topic = new Topic;

$catagory = isset($_GET['catagory']) ? $_GET['catagory'] : null;


$template = new Template('templates/topics.php');

if(isset($catagory)){
  $template->topics = $topic->get_by_catagory($catagory);
  $template->title = "Posts in '".($topic->get_catagory($catagory)->name)."'";
}
if(!isset($catagory)){
  $template->topics = $topic->get_all_topics();
}
$template->total_topics = $topic->get_total_topics();
$template->total_catagories = $topic->get_total_catagories();

echo $template;

 ?>
