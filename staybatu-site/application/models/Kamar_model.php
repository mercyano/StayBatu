<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Kamar_model extends CI_Model
{
	public function kamarUser($data)
	{
		$query = $this->db->select('homestay.id, homestay.judul, homestay.harga, homestay.kapasitas, homestay.kamar_tidur, homestay.kamar_mandi, homestay.wifi, homestay.tv, homestay.ac, homestay.dapur, homestay.parkir')
         ->from('homestay')
         ->join('user', 'homestay.id_pemilik = user.id_pemilik')
         ->where('homestay.id_pemilik', $data)
         ->get()->result_array();
         
         return $query;
	}
}
