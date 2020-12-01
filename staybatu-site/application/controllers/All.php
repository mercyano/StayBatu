<?php

class All extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Home_model');

    }

    public function index(){

        $data['title'] = 'Daftar Homestay';
        $data['homestay'] = $this->Home_model->get_homestay();

        $this->load->view('templates/header', $data);
        $this->load->view('all/index', $data);
        $this->load->view('templates/footer');

    }

}