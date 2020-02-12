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



 ?>
