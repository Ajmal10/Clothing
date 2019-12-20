<?php


class Mpesanan extends CI_Model
{
	public function insertCustomer($data)
	{
		$this->db->insert('customer', $data);
		return $this->db->insert_id();
	}

	public function insertPesanan($data)
	{
		$this->db->insert('pesanan', $data);
		return $this->db->insert_id();
	}

	public function insertDetailPesanan($data)
	{
		$this->db->insert('detail_pesanan', $data);
		return $this->db->affected_rows();
	}
}
