<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mhome');
		$this->load->model('Mpesanan');
		$this->load->model('Mproduk');
		$this->load->library('form_validation');
		$this->load->library('cart');
	}

	public function index()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['barang'] = $this->Mhome->tampil_barang();
		$data['title'] = 'My Profile';
		$this->load->view('templates/auth_header', $data);
		$this->load->view('templates/sidebarUser', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('user/index', $data);
		$this->load->view('templates/auth_footer');
	}

	public function tambah_ke_keranjang()
	{
		$product = [
			'id' => $this->input->post('id'),
			'name' => $this->input->post('nama'),
			'price' => $this->input->post('harga'),
			'image' => $this->input->post('gambar'),
			'qty' => 1
		];

		$this->cart->insert($product);
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
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('templates/headerUser', $data);
		$this->load->view('troli/index');
		$this->load->view('templates/footer');
	}

	public function hapus_keranjang($rowid)
	{
		// $this->cart->destroy();
		// redirect('home/troli');
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->Mhome->hapus_keranjang_cart($rowid);
		$this->load->view('templates/headerUser', $data);
		$this->load->view('troli/index',$data);
		$this->load->view('templates/footer');
		
	}

	public function pembayaran()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('templates/headerUser', $data);
		$this->load->view('checkout/index');
		$this->load->view('templates/footer');
	}

	public function proses_pesanan()
	{
		$nama = $this->input->post('nama_customer');
		$alamat = $this->input->post('alamat');
		$noHp = $this->input->post('no_telp');

		$data = [
			'nama_customer' => $nama,
			'no_hp' => $noHp,
			'alamat' => $alamat
		];
		$customer = $this->Mpesanan->insertCustomer($data);

		$data1 = [
			'tanggal' => date('Y-m-d'),
			'id_customer' => $customer // id customer didapat ketika sudah di insert diatas di model mereturn insert_id
		];
		$this->Mpesanan->insertPesanan($data1);
		$getLastId = $this->Mpesanan->getLastId();

		if ($cart = $this->cart->contents()) {
			foreach ($cart as $item) {
				$detailPesanan = [
					'id_pesanan' => $getLastId,
					'id_barang' => $item['id'],
					'qty' => $item['qty'],
					'harga' => $item['price']
				];
				$pesanan = $this->Mpesanan->insertDetailPesanan($detailPesanan);
				$cekStok = $this->Mhome->getBarangById($item['id']);
				$kurangStok = $cekStok['stok_barang'] - $item['qty'];
				$tambahStok = $cekStok['terjual'] + $item['qty'];
				$this->Mproduk->update($item['id'], [
					'stok_barang' => $kurangStok
				]);
				$this->Mproduk->update($item['id'], [
					'terjual' => $tambahStok
				]);
			}
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation! your order success</div>');
		}
		$this->cart->destroy();
		redirect('user/pembayaran');
	}
}