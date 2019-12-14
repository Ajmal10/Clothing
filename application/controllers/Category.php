<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {
	public function __construct()
    {
		parent::__construct();
		$this->load->model('Mkategori');
		$this->load->library('form_validation');
	}
	public function index()
	 {
		$data['title'] = 'Clothing Somthing Kategori';
		$data['barang'] = $this->Mkategori->semuaKategori();
		$this->load->view('templates/header',$data);
		$this->load->view('category/index', $data);
		$this->load->view('templates/footer');
	}
	public function pakaian_atasan()
	{
		$data['title'] = 'Clothing Somthing Atasan';
		$data['barang'] = $this->Mkategori->get_data_atasan()->result();
		$this->load->view('templates/header', $data);
		$this->load->view('category/pakaian_atasan', $data);
		$this->load->view('templates/footer');
	}
	public function pakaian_bawahan()
	{
		$data['title'] = 'Clothing Somthing Bawahan';
		// $data['barang'] = $this->Mkategori->get_data_bawahan();
		$data['barang'] = $this->Mkategori->get_data_bawahan()->result();
		$this->load->view('templates/header',$data);
		$this->load->view('category/pakaian_bawahan', $data);
		$this->load->view('templates/footer');
	}


	
}
