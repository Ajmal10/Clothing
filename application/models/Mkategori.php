<?php 

class Mkategori extends CI_Model {

	public function semuaKategori()
	{
		$query = $this->db->get("barang");
		return $query->result();
	}

	public function get_data_atasan(){
		$this->db->select('*');
		$this->db->from('barang');
		$this->db->where('kategori','atasan');
		return $this->db->get();
	}
	public function get_data_bawahan(){
		// $this->db->select('*');
		// $this->db->from('barang');
		// $this->db->where('kategori','bawahan');
		// return $this->db->get_where("barang", array('kategori' => 'Bawahan'));
		// $query = $this->db->get("barang") ;
		
		// return $query->result();
		$this->db->select('*');
		$this->db->from('barang');
		$this->db->where('kategori','bawahan');
		return $this->db->get();
	}

}