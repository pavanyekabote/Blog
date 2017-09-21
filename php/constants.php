<?php
    global $PATH ;
    class Constants{
        
        public static $TITLE = "VLOG";
        
        public static $DB_SERVER = "localhost:3306";
        public static $DB_USERNAME = "root";
        public static $DB_PASSWORD = "";
        public static $DB_NAME = "vlog";
    }


    class Component{
        static function showAlert($msg){
            $str = '<div class="alert alert-success alert-pos" role="alert">'.$msg.'</div>';
            echo $str;
            
        }
    }
?>