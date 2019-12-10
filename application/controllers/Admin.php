<?php 

defined('BASEPATH') or exit('No direct script access allowed');
class Admin extends CI_Controller{

	public function __construct()
    {
		parent::__construct();
		$this->load->model('Mproduk');
		$this->load->library('form_validation');
	}
	public function index()
	{
		$data['title'] = 'Dashboard';
		$data['user'] = $this->db->get_where('user',['email'=> $this->session->userdata('email')])->row_array();
		$data['barang'] = $this->Mproduk->tampil_barang();
	// 	$this->load->view('templates/auth_header',$data);
	// 	$this->load->view('templates/sidebar',$data);
	// 	$this->load->view('templates/topbar',$data);
	// 	$this->load->view('admin/index',$data);
	// 	$this->load->view('templates/auth_footer');
	

		$this->load->view('templates/headerAdmin');
		$this->load->view('admin/index', $data);
		$this->load->view('templates/footer');
	
	}

		
	public function produkTerjual()
	{
		$data['judul'] = 'Detail Data Barang';
		$data['barang'] = $this->Mproduk->get_data_terjual(null)->result();
			$this->load->view('templates/headerAdmin', $data);
			$this->load->view('admin/produkTerjual', $data);
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

	public function tambah_data(){
		$data['title'] = 'Dashboard';
		$data['user'] = $this->db->get_where('user',['email'=> $this->session->userdata('email')])->row_array();

		$this->load->view('templates/headerAdmin');
		$this->load->view('admin/kelolaProduk');
		$this->load->view('templates/footer');
	}

	public function tambah_data_action(){
		$this->upload_img();

		if ($_FILES['image']['name']) {
			if ($this->upload->do_upload('image')) {
				$gbr = $this->upload->data();
					$insert = array(
					'image' => $gbr['file_name'],
					'nama' => $this->input->post("nama"),
					'harga' => $this->input->post("harga"),
					'deskripsi' => $this->input->post("deskripsi"),
					'stok_barang' => $this->input->post("stok_barang"),
					'terjual' => 0,
		);
		//var_dump($insert);
		$this->Mproduk->tambah_data($insert);

		redirect('admin/index');
		
		$this->session->set_flashdata('flash','Data Ditambahkan');
			}
		}
	}

	public function hapus($id)
	{
		$this->Mproduk->hapusDataBarang($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('admin/index');
	}

	public function ubah($id)
	{
		
		$data['judul'] = 'Form Ubah Data Barang';
		$data['barang'] = $this->Mproduk->getBarangById($id);

		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
		$this->form_validation->set_rules('harga', 'Harga', 'required');
		

		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header', $data);
			$this->load->view('admin/edit', $data);
			$this->load->view('templates/footer');
		} else {
			$this->Mproduk->ubahDataBarang();
			$this->session->set_flashdata('flash', 'Diubah');
			redirect('admin/index');
		}
	}

	public function detail($id)
	{
		$data['judul'] = 'Detail Data Barang';
		$data['barang'] = $this->Mproduk->getBarangById($id);
		$this->load->view('templates/header', $data);
		$this->load->view('admin/show', $data);
		$this->load->view('templates/footer');
	}	
	
	public function upload_img() {
		$nmfile = "file_upload_".time();
		$config['upload_path'] = './assets/img/product/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|tif';
		$config['file_name'] = $nmfile;
	
		// Load and initialize upload library
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
	}
	
}