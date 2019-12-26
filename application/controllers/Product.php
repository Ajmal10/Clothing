<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {
	public function __construct()
    {
		parent::__construct();
		$this->load->model('Mproduk');
		$this->load->library('form_validation');
		
	}
	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('product/index');
		$this->load->view('templates/footer');
	}
	
	public function detail($id){
        $data['judul'] = 'Detail Produk';
        $data['barang'] = $this->Mproduk->detail_Barang($id);
        $this->load->view('templates/header', $data);
        $this->load->view('product/index', $data);
        $this->load->view('templates/footer');
    }

	public function detail_user($id){
        $data['judul'] = 'Detail Produk';
        $data['user'] = $this->db->get_where('user',['email'=> $this->session->userdata('email')])->row_array();
        $data['barang'] = $this->Mproduk->detail_Barang($id);
        $this->load->view('templates/headerUser', $data);
        $this->load->view('product/produkUser', $data);
        $this->load->view('templates/footer');
    }
}
