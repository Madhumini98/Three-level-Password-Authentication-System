<?php

class Home extends Controller
{
    public function index()
    {
        if(count($_POST) > 0)
        {
            if($_POST['val'] == 'L'){
                $this->redirect('login');
            }
            else if($_POST['val'] == 'S'){
                $this->redirect('signup');
            }
        }
        $this->view('home');
    }
}