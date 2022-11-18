<?php


  class Posts{

    function show_all(){

      $db = new Database();
      $query = "SELECT * FROM images ORDER BY id DESC";
      $post_data = $db->read($query);

      if(is_array($post_data)){
          return $post_data;        
      }
      return false;
    }

    function show_one($link){

      $db = new Database();
      $query = "SELECT * FROM images WHERE url_address = :link";
      $data['link'] = $link;
      $post_data = $db->read($query,$data);

      if(is_array($post_data)){
          return $post_data[0];        
      }
      return false;
    }
  }

?>