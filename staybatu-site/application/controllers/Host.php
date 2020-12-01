<?php

class Host extends CI_Controller {

    public function index() {
    	if ($this->session->userdata('email'))
    	{
    		redirect('host_login');
    	} else {
    		$data['judul'] = 'Sewakan Rumahmu menjadi Homestay!';

	        $this->load->view('templates/header_host', $data);
	        $this->load->view('host/index');
	        $this->load->view('templates/footer_host');
    	}
	        
    }

    public function tambah()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('judul', 'Judul', 'required|trim');

        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required|trim');

        if($this->form_validation->run() == false){

            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email is not registered!</div>');
            redirect('host_login/sewakan');
        }
        else{

            $judul = $this->input->post('judul');
            $harga = $this->input->post('harga');
            $kapasitas = $this->input->post('kapasitas');
            $kamar_tidur = $this->input->post('jml_kamar');
            $kamar_mandi = $this->input->post('jml_kamarmandi');

            $wifi = $this->input->post('wifi');
            $tv = $this->input->post('tv');
            $ac = $this->input->post('ac');
            $dapur = $this->input->post('dapur');
            $parkir = $this->input->post('parkir');

            // if($this->input->post('wifi'))
            // {
            //     $wifi = $this->input->post('wifi');
            // } else {
            //     $wifi = 0;
            // }
            // if($this->input->post('tv'))
            // {
            //     $tv = $this->input->post('tv');
            // } else {
            //     $tv = 0;
            // }
            // if($this->input->post('ac'))
            // {
            //     $ac = $this->input->post('ac');
            // } else {
            //     $ac = 0;
            // }
            // if($this->input->post('dapur'))
            // {
            //     $dapur = $this->input->post('dapur');
            // } else {
            //     $dapur = 0;
            // }
            // if($this->input->post('dapur'))
            // {
            //     $parkir = $this->input->post('parkir');
            // } else {
            //     $parkir = 0;
            // }
            $deskripsi = $this->input->post('deskripsi');
            $no_wa = $this->input->post('no_wa');
            $gambar = file_get_contents($_FILES['gambar']['tmp_name']);
            $type = $_FILES['gambar']['type'];

            /*if ($gambar = '') {
            } else {
                $config['upload_path'] = './assets/images';
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('gambar')) {
                    echo "Upload Gagal";
                    die();
                } else {
                    $gambar = $this->upload->data('file_name');
                }
            }*/

            $data = array(
                'id' => '',
                'judul' => $judul,
                'harga' => $harga,
                'kapasitas' => $kapasitas,
                'kamar_tidur' => $kamar_tidur,
                'kamar_mandi' => $kamar_mandi,
                'wifi' => $wifi,
                'tv' => $tv,
                'ac' => $ac,
                'dapur' => $dapur,
                'parkir' => $parkir,
                'deskripsi' => $deskripsi,
                'gambar'  => $gambar,
                'status' => 0,
                'id_pemilik' => $data['user']['id_pemilik'],
                'no_wa' => $no_wa,
                'mime' => $type


            );
            $this->db->insert('homestay', $data);
            redirect('host');
        }
        
    }

}