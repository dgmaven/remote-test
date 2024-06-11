<?php

class Customer_model{
    
    private $table = 'customers';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllCustomers()
    {
        $this->db->query('SELECT * FROM '.$this->table);
        return $this->db->resultSet();
    }

    public function getCustomerById($cust_id)
    {
        $this->db->query('SELECT * FROM '.$this->table. ' WHERE cust_id=:cust_id');
        $this->db->bind('cust_id', $cust_id);
        return $this->db->single();
    }
}