<?php


  class Single_post extends Controller{
    function index($link = ""){

      if($link == ""){

        $data['page_title'] = "Image not found!";
        $this->view("template/not_found",$data);   

      }else {

        $post = $this->loadModel("posts");
        $result = $post->show_one($link);

        $data['page_title'] = "Home";
        $data['post'] = $result;


        $this->view("template/single_post",$data);        

      }
    }
  }


?>