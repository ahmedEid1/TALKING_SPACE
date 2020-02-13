<?php
class Topic {
  private $db;



  public function __construct(){
      $this->db = new Database;
  }

  public function get_all_topics(){
    $this->db->query("SELECT topics.* ,users.username, users.avater, catagories.name
     FROM topics INNER JOIN users ON topics.user_id = users.id
      INNER JOIN catagories ON topics.catagory = catagories.id
       ORDER BY create_date DESC");

    $results = $this->db->resultset();


    return $results;
  }

  public function get_by_id($id){
    $this->db->query("SELECT topics.* ,users.username, users.avater
     FROM topics INNER JOIN users ON topics.user_id = users.id
      WHERE topics.id = :id");

    $this->db->bind(":id", $id);
    $results = $this->db->resultset();


    return $results;
  }

  public function get_by_user($user_id){
    $this->db->query("SELECT topics.* ,users.username, users.avater, catagories.name
     FROM topics INNER JOIN users ON topics.user_id = users.id
      INNER JOIN catagories ON topics.catagory = catagories.id
      Where topics.user_id  = :user_id
       ORDER BY create_date DESC");

    $this->db->bind(":user_id", $user_id);
    $results = $this->db->resultset();


    return $results;
  }

  public function get_replaies($topic_id){
    $this->db->query("SELECT replaies.*, users.* FROM replaies
      INNER join users ON  replaies.user_id = users.id
      WHERE replaies.topic_id = :topic_id ");

      $this->db->bind(":topic_id",$topic_id);
      $results = $this->db->resultset();


      return $results;

  }

  public function get_by_catagory($catagory_id){
    $this->db->query("SELECT topics.* ,users.username, users.avater, catagories.name
     FROM topics INNER JOIN users ON topics.user_id = users.id
      INNER JOIN catagories ON topics.catagory = catagories.id
      Where catagories.id = :catagory_id
       ORDER BY create_date DESC");

    $this->db->bind(":catagory_id", $catagory_id);
    $results = $this->db->resultset();


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


public function create($data){
  $this->db->query("INSERT INTO topics (catagory,user_id,title,body,last_activity)
        VALUES(:catagory,:user_id,:title,:body,:last_activity) ");

        $this->db->bind(":catagory",$data['catagory_id']);
        $this->db->bind(":user_id",$data['user_id']);
        $this->db->bind(":title",$data['title']);
        $this->db->bind(":body",$data['body']);
        $this->db->bind(":last_activity",$data['last_activity']);

        if($this->db->execute()){
          return true;
        }else{
          return false;
        }
      }

          public function replay($data){
            $this->db->query("INSERT INTO replaies (topic_id,user_id,body)
            VALUES (:topic_id,:user_id,:body)");

            $this->db->bind(":topic_id",$data['id']);
            $this->db->bind(":user_id",$data['user_id']);
            $this->db->bind(":body",$data['body']);

            if($this->db->execute()){
              return true;
            }else{
              return false;
            }

          }


}


















































 ?>
