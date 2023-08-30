<?php

class Database
{
    private function connect()
    {
        $string = DBDRIVER.":host=".DBHOST.";dbname=".DBNAME;

        if(!$con = new PDO($string,DBUSER,DBPASS))
        {
            die("Couldn't connect to the database.");
        }

        return $con;
    }

    public function query($query,$data = array(), $data_type = 'object')
    {
        $con = $this->connect();

        $statement = $con->prepare($query);

        if($statement)
        {
            $check = $statement->execute($data);

            if($check)
            {
                if($data_type == "object")
                {
                    $data = $statement->fetchAll(PDO::FETCH_OBJ);
                }else
                {
                    $data = $statement->fetchAll(PDO::FETCH_ASSOC);
                }
            }
        }

        if(is_array($data) && count($data)>0)
        {
            return $data;
        }
    }
}