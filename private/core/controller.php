<?php 

class Controller
{
    public function view($view,$data = array())
    {
        extract($data);


        if(file_exists("../private/view/".$view.".view.php"))
        {
            require("../private/view/".$view.".view.php");
        }else
        {
            require("../private/view/404.view.php");
        }
    }

    public function redirect($link){
        header("location: ".ROOT."/".trim($link,"/"));
        die;
    }
}