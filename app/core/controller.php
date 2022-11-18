<?php


  class Controller{
    protected function view($view_page,$data=[]){
      if(file_exists("../app/views/" . $view_page . ".php")){
        include "../app/views/" . $view_page . ".php";
      }else{
        include "../app/views/404.php";
      }     
    }

    protected function loadModel($model){
      if(file_exists("../app/models/" . $model . ".php")){
        include "../app/models/" . $model  . ".php";
        return $model = new $model();
      }
      
      return false;

    }
  }


?>