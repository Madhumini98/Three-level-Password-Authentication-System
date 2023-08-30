<?php

class Model extends Database
{
    public $errors = array();

    public function __construct()
    {
        if(!property_exists($this,'table'))
        {
            $this->table = strtolower($this::class);
        }
    }

    public function where($column,$value)
    {
        $column = addslashes($column);
        $query = "select * from $this->table where $column = :value";
        return $this->query($query,['value'=>$value]);
    }

    public function insert($data)
    {
        if(property_exists($this,'allowedColumns'))
        {
            foreach($data as $key => $column)
            {
                if(!in_array($key,$this->allowedColumns))
                {
                    unset($data[$key]);
                }
            }
        }

        if(property_exists($this,'beforeInsert'))
        {
            foreach($this->beforeInsert as $func)
            {
                $data = $this->$func($data);
            }
        }

        $keys = array_keys(($data));
        $columns = implode(',',$keys);
        $values = implode(',:',$keys);

        $query = "insert into $this->table ($columns) values (:$values)";
        
        return $this->query($query,$data);
    }
}