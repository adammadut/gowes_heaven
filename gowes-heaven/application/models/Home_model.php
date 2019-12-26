<?php

class Home_model extends CI_Model
{
    public function getAllProduct()
    {
        return $this->db->get('product_index')->result_array();
    }

    public function getAllProductById($id){
    	return $this->db->get_where('product_index',['id'=>$id])->row_array();
    }
}