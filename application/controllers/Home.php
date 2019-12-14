<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
    {
		parent::__construct();
		$this->load->model('Mhome');
		$this->load->library('form_validation');
	}
	public function index()
	{
		$data['title'] = 'Clothing';
		$data['barang'] = $this->Mhome->tampil_barang();
		$this->load->view('templates/header',$data);
		$this->load->view('home/index',$data);
		$this->load->view('templates/footer');
	}

	public function index2()
	{
		$data['title'] = 'Clothing';
		$data['user'] = $this->db->get_where('user',['email'=> $this->session->userdata('email')])->row_array();
		$data['shop'] = 'Shopping Cart';
		$this->load->view('templates/headerUser',$data);
		$this->load->view('home/index');
		$this->load->view('templates/footer');
	}

	public function troli($id)
	{
		$data['title'] = 'Clothing';
		$data['barang'] = $this->Mhome->getBarangById($id);
		$this->load->view('templates/header',$data);
		$this->load->view('troli/index',$data);
		$this->load->view('templates/footer');
	}
	
	public function checkout()
	{
		$data['title'] = 'Clothing';
		$data['barang'] = $this->Mhome->checkout(null)->result();
		$this->load->view('templates/header',$data);
		$this->load->view('home/index',$data);
		$this->load->view('templates/footer');
	}
	
	public function category()
	{
		$data['title'] = 'Clothing';
		$data['barang'] = $this->Mhome->tampil_barang();
		$this->load->view('templates/header',$data);
		$this->load->view('home/index',$data);
		$this->load->view('templates/footer');
	}


}
