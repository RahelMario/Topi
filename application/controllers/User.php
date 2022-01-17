<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('user/index', $data);
    }

    public function menu()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->M_menu->tampil_data()->result();
        $this->load->view('user/menu', $data);
    }

    public function order($id)
    {
        $menu = $this->M_menu->find($id);
        $data = array(
            'id' => $menu->id,
            'qty' => 1,
            'price' => $menu->harga,
            'name' => $menu->nama_menu
        );
        $this->cart->insert($data);
        redirect('user/menu');
    }
    public function detail_order()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('user/order', $data);
    }
    public  function hapus_order()
    {
        $this->cart->destroy();
        redirect('user/menu');
    }
    public function bayar()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('user/bayar', $data);
    }
    public function proses_pesan()
    {
        $is_processed = $this->M_invoice->index();
        if ($is_processed) {
            $this->cart->destroy();
            $this->session->set_flashdata('message', '<div class="text-center align-middle alert
            alert-success">Pesanan Anda Sedang Diproses Mohon Ditunggu</div>');
            redirect('user/menu');
        } else {
            echo "Maaf Pesanan Anda Gagal Diproses";
        }
    }
    public function detail($id)
    {
        $data['menu'] = $this->M_menu->detail_menu($id);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('user/detail', $data);
    }
    public function makanan()
    {
        $data['makanan'] = $this->M_kategori->data_makanan()->result();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('user/makanan', $data);
    }
    public function minuman()
    {
        $data['minuman'] = $this->M_kategori->data_minuman()->result();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('user/minuman', $data);
    }
    public function topping()
    {
        $data['topping'] = $this->M_kategori->data_topping()->result();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('user/topping', $data);
    }
}
