<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Host_login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
		$this->load->model('Home_model');
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
	
	public function edit($id = NULL){
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['homestay'] = $this->Home_model->get_homestay($id);

        if(empty($data['homestay'])){
            show_404();
        }

        $data['title'] = 'Edit Homestay';
        $this->load->view('host_login/edit', $data);

   }

   public function deleteHomestay($id) {
        $this->db->delete('homestay', array('id_homestay' => $id));
        redirect('user/kamar_user');
    }

}
