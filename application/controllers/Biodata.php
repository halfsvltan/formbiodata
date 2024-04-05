<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Biodata extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // Load model jika diperlukan
        //$this->load->model('nama_model');
    }

    public function index()
    {
        // Tampilkan view untuk menampilkan formulir biodata
        $this->load->view('formbiodata');
    }

    public function tampil()
    {
        // Tangani data yang dikirimkan dari formulir
        $data = array(
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'nohp' => $this->input->post('nohp'),
            'nim' => $this->input->post('nim'),
            'email' => $this->input->post('email'),
            'tgl_lahir' => $this->input->post('tgl_lahir')
        );
        
        // Tampilkan view untuk menampilkan data biodata yang telah diisi
        $this->load->view('tampilan-biodata', $data);
    }
}