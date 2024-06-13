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

    public function addCustomer($data)
    {
        $query = "INSERT INTO customers
                    VALUES
                    ('', :name , :passport, :address, :country, :phone, :email, :notes)";

        $this->db->query($query);
        $this->db->bind('name', $data['name']);
        $this->db->bind('passport', $data['passport']);
        $this->db->bind('address', $data['address']);
        $this->db->bind('country', $data['country']);
        $this->db->bind('phone', $data['phone']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('notes', $data['notes']);

        $this->db->execute();

        return $this->db->rowCount();

        // return 0;
    }
}