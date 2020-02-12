<?php require 'core/init.php';?>

<?php

$topic = new Topic;


$template = new Template('templates/frontpage.php');

$template->topics = $topic->get_all_topics();
$template->total_topics = $topic->get_total_topics();
$template->total_catagories = $topic->get_total_catagories();


echo $template;

 ?>
