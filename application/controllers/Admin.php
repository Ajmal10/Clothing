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
		$this->load->view('templates/headerAdmin');
		$this->load->view('admin/kelolaProduk');
		$this->load->view('templates/footer');
	
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
			$this->load->view('templates/header', $data);
			$this->load->view('admin/edit', $data);
			$this->load->view('templates/footer');
		
	}

	public function detail($id)
	{
		$data['judul'] = 'Detail Data Barang';
		$data['barang'] = $this->Mproduk->getBarangById($id);
		$this->load->view('templates/header', $data);
		$this->load->view('admin/show', $data);
		$this->load->view('templates/footer');
	}	
	public function update() {
		$nama = $this->input->post('nama');
		$harga =  $this->input->post('harga');
		$deskripsi =  $this->input->post('deskripsi');
		$kategori = $this->input->post('kategori');
		$stok_barang =  $this->input->post('stok_barang');
		$terjual = $this->input->post('terjual');
		$image = $this->upload_img();
		// Call upload image cconfiguration
		if(empty($image['file_name'])){
			$data =[
					'nama' => $nama,
					'harga' => $harga,
					'deskripsi' => $deskripsi,
					'kategori' => $kategori,
					'stok_barang' => $stok_barang,
					'terjual' => $terjual,

			];
		}else{
			$data =[
					'image' => $image['file_name'],
					'nama' => $nama,
					'harga' => $harga,
					'deskripsi' => $deskripsi,
					'kategori' => $kategori,
					'stok_barang' => $stok_barang,
					'terjual' => $terjual,
				];
		}
		$this->db->where('id',$this->input->post('id'));
		$this->db->update('barang',$data);
		redirect('Admin/index');
	}

	
	public function insert(){
		$nama = $this->input->post('nama');
		$harga =  $this->input->post('harga');
		$deskripsi =  $this->input->post('deskripsi');
		$kategori = $this->input->post('kategori');
		$stok_barang =  $this->input->post('stok_barang');
		$image = $this->upload_img();

		$data = [
					'image' => $image['file_name'],
					'nama' => $nama,
					'harga' => $harga,
					'deskripsi' => $deskripsi,
					'kategori'=>$kategori,
					'stok_barang' => $stok_barang,
					'terjual' => 0
		];
				//var_dump($data);
				$res = $this->Mproduk->insert($data);
				redirect('Admin/index');
		}
		
	
	public function upload_img() {
		$config['upload_path'] = './assets/img/product/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|tif';

	
		// Load and initialize upload library
		$this->load->library('upload', $config);
		$this->upload->do_upload('image');
		return $this->upload->data();
	}
	
}