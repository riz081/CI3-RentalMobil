<?php

class Data_type extends CI_Controller
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
        $data['tipe'] = $this->rental_model->get_data('tipe')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_type', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambah_type()
    {
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/form_tambah_type');
        $this->load->view('templates_admin/footer');
    }

    public function tambah_type_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->tambah_type();
        } else {
            $kode_type = $this->input->post('kode_type');
            $nama_type = $this->input->post('nama_type');

            $data = array(
                'kode_type' => $kode_type,
                'nama_type' => $nama_type
            );

            $this->rental_model->insert_data($data, 'tipe');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Type Mobil Berhasil Ditambahkan!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('admin/data_type');
        }
    }

    public function update_type($id)
    {
        $where = array('id_type' => $id);
        $data['tipe'] = $this->db->query("SELECT * FROM tipe WHERE id_type='$id'")->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/form_update_type', $data);
        $this->load->view('templates_admin/footer');
    }

    public function update_type_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update_type();
        } else {
            $id = $this->input->post('id_type');
            $kode_type = $this->input->post('kode_type');
            $nama_type = $this->input->post('nama_type');

            $data = array(
                'kode_type' => $kode_type,
                'nama_type' => $nama_type
            );

            $where = array(
                'id_type' => $id
            );

            $this->rental_model->update_data('tipe', $data, $where);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                Data Type Mobil Berhasil Diupdate!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>');
            redirect('admin/data_type');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('kode_type', 'Kode Type', 'required', [
            'required' => 'Kode Type Wajib Diisi!'
        ]);
        $this->form_validation->set_rules('nama_type', 'Nama Type', 'required', [
            'required' => 'Nama Type Wajib Diisi!'
        ]);
    }

    public function delete_type($id)
    {
        $where = array('id_type' => $id);
        $this->rental_model->delete_data($where, 'tipe');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Data Type Mobil Berhasil Dihapus!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
        redirect('admin/data_type');
    }
}
