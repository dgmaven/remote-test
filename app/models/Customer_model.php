<?php

class Customer_model{
    
    private $dbh;
    private $stmt;

    public function __construct()
    {
        $dsn = 'mysql:host=localhost;port=3308;dbname=mysystem';

        try {
            $this->dbh = new PDO($dsn,'root','');
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getAllCustomers()
    {
        $this->stmt = $this->dbh->prepare('SELECT * FROM customers');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}