<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data Customer</h1>
        </div>

        <a href="<?php echo base_url('admin/data_customer/tambah_customer') ?>" class="btn btn-primary mb-4"><i class="fas fa-solid fa-plus"></i> Tambah Customer </a>

        <?php echo $this->session->flashdata('pesan') ?>


        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover table-responsive">
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Alamat</th>
                    <th>Gender</th>
                    <th>No. Telepon</th>
                    <th>No. KTP</th>
                    <th>Password</th>
                    <th>Aksi</th>
                </tr>

                <?php
                $no = 1;
                foreach ($customer as $cs) : ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $cs->nama ?></td>
                        <td><?php echo $cs->username ?></td>
                        <td><?php echo $cs->alamat ?></td>
                        <td><?php echo $cs->gender ?></td>
                        <td><?php echo $cs->no_telp ?></td>
                        <td><?php echo $cs->no_ktp ?></td>
                        <td><?php echo $cs->password ?></td>
                        <td>

                            <div class="row">
                                <a href="<?php echo base_url('admin/data_customer/delete_customer/') . $cs->id_customer ?>" onclick="return confirm('Data Akan Dihapus ?')" class="btn btn-sm btn-danger"><i class="fas fa-trash" data-toggle="tooltip" data-placement="top" title="Hapus Data"></i></a>
                                <a href="<?php echo base_url('admin/data_customer/update_customer/') . $cs->id_customer ?>" class="btn btn-sm btn-warning"><i class="fas fa-edit" data-toggle="tooltip" data-placement="top" title="Edit Data"></i></a>
                            </div>
                        </td>
                    </tr>

                <?php endforeach; ?>

            </table>
        </div>