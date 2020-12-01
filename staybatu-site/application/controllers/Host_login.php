<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Host_login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('host_login/index', $data);
    }

    public function sewakan()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('host_login/host_sewa',$data);
    }
}