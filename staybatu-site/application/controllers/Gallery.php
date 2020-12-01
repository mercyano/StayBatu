<?php

class Gallery extends CI_Controller {

    public function index() {

        $data['title'] = 'Gallery StayBatu';

        $this->load->view('templates/header', $data);
        $this->load->view('gallery/index');
        $this->load->view('templates/footer');

        
    }

}