<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Troli extends CI_Controller {

	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('troli/index');
		$this->load->view('templates/footer');
	}
	
}
