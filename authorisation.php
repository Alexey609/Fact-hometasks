<?php


class authorisation {
  private $servername = "localhost";
  private $username = "Alexey";
  private $password = "pass";
  private $database = "name";
  private $user;
  private $user_password;

    public function __construct($user,$user_password){
        $this -> user = $user;
        $this -> user_password = $user_password;
    }
    public function connect(){
        return mysqli_connect($this->servername, $this->username,$this->password,$this->database);
    }

    public function selectUser(){
        return mysqli_query($this->connect(), "SELECT * FROM users WHERE Login='" . $this->user . "'");
    }

    public function getUser(){
        return $this->user;
    }

    public function getPass(){
        return $this->user_password;
    }

}