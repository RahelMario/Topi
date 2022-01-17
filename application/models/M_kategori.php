<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_kategori extends CI_Model
{
    public function data_makanan()
    {
        return $this->db->get_where("menu", array('kat' => 'Makanan'));
    }
    public function data_minuman()
    {
        return $this->db->get_where("menu", array('kat' => 'Minuman'));
    }
    public function data_topping()
    {
        return $this->db->get_where("menu", array('kat' => 'Topping'));
    }
}
