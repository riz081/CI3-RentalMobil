<?php

class Register extends CI_Controller
{

    public function index()
    {
        $this->_rules();

        if ($this->form_validation->run() == false) {
            $this->load->view('templates_admin/header');
            $this->load->view('register_form');
            $this->load->view('templates_admin/footer');
        } else {
            $nama           = $this->input->post('nama');
            $username       = $this->input->post('username');
            $alamat         = $this->input->post('alamat');
            $gender         = $this->input->post('gender');
            $no_telp        = $this->input->post('no_telp');
            $no_ktp         = $this->input->post('no_ktp');
            $password       = md5($this->input->post('password'));
            $role_id        = '2';

            $data = array(
                'nama'      => $nama,
                'username'  => $username,
                'alamat'    => $alamat,
                'gender'    => $gender,
                'no_telp'   => $no_telp,
                'no_ktp'    => $no_ktp,
                'password'  => $password,
                'role_id'   => $role_id
            );

            $this->rental_model->insert_data($data, 'customer');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Mobil Berhasil Register, Silahkan Login!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('auth/login');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required', [
            'required' => 'Nama Harus Diisi!'
        ]);
        $this->form_validation->set_rules('username', 'Username', 'required', [
            'required' => 'Username Harus Diisi!'
        ]);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required', [
            'required' => 'Alamat Harus Diisi!'
        ]);
        $this->form_validation->set_rules('gender', 'Gender', 'required', [
            'required' => 'Gender Harus Diisi!'
        ]);
        $this->form_validation->set_rules('no_telp', 'No. Telepon', 'required', [
            'required' => 'No. Telepon Harus Diisi!'
        ]);
        $this->form_validation->set_rules('no_ktp', 'No. KTP', 'required', [
            'required' => 'No. KTP Harus Diisi!'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required', [
            'required' => 'Password Harus Diisi!'
        ]);
    }
}
