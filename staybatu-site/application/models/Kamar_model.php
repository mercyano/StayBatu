<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Kamar_model extends CI_Model
{
	public function kamarUser($data)
	{
		$query = $this->db->select('homestay.*')
         ->from('homestay')
         ->join('user', 'homestay.id_pemilik = user.id_pemilik')
         ->where('homestay.id_pemilik', $data)
         ->get()->result_array();
         
         return $query;
	}

	public function bookingUser($data)
	{
		$query = $this->db->select('pemesan.*')
         ->from('pemesan')
         ->join('homestay', 'pemesan.id_homestay = homestay.id_homestay')
         ->join('user', 'homestay.id_pemilik = user.id_pemilik')
         ->where('homestay.id_pemilik', $data)
         ->get()->result_array();
         
         return $query;
	}

	public function transaksiUser($data)
	{
		$query = $this->db->select('upload_transaksi.*')
         ->from('upload_transaksi')        
         ->join('pemesan', 'pemesan.id_homestay = upload_transaksi.id_homestay')
         ->join('homestay', 'pemesan.id_homestay = homestay.id_homestay')
         ->join('user', 'homestay.id_pemilik = user.id_pemilik')
         ->where('homestay.id_pemilik', $data)
         ->get()->result_array();
         
         return $query;
	}
}
