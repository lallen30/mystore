<?php
class Products extends CI_Controller{
    public function index(){
        //Load View
        $data['main_content'] = 'products';
        $this->load->view('layouts/main', $data);
    }
}
