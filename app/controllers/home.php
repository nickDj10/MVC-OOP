<?php


  class Home extends Controller{
    function index(){

      $posts = $this->loadModel("posts");
      $results = $posts->show_all();

      $data['page_title'] = "Home";
      $data['post'] = $results;


      $this->view("template/index",$data);


    }
  }


?>