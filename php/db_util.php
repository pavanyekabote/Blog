<?php

    include_once('constants.php');
     class DBUtil{
        
        var $mysql;
        
        function __construct(){
            
            $this->mysql = new  mysqli(Constants::$DB_SERVER, Constants::$DB_USERNAME , Constants::$DB_PASSWORD, Constants::$DB_NAME );
            
        }
        
        function checkLogin($username, $password){
            
            $queryString = "Select * from users where username='".$username."' and password='".$password."'";
            $res = $this->mysql->query($queryString);
            if($res->num_rows > 0)
                return new Keys(base64_encode($username."<==>".$password));
            return null;
        }
    }

     class Keys{
        
        var $session_id;
        function __construct($session_string){
            
            $this->session_id  =  $session_string;
        
        }
        
        function getSessionId(){
            return $this->session_id;    
        }
    }
?>