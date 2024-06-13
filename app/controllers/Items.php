<?php

class Items extends Controller {
    public function index()
    {
        $data['title'] = 'Items';
        $data['item'] = $this->model('Item_model')->getAllItems();
        $this->view('templates/header', $data);
        $this->view('items/index', $data);
        $this->view('templates/footer');

    }

    public function detail($item_id)
    {
        $data['title'] = 'Item Detail';
        $data['item'] = $this->model('Item_model')->getItemById($item_id);
        $this->view('templates/header', $data);
        $this->view('items/detail', $data);
        $this->view('templates/footer');
    }

    public function add()
    {
        if( $this->model('Item_model')->addItem($_POST) > 0) {
            Flasher::setFlash('The item have been','successful', 'added', 'success');
            header('Location:' . BASEURL . '/items');
            exit;
        } else {
            Flasher::setFlash('The item is ','failed', 'to be add', 'success');
            header('Location:' . BASEURL . '/items');
            
        }
    }
}