<?php require 'core/init.php';?>

<?php

$topic = new Topic;
$user = new User;

$template = new Template('templates/frontpage.php');

$template->topics = $topic->get_all_topics();
$template->total_topics = $topic->get_total_topics();
$template->total_catagories = $topic->get_total_catagories();
$template->total_users = $user->getTotalUsers();

echo $template;

 ?>
