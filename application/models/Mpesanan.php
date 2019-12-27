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

	public function getLastId()
	{
		$this->db->select('id');
		$this->db->from('pesanan');
		$this->db->order_by('id', 'desc');
		$this->db->limit(1);
		return $this->db->get()->row()->id;
	}

	public function insertDetailPesanan($data)
	{
		$this->db->insert('detail_pesanan', $data);
		return $this->db->affected_rows();
	}

	public function tampilDetailPesanan()
	{
		return $this->db->get('detail_pesanan')->result_array();

	}

	public function tampilDetailCustomer()
	{
		return $this->db->get('customer')->result_array();

	}

	public function tampilDetail()
	{
		$this->db->select('pesanan.*, customer.id as customer_id, nama_customer, no_hp, alamat');
		$this->db->from('pesanan');
		$this->db->join('customer', 'pesanan.id_customer = customer.id');
		// $this->db->join ( 'pesanan', '.id = detail_pesanan.id_pesanan' , 'left' );
		// $this->db->join ( 'barang', 'barang.id = detail_pesanan.id_barang' , 'left' );
		// $this->db->join ( 'customer', 'customer.id = pesanan.id_customer' , 'left' );
		// $this->db->where('pesanan.id_customer');
		$query = $this->db->get();
		return $query->result_array();


	}

	public function tampilDetailById($id)
	{
		$this->db->select('detail_pesanan.*, nama');
		$this->db->from('detail_pesanan');
		$this->db->join('barang', 'detail_pesanan.id_barang = barang.id');
		$this->db->where('id_pesanan', $id);
		$query = $this->db->get();
		return $query->result();
	}

	public function totalPriceAndQuantity($id)
	{
		$this->db->select('SUM(harga) as price, SUM(qty) as quantity');
		$this->db->from('detail_pesanan');
		$this->db->where('id_pesanan', $id);
		$query = $this->db->get();
		return $query->row();
	}

	public function tampilDetailByIdBarang($id)
	{

		$this->db->select('*');
		$this->db->from('barang');
		// $this->db->join ( 'pesanan', 'pesanan.id = detail_pesanan.id_pesanan' , 'left' );
		// $this->db->join ( 'barang', 'barang.id = detail_pesanan.id_barang' , 'left' );
		// $this->db->join ( 'customer', 'customer.id = pesanan.id_customer' , 'left' );
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->row_array();


	}
}