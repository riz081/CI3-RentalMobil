<?php

class Data_mobil extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        if (!isset($this->session->userdata['username'])) {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Anda Belum Login
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('auth/login');
        }
    }

    public function index()
    {
        $data['mobil'] = $this->rental_model->get_data('mobil')->result();
        $this->load->view('templates_customer/header');
        $this->load->view('customer/data_mobil', $data);
        $this->load->view('templates_customer/footer');
    }

    public function detail_mobil($id)
    {
        $data['detail'] = $this->rental_model->ambil_id_mobil($id);
        $this->load->view('templates_customer/header');
        $this->load->view('customer/detail_mobil', $data);
        $this->load->view('templates_customer/footer');
    }
}
