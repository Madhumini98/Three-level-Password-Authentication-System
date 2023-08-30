<?php

class Login extends Controller
{
    public function index()
    {
        # code...
        $errors = array();

        if (count($_POST) > 0) {
            
            if(!empty($_POST['sign'])){
                if($_POST['sign'] == 'true')
                {
                    $this->redirect('signup');
                }
            }
            

            $user = new User();

            if ($row = $user->where('email', $_POST['email'])) {
                
                $row = $row[0];

                if(!empty($_POST['remember'])){
                    setcookie('email',$_POST['email'],time()+ 3600*24*7);
                    setcookie('password',$_POST['password'],time()+ 3600*24*7);
                    setcookie('userlogin',$_POST['remember'],time() + 3600*24*7);
                }else{
                    setcookie('email',$_POST['email'], 3600*24*7);
                    setcookie('password',$_POST['password'], 3600*24*7);
                    if(!empty($_POST['remember']))
                    {
                        setcookie('userlogin',$_POST['remember'], 3600*24*7);
                    }
                }

                if(password_verify($_POST['password'],$row->password)){
                    $this->redirect('captcha');
                }   
            }
            
            $errors['email'] = "Wrong email or password.";
        }

        $this->view('login',['errors'=>$errors]);
    }
}