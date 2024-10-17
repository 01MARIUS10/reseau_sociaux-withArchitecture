<?php

class Guard{
    public static function Auth($url = null){

        if(isset($_SESSION) && isset($_SESSION["user"])){
            return true;   
        }
        redirect('/login');
        return false;
    }
    public static function redirectHome($url = null){
        if(!(isset($_SESSION) && isset($_SESSION["user"]))){
            return true;   
        }
        else if($url!=='/home'){
            redirect('/home');
        }
        return false;
    }
}

?>