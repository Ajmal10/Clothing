<?php 

class Mproduk extends CI_Model{

	public function getAllBarang()
	{
		$this->load->model('Mproduk');
		return $this->db->get('barang')->result_array();
	}

	public function insert($data){
		$this->db->insert("barang", $data);
		return TRUE;
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

	public function hapusDataBarang($id)
	{
		// $this->db->where('id', $id);
		$this->db->delete('barang', ['id' => $id]);
	}


	public function update($id,$data){
		$this->db->where('id', $id);
		$this->db->update('barang', $data);
	}
	
	public function get_data_terjual(){
		$this->db->select('*');
		$this->db->from('barang');
		$this->db->where('terjual >',0);
		return $this->db->get();
	}

	public function detail_barang($id)
	{
		$result = $this->db->where('id', $id)->get('barang');
		if ($result->num_rows() > 0) {
			return $result->result();
		}else{
			return false;
		}
	}

}