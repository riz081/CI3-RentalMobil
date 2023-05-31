<?php

class Register_admin extends CI_Controller
{

    public function index()
    {
        $this->_rules();

        if ($this->form_validation->run() == false) {
            $this->load->view('templates_admin/header');
            $this->load->view('register_admin_form');
            $this->load->view('templates_admin/footer');
        } else {
            $nama_admin           = $this->input->post('nama_admin');
            $username       = $this->input->post('username');
            $email          = $this->input->post('email');
            $password       = md5($this->input->post('password'));
            $role_id        = '1';

            $data = array(
                'nama_admin'      => $nama_admin,
                'username'  => $username,
                'email'     => $email,
                'password'  => $password,
                'role_id'   => $role_id
            );

            $this->rental_model->insert_data($data, 'admin');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                Berhasil Register, Silahkan Login!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('admin/auth_admin/login');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('nama_admin', 'Nama', 'required', [
            'required' => 'Nama Harus Diisi!'
        ]);
        $this->form_validation->set_rules('username', 'Username', 'required', [
            'required' => 'Username Harus Diisi!'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email', [
            'required' => 'Email Harus Diisi!',
            'valid_email' => 'Email Tidak Valid!'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required', [
            'required' => 'Password Harus Diisi!'
        ]);
    }
}
