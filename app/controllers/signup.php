<?php


  class Signup extends Controller{
    function index(){
      $data['page_title'] = "Sign Up";

      $user = $this->loadModel("user");
      $user->signup($_POST);

      $this->view("template/signup",$data);
    }
  }


?>