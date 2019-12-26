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

        public function contact()
    {
        $data['title'] = "Gowes Heaven";
        $this->load->view('templates/detail_header', $data);
        $this->load->view('Home/contact',$data);
        $this->load->view('templates/footer');


    }

    public function detailProduct($id){
    	$this->load->model('Home_model');
        $data['product_index'] = $this->Home_model->getAllProductById($id);
    	$data['title'] = "Gowes Heaven";
        $this->load->view('templates/detail_header', $data);
        $this->load->view('Home/detail',$data);
        $this->load->view('templates/footer');

    }
}
