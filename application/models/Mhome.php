<?php

class Mhome extends CI_Model{

	public function tampil_barang()
	{
		$query = $this->db->get("barang");
		return $query->result();
	}

	public function getBarangById($id)
	{
		return $this->db->get_where('barang', ['id' => $id])->row_array();
	}
	public function checkout(){
		$this->db->select('*');
		$this->db->from('barang');
		$this->db->where('id', 'id');
		$this->db->set('terjual', 1);
		$this->db->update('barang');
	}
	public function get_data_atasan(){
		$this->db->select('*');
		$this->db->from('barang');
		$this->db->where('kategori','atasan');
		return $this->db->get();
	}
	public function get_data_bawahan(){
		$this->db->select('*');
		$this->db->from('barang');
		$this->db->where('kategori','bawahan');
		return $this->db->get();
	}
 }
