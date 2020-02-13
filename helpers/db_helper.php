<?php
function replay_count($topic_id){
  $db = new Database;
  $db->query("SELECT * FROM replaies WHERE topic_id = :topic_id");

  $db->bind(":topic_id", $topic_id);

  $rows = $db->resultset();

  return $db->rowCount();
}


function get_catagories(){
  $db = new Database();
  $db->query("SELECT * FROM catagories");
  $results = $db->resultset();
  return $results;
}

function userPostCount($user_id){
  $db = new Database;
  $db->query("SELECT * FROM topics WHERE user_id = :user_id");
  $db->bind(":user_id",$user_id);
  $rows = $db->resultset();

  $topics_count = $db->rowCount();

  $db->query("SELECT * FROM replaies WHERE user_id = :user_id");
  $db->bind(":user_id",$user_id);

  $rows = $db->resultset();

  $replies_count = $db->rowCount();

  return $topics_count + $replies_count;

}

 ?>
