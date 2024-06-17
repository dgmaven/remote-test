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
            Flasher::setFlash('The item is ','failed', 'to be add', 'danger');
            header('Location:' . BASEURL . '/items');
            
        }
    }

    public function delete($id)
    {
        if( $this->model('Item_model')->deleteItem($id) > 0) {
            Flasher::setFlash('The item have been','successful', 'delete', 'success');
            header('Location:' . BASEURL . '/items');
            exit;
        } else {
            Flasher::setFlash('Item ','failed', 'to be delete', 'danger');
            header('Location:' . BASEURL . '/items');
            
        }
    }
}