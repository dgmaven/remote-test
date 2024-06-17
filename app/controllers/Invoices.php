<?php

class Invoices extends Controller {

    public function index()
    {
        $data['title'] = 'Invoices';
        $data['invoices'] = $this->model('Invoice_model')->getAllInvoices();
        $this->view('templates/header', $data);
        $this->view('items/index', $data);
        $this->view('templates/footer');
    }


}