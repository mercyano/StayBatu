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
        $data['homestay'] = $this->Home_model->get_recommend_homestay();
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
        $data['homestay'] = $this->Home_model->get_homestay($id); // Mendapatkan tabel homestay dengan 'id' = $id

        if (empty($data['homestay'])) {
            show_404();
        }

        $data['judul'] = $data['homestay']['judul'];
        $data['title'] = $data['judul'];

        $this->load->view('templates/header', $data);
        $this->load->view('booking/index', $data);
        $this->load->view('templates/footer');
    }

    public function bayar($id_homestay = NULL)
    {
        $data['homestay'] = $this->Home_model->get_homestay($id_homestay);
        
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $no_telp = $this->input->post('no_telp');
        $check_in = $this->input->post('check_in');
        $check_out = $this->input->post('check_out');
        $id_pemilik = $data['homestay']['id_pemilik'];
        $id_pemesan = $this->input->post('id_pemesan'); //id transaksi
        
        $data = array(
            'id_pemesan' => $id_pemesan,
            'id_pemilik' => $id_pemilik,    
            'id_homestay' => $id_homestay,
            'nama' => $nama,
            'email' => $email,
            'no_telp' => $no_telp,
            'check_in' => $check_in,
            'check_out' => $check_out
        );

        
        $this->db->insert('pemesan', $data);
        $data['id_pemesan'] = $this->db->insert_id(); // Untuk mendapatkan id terakhir dari auto increment

        
        $data['homestay'] = $this->Home_model->get_homestay($id_homestay);
        $data['harga'] = $data['homestay']['harga'];
        $data['title'] = 'Upload Bukti Transaksi';

        $this->load->view('templates/header', $data);
        $this->load->view('booking/bayar', $data);
        $this->load->view('templates/footer');
        
        
    }

    public function transaksi($id_homestay = NULL)
    {
        $data['homestay'] = $this->Home_model->get_homestay($id_homestay);

        if (empty($data['homestay'])) {
            show_404();
        }

        $data['judul'] = $data['homestay']['judul'];
        $data['title'] = $data['judul'];

        $id_pemilik = $data['homestay']['id_pemilik'];
        $bukti_transaksi = file_get_contents($_FILES['bukti_transaksi']['tmp_name']);
        $type = $_FILES['bukti_transaksi']['type'];
        $id_pemesan = $this->input->post('id_transaksi');
        $masuk = array(
            'id_transaksi' => $id_pemesan,
            'id_pemilik' => $id_pemilik,
            'id_homestay' => $id_homestay,
            'bukti_transaksi' => $bukti_transaksi,
            'mime' => $type
        );

        $this->db->insert('upload_transaksi', $masuk);
        redirect('');
    }
}
