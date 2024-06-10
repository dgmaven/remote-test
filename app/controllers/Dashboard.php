<?php 

class Dashboard extends Controller{
    
    public function index()
    {
        $data['title'] = 'Dashboard';
        $this->view('templates/header', $data);
        $this->view('dashboard/index');
        $this->view('templates/footer');
    }

    public function invoices()
    {
        $data['title'] = 'Invoice Records';
        $this->view('templates/header', $data);
        $this->view('dashboard/invoice');
        $this->view('templates/footer');
    }
    

}