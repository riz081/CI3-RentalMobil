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
        $data['tipe'] = $this->rental_model->get_data('tipe')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_mobil', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambah_mobil()
    {
        $data['tipe'] = $this->rental_model->get_data('tipe')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/form_tambah_mobil', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambah_mobil_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->tambah_mobil();
        } else {
            $kode_type      = $this->input->post('kode_type');
            $merk           = $this->input->post('merk');
            $no_plat        = $this->input->post('no_plat');
            $warna          = $this->input->post('warna');
            $tahun          = $this->input->post('tahun');
            $status         = $this->input->post('status');
            $harga          = $this->input->post('harga');
            $denda          = $this->input->post('denda');
            $ac             = $this->input->post('ac');
            $sopir          = $this->input->post('sopir');
            $safety         = $this->input->post('safety');
            $gambar         = $_FILES['gambar']['name'];
            if ($gambar = '') {
            } else {
                $config['upload_path']          = './assets/upload/';
                $config['allowed_types']        = 'jpg|png|jpeg|tiff';

                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('gambar')) {
                    echo "Gambar Gagal Diupload!";
                } else {
                    $gambar = $this->upload->data('file_name');
                }
            }

            $data = array(
                'kode_type'     => $kode_type,
                'merk'          => $merk,
                'no_plat'       => $no_plat,
                'warna'         => $warna,
                'tahun'         => $tahun,
                'status'        => $status,
                'harga'         => $harga,
                'denda'         => $denda,
                'ac'            => $ac,
                'sopir'         => $sopir,
                'safety'        => $safety,
                'gambar'        => $gambar
            );

            $this->rental_model->insert_data($data, 'mobil');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Mobil Berhasil Ditambahkan!.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('admin/data_mobil');
        }
    }

    public function update_mobil($id)
    {
        $where = array('id_mobil' => $id);
        $data['mobil'] = $this->db->query("SELECT * FROM mobil mb, tipe tp WHERE mb.kode_type=tp.kode_type AND mb.id_mobil='$id'")->result();
        $data['tipe'] = $this->rental_model->get_data('tipe')->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/form_update_mobil', $data);
        $this->load->view('templates_admin/footer');
    }

    public function update_mobil_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update_mobil();
        } else {
            $id             = $this->input->post('id_mobil');
            $kode_type      = $this->input->post('kode_type');
            $merk           = $this->input->post('merk');
            $no_plat        = $this->input->post('no_plat');
            $warna          = $this->input->post('warna');
            $tahun          = $this->input->post('tahun');
            $status         = $this->input->post('status');
            $harga          = $this->input->post('harga');
            $denda          = $this->input->post('denda');
            $ac             = $this->input->post('ac');
            $sopir          = $this->input->post('sopir');
            $safety         = $this->input->post('safety');
            $gambar         = $_FILES['gambar']['name'];
            if ($gambar) {
                $config['upload_path']          = './assets/upload/';
                $config['allowed_types']        = 'jpg|png|jpeg|tiff';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('gambar')) {
                    $gambar = $this->upload->data('file_name');
                    $this->db->set('gambar', $gambar);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $data = array(
                'kode_type'     => $kode_type,
                'merk'          => $merk,
                'no_plat'       => $no_plat,
                'warna'         => $warna,
                'tahun'         => $tahun,
                'status'        => $status,
                'harga'         => $harga,
                'denda'         => $denda,
                'ac'            => $ac,
                'sopir'         => $sopir,
                'safety'        => $safety
            );

            $where = array(
                'id_mobil' => $id
            );

            $this->rental_model->update_data('mobil', $data, $where);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                Data Mobil Berhasil Diupdate!.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>');
            redirect('admin/data_mobil');
        }
    }


    public function detail_mobil($id)
    {
        $data['detail'] = $this->rental_model->ambil_id_mobil($id);
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/detail_mobil', $data);
        $this->load->view('templates_admin/footer');
    }

    public function delete_mobil($id)
    {
        $where = array('id_mobil' => $id);

        $this->rental_model->delete_data($where, 'mobil');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Data Mobil Berhasil Dihapus!.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
        redirect('admin/data_mobil');
    }

    public function _rules()
    {
        $this->form_validation->set_rules('kode_type', 'Kode Type', 'required', [
            'required' => 'Kode Type Harus Diisi!'
        ]);
        $this->form_validation->set_rules('merk', 'Merk', 'required', [
            'required' => 'Merk Harus Diisi!'
        ]);
        $this->form_validation->set_rules('no_plat', 'No. Plat', 'required', [
            'required' => 'No. Plat Harus Diisi!'
        ]);
        $this->form_validation->set_rules('warna', 'Warna', 'required', [
            'required' => 'Warna Harus Diisi!'
        ]);
        $this->form_validation->set_rules('tahun', 'Tahun', 'required', [
            'required' => 'Tahun Harus Diisi!'
        ]);
        $this->form_validation->set_rules('status', 'Status', 'required', [
            'required' => 'Status Harus Diisi!'
        ]);
        $this->form_validation->set_rules('harga', 'Harga', 'required', [
            'required' => 'Harga Harus Diisi!'
        ]);
        $this->form_validation->set_rules('denda', 'Denda', 'required', [
            'required' => 'Denda Harus Diisi!'
        ]);
        $this->form_validation->set_rules('ac', 'AC', 'required', [
            'required' => 'AC Harus Diisi!'
        ]);
        $this->form_validation->set_rules('sopir', 'Sopir', 'required', [
            'required' => 'Sopir Harus Diisi!'
        ]);
        $this->form_validation->set_rules('safety', 'Safety', 'required', [
            'required' => 'Safety Harus Diisi!'
        ]);
    }
}
