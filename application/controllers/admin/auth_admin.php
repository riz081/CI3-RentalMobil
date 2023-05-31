<?php

class Auth_admin extends CI_Controller
{

    public function login()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates_admin/header');
            $this->load->view('admin/form_login_admin');
            $this->load->view('templates_admin/footer');
        } else {
            $username = $this->input->post('username');
            $password = md5($this->input->post('password'));

            $cek = $this->rental_model->cek_login_admin($username, $password);


            if ($cek == FALSE) {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Username atau Password salah!</div>');
                redirect('admin/auth_admin/login');
            } else {
                $this->session->set_userdata('username', $cek->username);
                $this->session->set_userdata('role_id', $cek->role_id);
                $this->session->set_userdata('nama_admin', $cek->nama_admin);
                $this->session->set_userdata('id_admin', $cek->id_admin);

                redirect('admin/dashboard');
            }
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('username', 'Username', 'required', [
            'required' => 'Username Harus Diisi!'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required', [
            'required' => 'Password Harus Diisi!'
        ]);
    }

    public function logout()
    {

        $this->session->sess_destroy();
        redirect('customer/dashboard');
    }

    public function ganti_password()
    {
        $this->load->view('templates_admin/header');
        $this->load->view('admin/ganti_password_admin');
        $this->load->view('templates_admin/footer');
    }

    public function ganti_password_aksi()
    {
        $pass_baru = $this->input->post('pass_baru');
        $ulang_pas = $this->input->post('ulang_pas');

        $this->form_validation->set_rules('pass_baru', 'Password Baru', 'required|matches[ulang_pas]', [
            'required' => 'Password Baru Harus Diisi!', ['matches' => 'Password Baru Tidak Sama!']
        ]);
        $this->form_validation->set_rules('ulang_pas', 'Ulangi Password', 'required', [
            'required' => 'Ulangi Password Harus Diisi!'
        ]);

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates_admin/header');
            $this->load->view('ganti_password');
            $this->load->view('templates_admin/footer');
        } else {
            $data = array('password' => md5($pass_baru));
            $id = array('id_admin' => $this->session->userdata('id_admin'));

            $this->rental_model->update_password($id, $data, 'admin');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Password Berhasil Diubah!</div>');
            redirect('admin/auth_admin/login');
        }
    }
}
