<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index()
    {
        $this->load->model('Home_model');
        $data['product_index'] = $this->Home_model->getAllProduct();
        $data['title'] = "Gowes Heaven";
        $this->load->view('templates/header', $data);
        $this->load->view('Home/index',$data);
        $this->load->view('templates/footer');
    }
}
