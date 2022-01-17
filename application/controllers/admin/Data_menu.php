<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_menu extends CI_Controller
{
    public function index()
    {
        $data['menu'] = $this->M_menu->tampil_data()->result();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('admin/data_menu', $data);
    }
    public function tambah_aksi()
    {
        $nama_menu = $this->input->post('nama_menu');
        $des = $this->input->post('des');
        $harga = $this->input->post('harga');
        $stok = $this->input->post('stok');
        $kat = $this->input->post('kat');
        $gambar = $_FILES['gambar']['name'];
        if ($gambar = '') {
        } else {
            $config['upload_path'] = './assets/img';
            $config['allowed_types'] = 'jpg|jpeg|png';
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('gambar')) {
                echo "Gambar Gagal Diupload !";
            } else {
                $gambar = $this->upload->data('file_name');
            }
        }


        $data = array(
            'nama_menu' => $nama_menu,
            'des' => $des,
            'harga' => $harga,
            'stok' => $stok,
            'kat' => $kat,
            'gambar' => $gambar

        );

        $this->M_menu->tambah_menu($data, 'menu');
        redirect('admin/data_menu');
    }
    public function edit($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $where = array('id' => $id);
        $data['menu'] = $this->M_menu->edit($where, 'menu')->result();
        $this->load->view('admin/edit', $data);
    }

    public function update()
    {
        $id = $this->input->post('id');
        $nama_menu = $this->input->post('nama_menu');
        $des = $this->input->post('des');
        $harga = $this->input->post('harga');
        $stok = $this->input->post('stok');
        $kat = $this->input->post('kat');

        $data = array(
            'nama_menu' => $nama_menu,
            'des' => $des,
            'harga' => $harga,
            'stok' => $stok,
            'kat' => $kat
        );

        $where = array('id' => $id);
        $this->M_menu->update($where, $data, 'menu');
        redirect('admin/data_menu');
    }
    public function hapus($id)
    {

        $where = array('id' => $id);
        $this->M_menu->hapus($where, 'menu');
        redirect('admin/data_menu');
    }
}
