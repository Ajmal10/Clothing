<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Clothing';
		$this->load->view('templates/header',$data);
		$this->load->view('home/index');
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
	
}
