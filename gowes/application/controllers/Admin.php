<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
	public function index()
	{
		$data['title'] = 'Dashboard';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['user']['name'];
		$this->load->model('Admin_model');
		$data['product_index'] = $this->Admin_model->getAllProduct();

		$this->load->view('templates/admin_header', $data);
		$this->load->view('templates/admin_sidebar', $data);
		$this->load->view('templates/admin_topbar', $data);
		$this->load->view('admin/index', $data);
		$this->load->view('templates/admin_footer');
	}

	public function tambah()
	{
		$data['title'] = 'Dashboard';
		$this->load->model('Admin_model');
		$config['upload_path'] = './assets/img/product/';
		$config['allowed_types'] = 'jpg|png|jpeg|gif';
		$config['max_size'] = '3048';  //3MB max
		$config['max_width'] = '4480'; // pixel
		$config['max_height'] = '4480'; // pixel
		$config['file_name'] = $_FILES['image']['name'];
		$this->load->library('upload', $config);


		if (!empty($_FILES['image']['name'])) {
			if ($this->upload->do_upload('image')) {
				$image = $this->upload->data();
				$this->Admin_model->tambahDataProduk($image);
			}
		}

		// redirect('admin');
	}

	public function ajax_add()
	{
		$this->_validate();
		$data = array(
			'nama' => $this->input->post('nama'),
			'kategori' => $this->input->post('kategori'),
			'deskripsi' => $this->input->post('deskripsi'),
			'harga' => $this->input->post('harga'),
			'gambar' => "Gambar"
		);
		$insert = $this->Admin_model->save($data);
		echo json_encode(array("status" => TRUE));
	}

	private function _validate()
	{
		$data = array();
		$data['error_string'] = array();
		$data['inputerror'] = array();
		$data['status'] = TRUE;

		if ($this->input->post('nama') == '') {
			$data['inputerror'][] = 'nama';
			$data['error_string'][] = 'Nama tidak boleh kosong !';
			$data['status'] = FALSE;
		}

		if ($this->input->post('kategori') == 'kategori') {
			$data['inputerror'][] = 'kategori';
			$data['error_string'][] = 'Mohon pilih kategori';
			$data['status'] = FALSE;
		}

		if ($this->input->post('deskripsi') == '') {
			$data['inputerror'][] = 'deskripsi';
			$data['error_string'][] = 'Deskripsi tidak boleh kosong';
			$data['status'] = FALSE;
		}

		if ($this->input->post('harga') == '') {
			$data['inputerror'][] = 'harga';
			$data['error_string'][] = 'Harga tidak boleh kosong';
			$data['status'] = FALSE;
		}

		// if ($this->input->post('gambar') == '') {
		// 	$data['inputerror'][] = 'address';
		// 	$data['error_string'][] = 'Addess is required';
		// 	$data['status'] = FALSE;
		// }

		if (is_int($this->input->post('harga'))) {
			$data['inputerror'][] = 'harga';
			$data['error_string'][] = 'Harga harus angka';
			$data['status'] = FALSE;
		}

		if ($data['status'] === FALSE) {
			echo json_encode($data);
			exit();
		}
	}
}
