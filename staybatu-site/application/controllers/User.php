<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'My Profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates_login/header', $data);
        $this->load->view('templates_login/user_sidebar', $data);
        $this->load->view('templates_login/user_topbar', $data);
        $this->load->view('user_login/index', $data);
        $this->load->view('templates_login/footer');
    }

    public function user_admin()
    {
        $data['title'] = 'My Profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates_login/header', $data);
        $this->load->view('templates_login/sidebar', $data);
        $this->load->view('templates_login/topbar', $data);
        $this->load->view('user_login/index', $data);
        $this->load->view('templates_login/footer');
    }


    public function edit()
    {
        $data['title'] = 'Edit Profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('name', 'Full Name', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates_login/header', $data);
            $this->load->view('templates_login/sidebar', $data);
            $this->load->view('templates_login/topbar', $data);
            $this->load->view('admin_login/edit', $data);
            $this->load->view('templates_login/footer');
        } else {
            $name = $this->input->post('name');
            $email = $this->input->post('email');

            // cek jika ada gambar yang akan diupload
            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']      = '2048';
                $config['upload_path'] = './assets/login/img/profile/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $data['user']['image'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/login/img/profile/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $this->db->set('name', $name);
            $this->db->where('email', $email);
            $this->db->update('user');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your profile has been updated!</div>');
            redirect('user/user_admin');
        }
    }

    public function user_edit()
    {
        $data['title'] = 'Edit Profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('name', 'Full Name', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates_login/header', $data);
            $this->load->view('templates_login/user_sidebar', $data);
            $this->load->view('templates_login/user_topbar', $data);
            $this->load->view('user_login/edit', $data);
            $this->load->view('templates_login/footer');
        } else {
            $name = $this->input->post('name');
            $email = $this->input->post('email');

            // cek jika ada gambar yang akan diupload
            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']      = '2048';
                $config['upload_path'] = './assets/login/img/profile/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $data['user']['image'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/login/img/profile/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $this->db->set('name', $name);
            $this->db->where('email', $email);
            $this->db->update('user');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your profile has been updated!</div>');
            redirect('user');
        }
    }

    public function changePassword()
    {
        $data['title'] = 'Change Password';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('current_password', 'Current Password', 'required|trim');
        $this->form_validation->set_rules('new_password1', 'New Password', 'required|trim|min_length[3]|matches[new_password2]');
        $this->form_validation->set_rules('new_password2', 'Confirm New Password', 'required|trim|min_length[3]|matches[new_password1]');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates_login/header', $data);
            $this->load->view('templates_login/sidebar', $data);
            $this->load->view('templates_login/topbar', $data);
            $this->load->view('admin_login/changepassword', $data);
            $this->load->view('templates_login/footer');
        } else {
            $current_password = $this->input->post('current_password');
            $new_password = $this->input->post('new_password1');
            if (!password_verify($current_password, $data['user']['password'])) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong current password!</div>');
                redirect('user/changepassword');
            } else {
                if ($current_password == $new_password) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">New password cannot be the same as current password!</div>');
                    redirect('user/changepassword');
                } else {
                    // password sudah ok
                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

                    $this->db->set('password', $password_hash);
                    $this->db->where('email', $this->session->userdata('email'));
                    $this->db->update('user');

                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password changed!</div>');
                    redirect('user/changepassword');
                }
            }
        }
    }

    public function kamar_user() {
        $data['title'] = 'Daftar Homestay';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Kamar_model', 'kamar');
        $data['tabel'] = $this->kamar->kamarUser($data['user']['id_pemilik']);

        $this->load->view('templates_login/header', $data);
        $this->load->view('templates_login/user_sidebar', $data);
        $this->load->view('templates_login/user_topbar', $data);
        $this->load->view('user_login/kamar_user', $data);
        $this->load->view('templates_login/footer');
    }

    public function user_changePassword()
    {
        $data['title'] = 'Change Password';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('current_password', 'Current Password', 'required|trim');
        $this->form_validation->set_rules('new_password1', 'New Password', 'required|trim|min_length[3]|matches[new_password2]');
        $this->form_validation->set_rules('new_password2', 'Confirm New Password', 'required|trim|min_length[3]|matches[new_password1]');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates_login/header', $data);
            $this->load->view('templates_login/user_sidebar', $data);
            $this->load->view('templates_login/user_topbar', $data);
            $this->load->view('user_login/changepassword', $data);
            $this->load->view('templates_login/footer');
        } else {
            $current_password = $this->input->post('current_password');
            $new_password = $this->input->post('new_password1');
            if (!password_verify($current_password, $data['user']['password'])) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong current password!</div>');
                redirect('user/user_changepassword');
            } else {
                if ($current_password == $new_password) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">New password cannot be the same as current password!</div>');
                    redirect('user/user_changepassword');
                } else {
                    // password sudah ok
                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

                    $this->db->set('password', $password_hash);
                    $this->db->where('email', $this->session->userdata('email'));
                    $this->db->update('user');

                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password changed!</div>');
                    redirect('user/user_changepassword');
                }
            }
        }
    }

    public function booking() {
        $data['title'] = 'Daftar Homestay';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Kamar_model', 'kamar');
        $data['tabel'] = $this->kamar->bookingUser($data['user']['id_pemilik']);

        $this->load->view('templates_login/header', $data);
        $this->load->view('templates_login/user_sidebar', $data);
        $this->load->view('templates_login/user_topbar', $data);
        $this->load->view('user_login/tabel_booking', $data);
        $this->load->view('templates_login/footer');
    }

    public function transaksi() {
        $data['title'] = 'Daftar Homestay';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Kamar_model', 'kamar');
        $data['tabel'] = $this->kamar->transaksiUser($data['user']['id_pemilik']);

        $this->load->view('templates_login/header', $data);
        $this->load->view('templates_login/user_sidebar', $data);
        $this->load->view('templates_login/user_topbar', $data);
        $this->load->view('user_login/tabel_transaksi', $data);
        $this->load->view('templates_login/footer');
    }

    public function pemesan(){
        $data['title'] = 'Daftar Pemesan Homestay';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Kamar_model', 'kamar');
        $data['tabel'] = $this->kamar->get_pemesan($data['user']['id_pemilik']);
        
        $this->load->view('templates_login/header', $data);
        $this->load->view('templates_login/user_sidebar', $data);
        $this->load->view('templates_login/user_topbar', $data);
        $this->load->view('user_login/pemesan', $data);
        $this->load->view('templates_login/footer');
    }

    public function deleteTransaksi($id_pemesan) {
        $this->db->delete('upload_transaksi', array('id_transaksi' => $id_pemesan));
        $this->db->delete('pemesan', array('id_pemesan' => $id_pemesan));
        redirect('user/pemesan');
    }

    public function terima($id_pemesan){
        $this->load->config('email');
        $this->load->library('email');
        $this->load->model('Kamar_model', 'kamar');
        $data['pemesan'] = $this->kamar->get_pemesan_by_id_pemesan($id_pemesan);
        

        $email = $data['pemesan']['email'];
        $homestay = $data['pemesan']['judul'];
        $nama = $data['pemesan']['nama'];
        $check_in = $data['pemesan']['check_in'];
        $check_out = $data['pemesan']['check_out'];
        $pemilik = $data['pemesan']['name'];
        $from = $this->config->item('smtp_user');
        
        $this->email->set_newline("\r\n");
        $this->email->from($from, 'StayBatu');
        $this->email->to($email);
        $this->email->subject('Booking ' .$homestay. ' Telah Berhasil!');
        $this->email->message('<strong>Hai ' .$nama. ',</strong><br>Terima Kasih telah memesan Homestay di <strong>StayBatu</strong>! Berikut ini merupakan informasi mengenai penginapan Anda: <br><br>Pemilik Homestay: <strong>Mr/Mrs. '.$pemilik.'</strong><br><br>Check-In: <strong>' .$check_in. '</strong><br><br>Check-Out: <strong>' .$check_out. '</strong><br><br>Kedatanganmu kutunggu~');

        if ($this->email->send()) {
            if($this->session->userdata("id_pemilik")!=="" ) {
                $id['id_pemesan']         = $this->uri->segment(3);
                $id1['id_homestay'] = $this->uri->segment(4);
                $up['status']     = $this->uri->segment(5);
                $up1['statushs'] = $this->uri->segment(6);
    
                $this->db->update("pemesan",$up,$id);
                $this->db->update("homestay",$up1,$id1);
                 
                redirect("user/pemesan");
    
                }
                else{
                    redirect('user/pemesan');
            }  
        } else {
            show_error($this->email->print_debugger());
        }
    }

    public function check_out($id_pemesan){
        $this->load->config('email');
        $this->load->library('email');
        $this->load->model('Kamar_model', 'kamar');
        $data['pemesan'] = $this->kamar->get_pemesan_by_id_pemesan($id_pemesan);
        

        $email = $data['pemesan']['email'];
        $nama = $data['pemesan']['nama'];
        $pemilik = $data['pemesan']['name'];
        $from = $this->config->item('smtp_user');
        
        $this->email->set_newline("\r\n");
        $this->email->from($from, 'StayBatu');
        $this->email->to($email);
        $this->email->subject('Terima kasih telah berkunjung ke rumah Kami!');
        $this->email->message('Dari <strong>Mr/Mrs. '.$pemilik.'</strong><br><br><strong>Hai ' .$nama. ',</strong><br>Terima Kasih telah berkunjung dan menginap di rumah Kami!<br><em>Kalau ada sumur di ladang, boleh kita menumpang mandi..<br>kalau ada umur yang panjang, boleh kita berjumpa lagi~<em>');

        if ($this->email->send()) {
            if($this->session->userdata("id_pemilik")!=="" ) {

                $id['id_pemesan']         = $this->uri->segment(3);
                $id1['id_homestay'] = $this->uri->segment(4);
                $up['status']     = $this->uri->segment(5);
                $up1['statushs'] = $this->uri->segment(6);
    
                $this->db->update("pemesan",$up,$id);
                $this->db->update("homestay",$up1,$id1);
                 
                redirect("user/pemesan");
    
                }
                else{
                    redirect('user/pemesan');
    
                } // LETAKKAN CODE JIKA BERHASIL KONFIRMASI PESANAN HOMESTAY DISINI
        } else {
            show_error($this->email->print_debugger());
        }
    }
}