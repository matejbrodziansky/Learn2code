<?php

class DB
{
    protected $db;
    protected $statement;
    protected $fetchType = PDO::FETCH_OBJ; //11

    //12
    public function setFetchType($fetchType)
    {
        $this->fetchType = $fetchType;
    }


    public function __construct($server, $database, $user, $password)
    {
        $this->db = new PDO(
            "mysql:dbname=$database;host=$server;charset=utf8",
            $user, $password
        );
    }

    //8
    public function getAll($query, $data = [])
    {                                                       //13
        return $this->query($query, $data)->fetchAll( $this->fetchType );
    }
    
    public function getOne($query, $data = [])
    {
                                                        //13
        return $this->query($query, $data)->fetch( $this->fetchType );
    }

    //5
    public function query($query, $data = [])
    {
        $this->statement = $this->db->prepare($query); // pridáme aj hore protected ak by bolo treba aj inde 
        $this->statement->execute( $data);

        return $this->statement; // 7
    }


}