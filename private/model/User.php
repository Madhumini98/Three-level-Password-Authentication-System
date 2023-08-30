<?php

class User extends Model
{
    protected $allowedColumns = [
        'firstname',
        'lastname',
        'email',
        'gender',
        'password'
    ];

    protected $beforeInsert = [
        'hash_password'
    ];

    public function validate($DATA){

        $this->errors = array();
        // check first name.
        if(empty($DATA['firstname']) || !preg_match("/^[a-zA-Z]+$/",$DATA['firstname'])){
            $this->errors['firstname'] = "Only letters allowed in first name.";
        }
        // check last name.
        if(empty($DATA['lastname']) || !preg_match("/^[a-zA-Z]+$/",$DATA['lastname'])){
            $this->errors['lastname'] = "Only letters allowed in last name.";
        }
        // check email.
        if(empty($DATA['email']) || !filter_var($DATA['email'],FILTER_VALIDATE_EMAIL)){
            echo $DATA['email'];
            $this->errors['email'] = "Email is not valid.";
        }

        // check for password.
        if(empty($DATA['password']) || empty($DATA['password2']) || ($DATA['password'] != $DATA['password2'])){
            $this->errors['passwords'] = "The password do not match.";
        }

        // check password length.
        if(strlen($DATA['password']) < 8 ){
            $this->errors['pass_len'] = "Password must contain at least 8 characters.";
        }
        // check gender
        $genders = ['Male','Female'];
        if(empty($DATA['gender']) || in_array($DATA['gender'],$genders)){
            $this->errors['gender'] = "Gender is not valid.";
        }
            
        if(count($this->errors) == 0){
            return true;
        }

        return false;        
    }

    public function hash_password($DATA){
        $DATA['password'] = password_hash($DATA['password'],PASSWORD_DEFAULT);
        return $DATA;
    }
}