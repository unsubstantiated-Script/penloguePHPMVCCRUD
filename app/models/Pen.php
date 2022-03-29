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

    public function getPenById($id)
    {

        $this->db->query('SELECT * FROM pendata WHERE id = :id');
        $this->db->bind(':id', $id);

        $result = $this->db->single();

        return $result;
    }

    public function addPen($data)
    {
        $this->db->query('INSERT INTO pendata(penBrand, penName, penColor, nib, fillingMech, inkBrand, inkColor, dateFilled) VALUES (:penBrand, :penName, :penColor, :nib, :fillingMech, :inkBrand, :inkColor, :dateFilled)');
        $this->db->bind(':penBrand', $data['pen_brand']);
        $this->db->bind(':penName', $data['pen_name']);
        $this->db->bind(':penColor', $data['pen_color']);
        $this->db->bind(':nib', $data['nib']);
        $this->db->bind(':fillingMech', $data['filling_mech']);
        $this->db->bind(':inkBrand', $data['ink_brand']);
        $this->db->bind(':inkColor', $data['ink_color']);
        $this->db->bind(':dateFilled', $data['date_filled']);

        //execute 
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }


    //delete a post
    public function deletePen($id)
    {
        $this->db->query('DELETE FROM pendata WHERE id = :id');
        $this->db->bind(':id', $id);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
