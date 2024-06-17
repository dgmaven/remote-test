<?php

class Invoice_model{

    private $table = 'invoices';
    private $table2 = 'invoice_item';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllInvoices()
    {
        $this->db->query('SELECT * FROM '.$this->table);
        return $this->db->resultSet();
    }

    // public function getAllInvoiceItems()

    // {
    //     $this->db->query('SELECT * FROM'  .$this->table2. ' WHERE invoice_id:invoice_id ');
    //     return $this->db->resultSet();
    // }






}