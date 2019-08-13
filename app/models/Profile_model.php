<?php

class Profile_model
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function insertProduct($data)
    {
        $query = "INSERT INTO products values ('', :productName, :productPrice, :productDesc, :categoryID, :productImg, :userID)";
        $this->db->query($query);
        $this->db->bind('productName', $data['productName']);
        $this->db->bind('productPrice', $data['productPrice']);
        $this->db->bind('productDesc', $data['productDesc']);
        $this->db->bind('categoryID', $data['categoryID']);
        $this->db->bind('productImg', $data['productImg']);
        $this->db->bind('userID', $_SESSION['id']);
        $this->db->execute();
        return $this->db->rowCount();
    }

}
