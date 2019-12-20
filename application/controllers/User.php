<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller{

	public function __construct()
    {
		parent::__construct();
		$this->load->model('Mhome','Mproduk');
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
					'name' 		=> $barang->nama,
					'image'		=> $barang->image

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
		$this->load->view('templates/headerUser',$data);
		$this->load->view('troli/index');
		$this->load->view('templates/footer');
	}

	public function hapus_keranjang()
	{
		$this->cart->destroy();
		redirect('home/index2');
	}

	public function pembayaran()
	{
		$data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('templates/headerUser',$data);
		$this->load->view('checkout/index');
		$this->load->view('templates/footer');
	}
	public function insert($id){
		// if($carts = $this->cart->contents()){

		// }
		$barang = $this->Mhome->find($id);
		$data = array(

					'id'		=> $barang->id,
       				'qty' 		=> 1,
					'price' 	=> $barang->harga,
					'name' 		=> $barang->nama,
					'image'		=> $barang->image

		);

		$nama = $this->input->post('nama');
		$alamat =  $this->input->post('alamat');
		$no_telp =  $this->input->post('no_telp');
		$quantity =  1;
		$id = $this->cart->insert($data);
;

		$data = [
					'nama' => $nama,
					'alamat' => $alamat,
					'no_telp' => $no_telp,
					'quantity' => 1,
					'id'=>$id,
		];
				//var_dump($data);
				$res = $this->Mhome->insert($data);
				redirect('home/index2');
		}
	public function proses_pesanan($id)
	{
		
		 $barang = $this->Mhome->find($id);
		//
		$data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
		$data['barang'] = $this->Mhome->getBarangById($id);
		$this->load->view('templates/headerUser', $data);
		$this->load->view('user/proses_pesanan', $data);
		$this->load->view('templates/footer');
		// $stok = $this->barang->stok_barang - $this->cart->total_items();
		// $terjual = $terjual + $this->cart->total_items();

		if ($cart = $this->cart->contents())
            {
                foreach ($cart as $item)
                    {
                        $data_detail = array('id' =>$item['id'],
                                        'name' => $item['name'],
                                        'qty' => $item['qty'],
                                        'harga' => $item['price']);
                        $proses = $this->tambah_detail_order($data_detail);
                    }
            }
				$this->cart->destroy();

		
		
		 
		
	}

}

