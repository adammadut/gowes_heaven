<?php

class Admin_model extends CI_Model
{
    public function getAllProduct()
    {
        return $this->db->get('product_index')->result_array();
    }

    public function tambahDataProduk($image)
    {
        $data = [
            "nama" => $this->input->post('nama'),
            "kategori" => $this->input->post('kategori'),
            "deskripsi" => $this->input->post('deskripsi'),
            "harga" => $this->input->post('harga'),
            "gambar"  => $image['file_name']
        ];

        return $this->db->insert('product_index', $data);
    }

    public function save($data)
    {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }
}
