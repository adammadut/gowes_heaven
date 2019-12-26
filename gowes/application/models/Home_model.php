<?php

class Home_model extends CI_Model
{
    public function getAllProduct()
    {
        return $this->db->get('product_index')->result_array();
    }
}