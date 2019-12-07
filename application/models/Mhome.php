<?php

class Mhome extends CI_Model{

	public function tampil_barang()
	{
		$query = $this->db->get("barang");
		return $query->result();
	}

// 	public function tambah_data($data){
// 		$this->db->insert("film",$data);
// 	}

// 	public function delete_data($kode){
// 		$this->db->where("kode",$kode);
// 		$this->db->delete("film");
// 	}

// 	public function getFilmById($kode)
// 	{
// 		return $this->db->get_where('film', ['kode' => $kode])->row_array();
// 	}

// 	public function ubahDataFilm()
// 	{
// 		$data = [
// 			"kode" => $this->input->post('kode',true),
// 			"judul" => $this->input->post('judul',true),
// 			"genre" => $this->input->post('genre',true),		
// 			"tahun_terbit" => $this->input->post('tahun_terbit',true),
				
// 		];

// 		$this->db->where('id',$this->input->post('id'));
// 		$this->db->update('film',$data);
// 	}
 }
