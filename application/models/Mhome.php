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
