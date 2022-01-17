<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Invoice extends CI_Controller
{
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['invoice'] = $this->M_invoice->tampil_data();
        $this->load->view('admin/invoice', $data);
    }
    public function detail($id_invoice)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['invoice'] = $this->M_invoice->ambil_id_invoice($id_invoice);
        $data['pesanan'] = $this->M_invoice->ambil_id_pesanan($id_invoice);
        $this->load->view('admin/detail_inv', $data);
    }
}
