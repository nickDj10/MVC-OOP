<?php


  class Upload_file{

    function upload($post,$file){

      $db = new Database();
      $_SESSION['error'] = "";

      if(isset($post['title']) && isset($file['file'])){

        if($file['file']['name'] != "" && $file['file']['error'] == 0){

          $folder = "uploads/";
          if(!file_exists($folder)){
            mkdir($folder,0777,true);
          }

          $destination = $folder . $file['file']['name'];
          move_uploaded_file($file['file']['tmp_name'],$destination);

        }else{
          $_SESSION['error'] = "Upload Error!";   
        }

        if($_SESSION['error'] == ""){

            $upload_values['title'] = $post['title'];
            $upload_values['description'] = $post['description'];
            $upload_values['image'] = $destination;
            $upload_values['url_address'] = get_random_string_max(60);
            $upload_values['date'] = date("Y-m-d H:i:s");
    
            $query = "INSERT INTO images(title, description, image, url_address, date) VALUES (:title, :description, :image, :url_address, :date)";
    
            $data = $db->write($query,$upload_values);
    
            if($data){
              header("Location:". ROOT . "home");
              die;
            }
          }

      }
    }

  }


?>