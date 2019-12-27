<?php

class Mhome extends CI_Model{

	public function getAllBarang()
	{
		$this->load->model('Mhome');
		return $this->db->get('barang')->result_array();
	}

	public function tampil_barang()
	{
		$query = $this->db->get("barang");
		return $query->result();
	}

	public function getBarangById($id)
	{
		return $this->db->get_where('barang', ['id' => $id])->row_array();
	}
	
	public function insert($data){
		$this->db->insert("pesanan", $data);
		return TRUE;
	}

	public function hapus_keranjang_cart()
	{
		//$this->cart->destroy();
		$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Congratulation! your order success to delete</div>');
		// redirect('troli/index');
		 $this->cart->update(array('rowid'=>'44','qty'=>0));
		


	}
	public function find($id)
	{
		$result = $this->db->where('id', $id)
						   ->limit(1)
						   ->get('barang');
		if ($result->num_rows() > 0) {
			return $result->row();
		}else {
			return array();
		}
	}
 }
