<?php

class SignupController extends Signup{

    private $uid;
    private $email;
    private $pwd;
    private $pwdrepeat;

    public function __construct($uid, $email, $pwd, $pwdrepeat){
        $this->uid = $uid;
        $this->email = $email;
        $this->pwd = $pwd;
        $this->pwdrepeat = $pwdrepeat;
    }

    public function signupUser(){
        if( $this->emptyInput() == false ){
            header("Location: ../index.php?error=emptyinput");
            exit();
        }
        if( $this->invalidUid() == false ){
            header("Location: ../index.php?error=username");
            exit();
        }
        if( $this->invalidEmail() == false ){
            header("Location: ../index.php?error=email");
            exit();
        }
        if( $this->pwdMatch() == false ){
            header("Location: ../index.php?error=pwdnotmatch");
            exit();
        }
        if( $this->uidTakenCheck() == false ){
            header("Location: ../index.php?error=useroremailtaken");
            exit();
        }

        $this->setUser( $this->uid, $this->pwd, $this->email );

    }

    
    private function emptyInput(){
        $result = true;
        if(empty($this->uid ) || empty($this->email ) || empty($this->pwd ) || empty($this->pwdrepeat )){
            $result = false;
        }

        return $result;
    }


    private function invalidUid(){
        $result = true;
        if(!preg_match("/^[a-zA-Z0-9]*$/", $this->uid)){
            $result = false;
        }
        
        return $result;
    }

    private function invalidEmail(){
        $result = true;
        if( !filter_var( $this->email, FILTER_VALIDATE_EMAIL) ){
            $result = false;
        }
        
        return $result;
    }

    private function pwdMatch(){
        $result = true;
        if($this->pwd !== $this->pwdrepeat){
            $result = false;
        }
        
        return $result;
    }

    private function uidTakenCheck(){
        $result = true;
        if( !$this->checkUser($this->uid, $this->email) ){
            $result = false;
        }
        
        return $result;
    }

}