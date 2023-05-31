<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data Driver</h1>
        </div>

        <a href="<?php echo base_url('admin/data_driver/tambah_driver') ?>" class="btn btn-primary mb-2"><i class="fas fa-plus"></i> Tambah Data</a>

        <?php echo $this->session->flashdata('pesan') ?>
        <div class="table-responsive mt-4">
            <table class="table table-hover table-striped table-bordered">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Foto</th>
                        <th>Kode</th>
                        <th>Nickname</th>
                        <th>No. HP</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    $no = 1;
                    foreach ($driver as $dr) : ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><img width="120px" src="<?php echo base_url() . 'assets/upload/' . $dr->foto ?>"></td>
                            <td><?php echo $dr->kode_driver ?></td>
                            <td><?php echo $dr->nickname ?></td>
                            <td><?php echo $dr->no_hp ?></td>
                            <td><?php if ($dr->status_driver == "0") {
                                    echo "<span class='badge badge-danger'> Tidak Tersedia</span>";
                                } else {
                                    echo "<span class='badge badge-success'> Tersedia</span>";
                                } ?></td>

                            <td>
                                <a href="<?php echo base_url('admin/data_driver/detail_driver/') . $dr->id_driver ?>" class="btn btn-sm btn-success"><i class="fas fa-eye" data-toggle="tooltip" data-placement="top" title="Detail"></i></a>
                                <a href="<?php echo base_url('admin/data_driver/delete_driver/') . $dr->id_driver ?>" onclick="return confirm('Data Akan Dihapus ?')" class="btn btn-sm btn-danger"><i class="fas fa-trash" data-toggle="tooltip" data-placement="top" title="Hapus Data"></i></a>
                                <a href="<?php echo base_url('admin/data_driver/update_driver/') . $dr->id_driver ?>" class="btn btn-sm btn-warning"><i class="fas fa-edit" data-toggle="tooltip" data-placement="top" title="Edit Data"></i></a>
                            </td>
                        </tr>

                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </section>
</div>