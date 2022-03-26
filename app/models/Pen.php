<?php

class Pen
{
    //Instantiating the db
    private $db;

    //Instantiating a db 
    public function __construct()
    {
        $this->db = new Database;
    }

    public function getPens()
    {
        $this->db->query("SELECT * FROM pendata");

        $result = $this->db->resultSet();

        return $result;
    }
}
