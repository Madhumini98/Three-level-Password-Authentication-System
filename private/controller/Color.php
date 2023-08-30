<?php

class Color extends Controller
{
    public function index(){

        if (isset($_SESSION['cnt'])) {
            $_SESSION['cnt']++;
        }else{
            $_SESSION['cnt'] = 1;
        }        


        if(count($_POST) > 0 )
        {
            if(array_key_exists('try',$_POST)){
                if($_POST['try'] == 'try'){
                    unset($_SESSION['cnt']);
                    $this->redirect('login');
                }
            }
            
            else if($_POST['choice1'] == $_POST['arr1'] and $_POST['choice2'] == $_POST['arr2'] and $_POST['choice3'] == $_POST['arr3'])
            {
                unset($_SESSION['cnt']);
                $this->redirect('home');
            }
        }

        $this->view('color');
    }
}