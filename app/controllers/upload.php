<?php


  class Upload extends Controller{
    
    function index(){

      $user = $this->loadModel("user");

      if(!$user->check_logged_in()){
        header("Location:". ROOT . "home");
        die;
      }

      if(isset($_POST['title']) && isset($_FILES['file'])){
        $uploader = $this->loadModel("upload_file");
        $uploader->upload($_POST,$_FILES);
      }

      $data['page_title'] = "Upload";
      $this->view("template/upload",$data);
    }
  }


?>