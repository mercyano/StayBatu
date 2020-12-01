<?php

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Home_model');
    }

    public function index($nama = '')
    {

        $data['title'] = 'StayBatu - Temukan Homestay dengan Harga Terbaik!';
        $data['homestay'] = $this->Home_model->get_homestay();
        $data['nama'] = $nama;

        $this->load->view('templates/header', $data);
        $this->load->view('home/index', $data);
        $this->load->view('templates/footer');
    }

    public function view($id = NULL)
    {
        $data['homestay'] = $this->Home_model->get_homestay($id);

        if (empty($data['homestay'])) {
            show_404();
        }

        $data['judul'] = $data['homestay']['judul'];
        $data['title'] = $data['judul'];

        $this->load->view('templates/header', $data);
        $this->load->view('home/view', $data);
        $this->load->view('templates/footer');
    }

    public function booking($id = NULL)
    {
        $data['homestay'] = $this->Home_model->get_homestay($id);

        if (empty($data['homestay'])) {
            show_404();
        }

        $data['judul'] = $data['homestay']['judul'];
        $data['title'] = $data['judul'];

        $this->load->view('templates/header', $data);
        $this->load->view('booking/index', $data);
        $this->load->view('templates/footer');
    }

    public function transaksi($id = NULL)
    {
        $data['homestay'] = $this->Home_model->get_homestay($id);

        if (empty($data['homestay'])) {
            show_404();
        }

        $data['judul'] = $data['homestay']['judul'];
        $data['title'] = $data['judul'];

        $this->load->view('templates/header', $data);
        $this->load->view('transaksi/index', $data);
        $this->load->view('templates/footer');
    }
}
