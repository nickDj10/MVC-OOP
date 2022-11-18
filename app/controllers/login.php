<?php


  class Login extends Controller{
    function index(){
      $data['page_title'] = "Login";

      $user = $this->loadModel("user");
      $user->login($_POST);

      $this->view("template/login",$data);
    }
  }


?>