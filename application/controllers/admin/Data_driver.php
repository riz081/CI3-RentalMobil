<?php

class Data_driver extends CI_Controller
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
        $data['driver'] = $this->rental_model->get_data('driver')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('admin/data_driver', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('templates_admin/footer');
    }

    public function tambah_driver()
    {
        $this->load->view('templates_admin/header');
        $this->load->view('admin/form_tambah_driver');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('templates_admin/footer');
    }

    public function tambah_driver_aksi()
    {
        $this->_rules();

        $kode_driver = $this->input->post('kode_driver');
        $nickname = $this->input->post('nickname');
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $no_hp = $this->input->post('no_hp');
        $status_driver = $this->input->post('status_driver');
        $harga_driver = $this->input->post('harga_driver');
        $denda_driver = $this->input->post('denda_driver');
        $foto = $_FILES['foto']['name'];

        if ($foto = '') {
        } else {
            $config['upload_path']          = './assets/upload/';
            $config['allowed_types']        = 'jpg|png|jpeg|tiff';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('foto')) {
                echo "Gambar Gagal Diupload!";
            } else {
                $foto = $this->upload->data('file_name');
            }
        }

        $data = array(
            'kode_driver' => $kode_driver,
            'nickname' => $nickname,
            'nama' => $nama,
            'alamat' => $alamat,
            'no_hp' => $no_hp,
            'status_driver' => $status_driver,
            'harga_driver' => $harga_driver,
            'denda_driver' => $denda_driver,
            'foto' => $foto

        );


        $this->rental_model->insert_data($data, 'driver');

        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data Driver Berhasil Ditambahkan!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>');
        redirect('admin/data_driver');
    }

    public function update_driver($id)
    {
        $where = array('id_driver' => $id);
        $data['driver'] = $this->db->query("SELECT * FROM driver WHERE id_driver='$id'")->result();

        $this->load->view('templates_admin/header');
        $this->load->view('admin/form_update_driver', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('templates_admin/footer');
    }

    public function update_driver_aksi()
    {
        $this->_rules();

        $id_driver = $this->input->post('id_driver');
        $kode_driver = $this->input->post('kode_driver');
        $nickname = $this->input->post('nickname');
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $no_hp = $this->input->post('no_hp');
        $status_driver = $this->input->post('status_driver');
        $harga_driver = $this->input->post('harga_driver');
        $denda_driver = $this->input->post('denda_driver');
        $foto = $_FILES['foto']['name'];

        if ($foto) {
            $config['upload_path']          = './assets/upload/';
            $config['allowed_types']        = 'jpg|png|jpeg|tiff';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('foto')) {
                $foto = $this->upload->data('file_name');
                $this->db->set('foto', $foto);
            } else {
                echo $this->upload->display_errors();
            }
        }

        $data = array(
            'kode_driver' => $kode_driver,
            'nickname' => $nickname,
            'nama' => $nama,
            'alamat' => $alamat,
            'no_hp' => $no_hp,
            'status_driver' => $status_driver,
            'harga_driver' => $harga_driver,
            'denda_driver' => $denda_driver,
            'foto' => $foto
        );

        $where = array(
            'id_driver' => $id_driver
        );

        $this->rental_model->update_data('driver', $data, $where);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                Data Mobil Berhasil Diupdate!.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>');
        redirect('admin/data_driver');
    }

    public function delete_driver($id)
    {
        $where = array('id_driver' => $id);

        $this->rental_model->delete_data($where, 'driver');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Data Mobil Berhasil Dihapus!.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
        redirect('admin/data_driver');
    }

    public function detail_driver($id)
    {
        $data['detail'] = $this->rental_model->ambil_id_driver($id);
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/detail_driver', $data);
        $this->load->view('templates_admin/footer');
    }


    public function _rules()
    {
        $this->form_validation->set_rules('kode_driver', 'Kode Driver', 'required|is_unique[driver.kode_driver]', [
            'required' => 'Kode Driver Harus Diisi!',
            'is_unique' => 'Kode Driver Sudah Ada!'
        ]);
        $this->form_validation->set_rules('nickname', 'Nickname', 'required', [
            'required' => 'Nickname Harus Diisi!'
        ]);
        $this->form_validation->set_rules('nama', 'Nama', 'required', [
            'required' => 'Nama Harus Diisi!'
        ]);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required', [
            'required' => 'Alamat Harus Diisi!'
        ]);
        $this->form_validation->set_rules('no_hp', 'No HP', 'required', [
            'required' => 'No HP Harus Diisi!'
        ]);
        $this->form_validation->set_rules('status_driver', 'Status Driver', 'required', [
            'required' => 'Status Driver Harus Diisi!'
        ]);
        $this->form_validation->set_rules('harga_driver', 'Harga', 'required', [
            'required' => 'Harga Harus Diisi!'
        ]);
        $this->form_validation->set_rules('denda_driver', 'Denda', 'required', [
            'required' => 'Denda Harus Diisi!'
        ]);
        $this->form_validation->set_rules('foto', 'Foto', 'required', [
            'required' => 'Foto Harus Diisi!'
        ]);
    }
}
