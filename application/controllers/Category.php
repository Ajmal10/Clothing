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
		$data['title'] = 'Clothing Something Kategori';
		$data['barang'] = $this->Mkategori->semuaKategori();
		$this->load->view('templates/header',$data);
		$this->load->view('category/index', $data);
		$this->load->view('templates/footer');
	}

	public function indexUser()
	 {
		$data['title'] = 'Clothing Something Kategori';
		$data['user'] = $this->db->get_where('user',['email'=> $this->session->userdata('email')])->row_array();
		$data['barang'] = $this->Mkategori->semuaKategori();
		$this->load->view('templates/headerUser',$data);
		$this->load->view('category/indexUser', $data);
		$this->load->view('templates/footer');
	}

	public function pakaian_atasan()
	{
		$data['title'] = 'Clothing Something Atasan';
		$data['barang'] = $this->Mkategori->get_data_atasan()->result();
		$this->load->view('templates/header', $data);
		$this->load->view('category/pakaian_atasan', $data);
		$this->load->view('templates/footer');
	}

	public function pakaian_atasan_user()
	{
		$data['title'] = 'Clothing Something Atasan';
		$data['user'] = $this->db->get_where('user',['email'=> $this->session->userdata('email')])->row_array();
		$data['barang'] = $this->Mkategori->get_data_atasan()->result();
		$this->load->view('templates/headerUser', $data);
		$this->load->view('category/pakaian_atasanUser', $data);
		$this->load->view('templates/footer');
	}

	public function pakaian_bawahan()
	{
		$data['title'] = 'Clothing Something Bawahan';
		$data['barang'] = $this->Mkategori->get_data_bawahan()->result();
		$this->load->view('templates/header',$data);
		$this->load->view('category/pakaian_bawahan', $data);
		$this->load->view('templates/footer');
	}

	public function pakaian_bawahan_user()
	{
		$data['title'] = 'Clothing Something Bawahan';
		$data['user'] = $this->db->get_where('user',['email'=> $this->session->userdata('email')])->row_array();
		$data['barang'] = $this->Mkategori->get_data_bawahan()->result();
		$this->load->view('templates/headerUser',$data);
		$this->load->view('category/pakaian_bawahanUser', $data);
		$this->load->view('templates/footer');
	}

	public function search()
	{
		$keyword = $this->input->post('keyword');
		$data['barang'] = $this->Mkategori->getProdukBySearch($keyword);
		$this->load->view('templates/header',$data);
		$this->load->view('category/index',$data);
		$this->load->view('templates/footer');
	}
	public function search_User()
	{
		$keyword = $this->input->post('keyword');
		$data['user'] = $this->db->get_where('user',['email'=> $this->session->userdata('email')])->row_array();
		$data['barang'] = $this->Mkategori->getProdukBySearch($keyword);
		$this->load->view('templates/headerUser',$data);
		$this->load->view('category/index',$data);
		$this->load->view('templates/footer');
	}

	
}
