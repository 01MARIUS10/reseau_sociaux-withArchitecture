<?php

class UserService {
    public $userModel;
    public function __construct()
    {
        $this->userModel = new UserModel();   
    }

    public static function user(){
        if(isset($_SESSION) && isset($_SESSION['user'])){
            return $_SESSION['user'];
        }
        else{
            return false;
        }
    }

    public static function isAdmin(){
        if(
            isset($_SESSION) && isset($_SESSION['user']) && 
            isset($_SESSION['user']->isAdmin) && $_SESSION['user']->isAdmin
        ){
            return true;
        }
        else{
            return false;
        }
    }
    public function login($userLogin,$userPass){
        $user = $this->userModel->findArray([
            'email'=>$userLogin,
            'password'=>$userPass
        ]);

        if(!$user) return false;
        
        $_SESSION["user"] = $user; 
        return $user;
    }
    

}