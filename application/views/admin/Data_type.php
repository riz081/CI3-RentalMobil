<div class="main-content">
    <div class="section">
        <div class="section-header">
            <h1>Data Type Mobil</h1>
        </div>
    </div>

    <a class="btn btn-primary mb-4" href="<?php echo base_url('admin/data_type/tambah_type') ?>"><i class="fas fa-solid fa-plus"></i> Tambah Data Type </a>

    <?php echo $this->session->flashdata('pesan') ?>

    <table class="table table-bordered table-striped table-hover">
        <thead>
            <tr>
                <th widt="20px">No.</th>
                <th>Kode Type</th>
                <th>Nama Type</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            <?php
            $no = 1;
            foreach ($tipe as $tp) : ?>

                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $tp->kode_type ?></td>
                    <td><?php echo $tp->nama_type ?></td>
                    <td>
                        <a class="btn btn-sm btn-danger" onclick="return confirm('Data Akan Dihapus ?')" href="<?php echo base_url('admin/data_type/delete_type/') . $tp->id_type ?>"><i class="fas fa-trash" data-toggle="tooltip" data-placement="top" title="Hapus Data"></i></a>
                        <a class="btn btn-sm btn-warning" href="<?php echo base_url('admin/data_type/update_type/') . $tp->id_type ?>"><i class="fas fa-edit" data-toggle="tooltip" data-placement="top" title="Edit Data"></i></a>
                    </td>
                </tr>

            <?php endforeach; ?>
        </tbody>

    </table>
</div>