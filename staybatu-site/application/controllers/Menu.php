<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Menu Management';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules('menu', 'Menu', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates_login/header', $data);
            $this->load->view('templates_login/sidebar', $data);
            $this->load->view('templates_login/topbar', $data);
            $this->load->view('menu_login/index', $data);
            $this->load->view('templates_login/footer');
        } else {
            $this->db->insert('user_menu', ['menu' => $this->input->post('menu')]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New menu added!</div>');
            redirect('menu');
        }
    }


    public function submenu()
    {
        $data['title'] = 'Submenu Management';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Menu_model', 'menu');

        $data['subMenu'] = $this->menu->getSubMenu();
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('menu_id', 'Menu', 'required');
        $this->form_validation->set_rules('url', 'URL', 'required');
        $this->form_validation->set_rules('icon', 'icon', 'required');

        if ($this->form_validation->run() ==  false) {
            $this->load->view('templates_login/header', $data);
            $this->load->view('templates_login/sidebar', $data);
            $this->load->view('templates_login/topbar', $data);
            $this->load->view('menu_login/submenu', $data);
            $this->load->view('templates_login/footer');
        } else {
            $data = [
                'title' => $this->input->post('title'),
                'menu_id' => $this->input->post('menu_id'),
                'url' => $this->input->post('url'),
                'icon' => $this->input->post('icon'),
                'is_active' => $this->input->post('is_active')
            ];
            $this->db->insert('user_sub_menu', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New sub menu added!</div>');
            redirect('menu/submenu');
        }
    

    public function kamar() {
        $data['title'] = 'Kamar';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates_login/header', $data);
        $this->load->view('templates_login/sidebar', $data);
        $this->load->view('templates_login/topbar', $data);
        $this->load->view('menu_login/kamar', $data);
        $this->load->view('templates_login/footer');
    }

    public function reservasi() {
        $data['title'] = 'Reservasi';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates_login/header', $data);
        $this->load->view('templates_login/sidebar', $data);
        $this->load->view('templates_login/topbar', $data);
        $this->load->view('menu_login/reservasi', $data);
        $this->load->view('templates_login/footer');
    }

    public function reservasi_pembayaran() {
        $data['title'] = 'Reservasi Pembayaran';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates_login/header', $data);
        $this->load->view('templates_login/sidebar', $data);
        $this->load->view('templates_login/topbar', $data);
        $this->load->view('menu_login/reservasi_pembayaran', $data);
        $this->load->view('templates_login/footer');
    }

    public function data_user() {
        $data['title'] = 'Data Akun';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates_login/header', $data);
        $this->load->view('templates_login/sidebar', $data);
        $this->load->view('templates_login/topbar', $data);
        $this->load->view('menu_login/data_user', $data);
        $this->load->view('templates_login/footer');
    }

}
