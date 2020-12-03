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

     public function get_pemesan($data){ // Menangkap id_pemilik USER
          $query = $this->db->select('pemesan.id_pemesan, pemesan.id_pemilik, homestay.judul, homestay.harga, pemesan.id_homestay, pemesan.nama, pemesan.check_in, pemesan.check_out, pemesan.no_telp, upload_transaksi.bukti_transaksi')
           ->from('pemesan')
           ->join('homestay', 'homestay.id_homestay = pemesan.id_homestay')
           ->join('user', 'pemesan.id_pemilik = user.id_pemilik')
           ->join('upload_transaksi', 'pemesan.id_pemesan = upload_transaksi.id_transaksi')
           ->where('pemesan.id_pemilik', $data)
           ->get()->result_array();
           return $query;
      }

      public function get_pemesan_by_id_pemesan($id_pemesan){
          $query = $this->db->select('pemesan.id_pemesan, pemesan.id_pemilik, pemesan.email, user.name, homestay.judul, homestay.harga, pemesan.id_homestay, pemesan.nama, pemesan.check_in, pemesan.check_out')
           ->from('pemesan')
           ->join('homestay', 'homestay.id_homestay = pemesan.id_homestay')
           ->join('user', 'pemesan.id_pemilik = user.id_pemilik')
           ->join('upload_transaksi', 'pemesan.id_pemesan = upload_transaksi.id_transaksi')
           ->where('pemesan.id_pemesan', $id_pemesan)
           ->get()->row_array();
           return $query;
     }
}
