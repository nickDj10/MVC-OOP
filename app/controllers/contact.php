<?php


  class Contact extends Controller{
    function index(){
      $data['page_title'] = "Contact Us";
      $this->view("template/contact",$data);
    }
  }


?>