<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller{

	public function __construct()
    {
		parent::__construct();
		$this->load->model('Mhome');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
		$data['barang'] = $this->Mhome->tampil_barang();
		$data['title'] = 'My Profile';
		$this->load->view('templates/auth_header',$data);
		$this->load->view('templates/sidebarUser',$data);
		$this->load->view('templates/topbar',$data);
		$this->load->view('user/index',$data);
		$this->load->view('templates/auth_footer');
	}

	public function tambah_ke_keranjang($id)
	{
		$barang = $this->Mhome->find($id);
		$data = array(

					'id'		=> $barang->id,
       				'qty' 		=> 1,
					'price' 	=> $barang->harga,
					'name' 		=> $barang->nama
		);

		$this->cart->insert($data);
		redirect('home/index2');
	}

	public function tambah_keranjang()
	{
		$this->load->view('templates/auth_header');
		$this->load->view('templates/sidebarUser');
		$this->load->view('templates/topbar');
		$this->load->view('user/');
		$this->load->view('templates/auth_footer');
	}

	public function detailKeranjang()
	{
	$data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('templates/auth_header');
		$this->load->view('templates/sidebarUser');
		$this->load->view('templates/topbar',$data);
		$this->load->view('user/keranjang');
		$this->load->view('templates/auth_footer');
	}

	public function hapus_keranjang()
	{
		$this->cart->destroy();
		redirect('home/index2');
	}

	public function pembayaran()
	{
		$data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('templates/auth_header');
		$this->load->view('templates/sidebarUser');
		$this->load->view('templates/topbar',$data);
		$this->load->view('user/pembayaran');
		$this->load->view('templates/auth_footer');
	}

	public function proses_pesanan()
	{

		$data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
		$this->cart->destroy();
		$this->load->view('templates/auth_header', $data);
		$this->load->view('templates/sidebarUser', $data);
		$this->load->view('templates/topbar',$data);
		$this->load->view('user/proses_pesanan', $data);
		$this->load->view('templates/auth_footer');
	}

}

