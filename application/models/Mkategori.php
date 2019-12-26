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
		$this->db->where('kategori','1');
		return $this->db->get();
	}
	public function get_data_bawahan(){
		$this->db->select('*');
		$this->db->from('barang');
		$this->db->where('kategori','2');
		return $this->db->get();
	}

	public function getProdukBySearch($keyword){
		$this->db->like('nama',$keyword);
		$query = $this->db->get('barang');
		return $query->result();
	}
}