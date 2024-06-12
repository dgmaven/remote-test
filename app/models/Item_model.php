<?php

class Item_model{
    
    private $table = 'items';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllItems()
    {
        $this->db->query('SELECT * FROM '.$this->table);
        return $this->db->resultSet();
    }

    public function getItemById($item_id)
    {
        $this->db->query('SELECT * FROM '.$this->table. ' WHERE item_id=:item_id');
        $this->db->bind('item_id', $item_id);
        return $this->db->single();
    }

    public function addItem($data)
    {
        $query = "INSERT INTO items
                    VALUES
                    ('',:type, :name , :sku, :unit, :price, :description , :image )";

        $this->db->query($query);
        $this->db->bind('type', $data['type']);
        $this->db->bind('name', $data['name']);
        $this->db->bind('sku', $data['sku']);
        $this->db->bind('unit', $data['unit']);
        $this->db->bind('price', $data['price']);
        $this->db->bind('description', $data['description']);
        $this->db->bind('image', $data['image']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}