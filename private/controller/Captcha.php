<?php

class Captcha extends Controller
{

    public function index(){

        if (isset($_SESSION['count'])) {
            $_SESSION['count']++;    
        }else{
            $_SESSION['count'] = 1;
        }        

        if(array_key_exists("choice",$_POST))
        {
            if($_POST["choice"] == "choice1"){
                unset($_SESSION['count']);
                $this->redirect('color');
            }
        }

        if(array_key_exists("try",$_POST))
        {
            if($_POST["try"] == "try"){
                unset($_SESSION['count']);
                $this->redirect('login');
            }
        }

        $this->view('captcha');
    }

    public function check_choice()
    {
        if(empty($_POST)){
            return true;
        }
        if(array_key_exists("choice",$_POST))
        {
            if($_POST["choice"] == "choice1"){
            
                return true;
            }
            else{
                return false;
            }
        }
    }

}