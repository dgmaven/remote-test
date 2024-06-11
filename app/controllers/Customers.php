<?php

class Customers extends Controller{
    public function index()
    {
        $data['title'] = 'Customers';
        $data['customer'] = $this->model('Customer_model')->getAllCustomers();
        $this->view('templates/header');
        $this->view('customers/index', $data);
        $this->view('templates/footer');
    }
}