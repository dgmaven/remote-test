<?php

class Customers extends Controller{
    public function index()
    {
        $data['title'] = 'Customers';
        $data['customer'] = $this->model('Customer_model')->getAllCustomers();
        $this->view('templates/header', $data);
        $this->view('customers/index', $data);
        $this->view('templates/footer');
    }
    public function detail($cust_id)
    {
        $data['title'] = 'Customer Detail';
        $data['customer'] = $this->model('Customer_model')->getCustomerById($cust_id);
        $this->view('templates/header', $data);
        $this->view('customers/detail', $data);
        $this->view('templates/footer');
    }
}