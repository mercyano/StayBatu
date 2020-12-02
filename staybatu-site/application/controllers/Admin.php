<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates_login/header', $data);
        $this->load->view('templates_login/sidebar', $data);
        $this->load->view('templates_login/topbar', $data);
        $this->load->view('admin_login/index', $data);
        $this->load->view('templates_login/footer');
    }


    public function role()
    {
        $data['title'] = 'Role';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['role'] = $this->db->get('user_role')->result_array();

        $this->load->view('templates_login/header', $data);
        $this->load->view('templates_login/sidebar', $data);
        $this->load->view('templates_login/topbar', $data);
        $this->load->view('admin_login/role', $data);
        $this->load->view('templates_login/footer');
    }


    public function roleAccess($role_id)
    {
        $data['title'] = 'Role Access';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['role'] = $this->db->get_where('user_role', ['id' => $role_id])->row_array();

        $this->db->where('id !=', 1);
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->load->view('templates_login/header', $data);
        $this->load->view('templates_login/sidebar', $data);
        $this->load->view('templates_login/topbar', $data);
        $this->load->view('admin_login/role-access', $data);
        $this->load->view('templates_login/footer');
    }


    public function changeAccess()
    {
        $menu_id = $this->input->post('menuId');
        $role_id = $this->input->post('roleId');

        $data = [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ];

        $result = $this->db->get_where('user_access_menu', $data);

        if ($result->num_rows() < 1) {
            $this->db->insert('user_access_menu', $data);
        } else {
            $this->db->delete('user_access_menu', $data);
        }

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Access Changed!</div>');
    }

    public function kritik()
    {
        $data['title'] = 'Kritik & Saran';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates_login/header', $data);
        $this->load->view('templates_login/sidebar', $data);
        $this->load->view('templates_login/topbar', $data);
        $this->load->view('admin_login/kritik', $data);
        $this->load->view('templates_login/footer');
    }

    public function homestay() {
        $data['title'] = 'Homestay';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        
        $data['tabel'] = $this->db->get('homestay')->result_array();
        

        $this->load->view('templates_login/header', $data);
        $this->load->view('templates_login/sidebar', $data);
        $this->load->view('templates_login/topbar', $data);
        $this->load->view('admin_login/homestay', $data);
        $this->load->view('templates_login/footer');
    }

    public function reservasi() {
        $data['title'] = 'Reservasi';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['tabel'] = $this->db->get('pemesan')->result_array();

        $this->load->view('templates_login/header', $data);
        $this->load->view('templates_login/sidebar', $data);
        $this->load->view('templates_login/topbar', $data);
        $this->load->view('admin_login/reservasi', $data);
        $this->load->view('templates_login/footer');
    }

    public function reservasi_pembayaran() {
        $data['title'] = 'Reservasi Pembayaran';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['tabel'] = $this->db->get('upload_transaksi')->result_array();

        $this->load->view('templates_login/header', $data);
        $this->load->view('templates_login/sidebar', $data);
        $this->load->view('templates_login/topbar', $data);
        $this->load->view('admin_login/reservasi_pembayaran', $data);
        $this->load->view('templates_login/footer');
    }

    public function data_user() {
        $data['title'] = 'Data Akun';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['tabel'] = $this->db->get('user')->result_array();

        $this->load->view('templates_login/header', $data);
        $this->load->view('templates_login/sidebar', $data);
        $this->load->view('templates_login/topbar', $data);
        $this->load->view('menu_login/data_user', $data);
        $this->load->view('templates_login/footer');
    }

    public function deleteHomestay($id) {
        $this->db->delete('homestay', array('id' => $id));
        redirect('admin/homestay');
    }

    public function deleteUser($id) {
        $this->db->delete('user', array('id_pemilik' => $id));
        redirect('admin/data_user');
    }

    public function deleteBooking($id) {
        $this->db->delete('pemesan', array('id_pemesan' => $id));
        redirect('admin/reservasi');
    }

    public function deleteTransaksi($id) {
        $this->db->delete('upload_transaksi', array('id_transaksi' => $id));
        redirect('admin/reservasi_pembayaran');
    }

}
