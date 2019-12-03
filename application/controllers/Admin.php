<?php 

defined('BASEPATH') or exit('No direct script access allowed');
class Admin extends CI_Controller{


	public function index()
	{
		$data['title'] = 'Dashboard';
		$data['user'] = $this->db->get_where('user',['email'=> $this->session->userdata('email')])->row_array();
	// 	$this->load->view('templates/auth_header',$data);
	// 	$this->load->view('templates/sidebar',$data);
	// 	$this->load->view('templates/topbar',$data);
	// 	$this->load->view('admin/index',$data);
	// 	$this->load->view('templates/auth_footer');
	

		$this->load->view('templates/headerAdmin');
		$this->load->view('admin/index');
		$this->load->view('templates/footer');
	
	}

		
	public function produkTerjual()
	{
		$data['title'] = 'Dashboard';
		$data['user'] = $this->db->get_where('user',['email'=> $this->session->userdata('email')])->row_array();

		$this->load->view('templates/headerAdmin');
		$this->load->view('admin/produkTerjual');
		$this->load->view('templates/footer');
	
	}

		
	public function kelola()
	{
		$data['title'] = 'Dashboard';
		$data['user'] = $this->db->get_where('user',['email'=> $this->session->userdata('email')])->row_array();
	// 	$this->load->view('templates/auth_header',$data);
	// 	$this->load->view('templates/sidebar',$data);
	// 	$this->load->view('templates/topbar',$data);
	// 	$this->load->view('admin/index',$data);
	// 	$this->load->view('templates/auth_footer');
	

		$this->load->view('templates/headerAdmin');
		$this->load->view('admin/kelolaProduk');
		$this->load->view('templates/footer');
	
	}
}