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
            $deskripsi = $this->input->post('deskripsi');
            $no_wa = $this->input->post('no_wa');
            $gambar = file_get_contents($_FILES['gambar']['tmp_name']);
            $type = $_FILES['gambar']['type'];

            $data = array(
                'id_homestay' => '',
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

    public function edit()
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
            $deskripsi = $this->input->post('deskripsi');
            $no_wa = $this->input->post('no_wa');
            $gambar = file_get_contents($_FILES['gambar']['tmp_name']);
            $type = $_FILES['gambar']['type'];
            $id['id_homestay'] = $this->uri->segment(3);

            $data = array(
                
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
                'statushs' => 0,
                'id_pemilik' => $data['user']['id_pemilik'],
                'no_wa' => $no_wa,
                'mime' => $type


            );
            $this->db->update('homestay', $data, $id);
            redirect('user/kamar_user');
        }
        
    }

}