<?php
class Topic {
  private $db;



  public function __construct(){
      $this->db = new Database;
  }

  public function get_all_topics(){
    $this->db->query("SELECT topics.* ,users.username, users.avater, catagories.id
     FROM topics INNER JOIN users ON topics.user_id = users.id
      INNER JOIN catagories ON topics.catagory = catagories.id
       ORDER BY create_date DESC");

    $results = $this->db->resultset();


    return $results;
  }


  public function get_by_catagory($catagory_id){
    $this->db->query("SELECT topics.* ,users.username, users.avater, catagories.id
     FROM topics INNER JOIN users ON topics.user_id = users.id
      INNER JOIN catagories ON topics.catagory = :catagory_id
       ORDER BY create_date DESC");

    $this->db->bind(":catagory_id", $catagory_id);
    $results = $this->db->resultset();

    print_r($results);



    return $results;
  }


public function get_total_topics(){
  $this->db->query('SELECT * FROM topics');
  $rows = $this->db->resultset();
  return $this->db->rowCount();
}

public function get_total_catagories(){
  $this->db->query('SELECT * FROM catagories');
  $rows = $this->db->resultset();
  return $this->db->rowCount();
}

public function get_total_replaies(){
  $this->db->query('SELECT * FROM replaies WHERE topic_id = '.$topic_id);
  $rows = $this->db->resultset();
  return $this->db->rowCount();
}


public function get_catagory($catagory_id){
  $this->db->query("SELECT * FROM catagories where id = :catagory_id");

  $this->db->bind(":catagory_id",$catagory_id);
  $row = $this->db->single();

  return $row;
}





























}























 ?>
