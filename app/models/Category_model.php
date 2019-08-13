<?php

class Category_model {
    private $table = 'productcategories';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllCategoriesName()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getAllProduct()
    {
        $this->db->query('SELECT * FROM products ORDER BY RAND() limit 9');
        return $this->db->resultSet();
    }

    public function getCategory($id)
    {
        $this->db->query('SELECT * FROM products WHERE CategoryID = :id ORDER BY RAND()');
        $this->db->bind('id', $id);
        return $this->db->resultSet();
    }

    public function getUserById($id)
    {
        $this->db->query('SELECT * FROM products WHERE ProductID = :id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
    
    public function getNameCategory($id)
    {
        $this->db->query('SELECT * FROM products s, productcategories c WHERE s.CategoryID = c.CategoryID and s.CategoryID = :id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function getAllProductByID($id)
    {
        $this->db->query('SELECT * FROM products WHERE UserID = :id');
        $this->db->bind('id', $id);
        return $this->db->resultSet();
    }

    public function deleteProduct($id)
    {
        $query = "DELETE FROM products WHERE ProductID = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
    }
}

?>