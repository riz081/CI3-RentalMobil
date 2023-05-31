<?php

class Rental_driver extends CI_Controller
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

    public function tambah_rental($id)
    {
        $data['detail'] = $this->rental_model->ambil_id_driver($id);
        $this->load->view('templates_customer/header');
        $this->load->view('customer/tambah_rental_driver', $data);
        $this->load->view('templates_customer/footer');
    }

    public function tambah_rental_aksi()
    {
        $id_customer = $this->session->userdata('id_customer');
        $id_driver = $this->input->post('id_driver');
        $tanggal_rental = $this->input->post('tanggal_rental');
        $tanggal_kembali = $this->input->post('tanggal_kembali');
        $harga_driver = $this->input->post('harga_driver');
        $denda_driver = $this->input->post('denda_driver');


        $data = array(
            'id_customer'       => $id_customer,
            'id_driver'          => $id_driver,
            'tanggal_rental'    => $tanggal_rental,
            'tanggal_kembali'   => $tanggal_kembali,
            'harga_driver'             => $harga_driver,
            'denda_driver'             => $denda_driver,
            'tanggal_pengembalian' => '-',
            'status_rental' => 'Belum Selesai',
            'status_pengembalian' => 'Belum Dikembalikan',
            'total_denda' => '0'

        );

        $this->rental_model->insert_data($data, 'transaksi_driver');

        $status = array(
            'status_driver' => '0'
        );

        $id = array(
            'id_driver' => $id_driver
        );

        $this->rental_model->update_data('driver', $status, $id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Transaksi Penyewaan Mobil Berhasil, Silahkan Checkout!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
        redirect('customer/data_driver');
    }
}
