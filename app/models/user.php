<?php


  class User{

    function login($post){
      $_SESSION['error'] = "";

      $db = new Database();

      if(isset($post['username']) && isset($post['password'])){

        $log_values['username'] = $post['username'];
        $log_values['password'] = $post['password'];

        $query = "SELECT * FROM users WHERE username = :username && password = :password LIMIT 1";

        $user_data = $db->read($query,$log_values);

        if(is_array($user_data)){
          $_SESSION['user_url'] = $user_data[0]->url_address;
          $_SESSION['username'] = $user_data[0]->username;

          header("Location:". ROOT . "home");
          die;
        }else{
          $_SESSION['error'] = "Wrong username or password!";
        }
      }else{
        $_SESSION['error'] = "Please enter a valid username and password!";
      }
    }

    function signup($post){

      $_SESSION['error'] = "";

      $db = new Database();

      if(isset($post['username']) && isset($post['password']) && isset($post['email'])){

        $sign_values['username'] = $post['username'];
        $sign_values['password'] = $post['password'];
        $sign_values['email'] = $post['email'];
        $sign_values['url_address'] = get_random_string_max(60);
        $sign_values['date'] = date("Y-m-d H:i:s");

        $query = "INSERT INTO users(username, password, email, url_address, date) VALUES (:username, :password, :email, :url_address, :date)";

        $user_data = $db->write($query,$sign_values);

        if($user_data){
          header("Location:". ROOT . "login");
          die;
        }
      }else{

			$_SESSION['error'] = "Please enter a valid username and password!";
		}
    }

    function check_logged_in(){
      $_SESSION['error'] = "";
      
      $db = new Database();

      if($_SESSION['user_url']){

        $log_values['user_url'] = $_SESSION['user_url'];

        $query = "SELECT * FROM users WHERE url_address = :user_url LIMIT 1";

        $user_data = $db->read($query,$log_values);

        if(is_array($user_data)){
          $_SESSION['user_url'] = $user_data[0]->url_address;
          $_SESSION['username'] = $user_data[0]->username;
          
          return true;
        }else{
          return false;
        }
      }
    }

    function logout(){
      unset($_SESSION['user_url']);
      unset($_SESSION['username']);

      header("Location:". ROOT . "home");
      die;
    }

  }


?>