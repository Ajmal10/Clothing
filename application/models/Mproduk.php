<?php 

class Mproduk extends CI_Model{

	public function getAllBarang()
	{
		$this->load->model('Mproduk');
		return $this->db->get('barang')->result_array();
	}

	public function tambah_data($data){
		$this->db->insert("barang",$data);
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

	public function ubahDataBarang()
	{
		$data = [
			"image" =>  $this->input->post('image', true),
			"nama" =>  $this->input->post('nama', true),
			"harga" =>  $this->input->post('harga', true),
			"deskripsi" =>  $this->input->post('deskripsi', true),
			"stok_barang" =>  $this->input->post('stok_barang', true),
			"terjual" =>  $this->input->post('terjual', true)			
		];
		// if($_FILES['image']['error'] === 4){
		// $image = $imageLama;
		// }else{
		// 	$image = $this->input->post('image',true);
		// }
		
		$this->db->where('id', $this->input->post('id'));
		$this->db->update('barang', $data);
	}

	public function get_data_terjual(){
		$this->db->select('*');
		$this->db->from('barang');
		$this->db->where('terjual >',0);
		return $this->db->get();
	}
}