<?php


  class Database{

    public  function db_connect(){
      try{
        $str = DB_TYPE . ":host=" . DB_HOST . ";dbname=" . DB_NAME . ";";
        return $db = new PDO($str,DB_USER,DB_PASS);
      }catch(PDOException $e){
        die($e->getMessage());
      }
    }

    public function read($query,$data=[]){

      $db = $this->db_connect();
      $stm = $db->prepare($query);
      
      if(count($data) == 0 ){
        $stm = $db->query($query);
        $check = 0;
        if($stm){
          $check = 1;
        }
      }else {
        $check = $stm->execute($data);
      }

      if($check){
        $data =  $stm->fetchAll(PDO::FETCH_OBJ);
        if(is_array($data) && count($data) > 0){
          return $data;
        }
        return false;
      }else{
        return false;
      }
    }

    function write($query,$data=[]){

      $db = $this->db_connect();
      $stm = $db->prepare($query);
      
      if(count($data) == 0 ){
        $stm = $db->query($query);
        $check = 0;
        if($stm){
          $check = 1;
        }
      }else {
        $check = $stm->execute($data);
      }

      if($check){
        return true;
      }else{
        return false;
      }
    }
  }


?>