<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Booking extends CI_Controller
{

    public function load_wa()
    {
    }

    public function addTransaksi1($id = NULL)
    {

        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $no_telp = $this->input->post('no_telp');
        $check_in = $this->input->post('check_in');
        $check_out = $this->input->post('check_out');

        $data = array(
            'id_pemesan' => '',
            'nama' => $nama,
            'email' => $email,
            'no_telp' => $no_telp,
            'check_in' => $check_in,
            'check_out' => $check_out
        );
        $this->db->insert('pemesan', $data);
        redirect('booking/hubung');
    }
    public function addTransaksi2()
    {

        $bukti_transaksi = file_get_contents($_FILES['bukti_transaksi']['tmp_name']);
        $type = $_FILES['bukti_transaksi']['type'];

        $data = array(
            'id_transaksi' => '',
            'bukti_transaksi' => $bukti_transaksi,
            'mime' => $type
        );
        $this->db->insert('upload_transaksi', $data);
        redirect('host');
    }
}
