<div class="main-content">
    <div class="section">
        <div class="section-header">
            <h1>Form Update Type Mobil</h1>
        </div>
    </div>

    <?php foreach ($tipe as $tp) : ?>

        <form method="POST" action="<?php echo base_url('admin/data_type/update_type_aksi') ?>">

            <div class="form-group">
                <label"> Kode Type </label>
                    <input type="hidden" name="id_type" value="<?php echo $tp->id_type ?>">
                    <input type="kode_type" name="kode_type" class="form-control" value="<?php echo $tp->kode_type ?>">
                    <?php echo form_error('kode_type', '<div class="text-small text-danger">', '</div>') ?>
            </div>

            <div class="form-group">
                <label"> Nama Type </label>
                    <input type="nama_type" name="nama_type" class="form-control" value="<?php echo $tp->nama_type ?>">
                    <?php echo form_error('nama_type', '<div class="text-small text-danger">', '</div>') ?>
            </div>

            <div class="row">
                <div class="col-md-10"></div>
                <div class="col-md-2">
                    <button class="btn btn-success" type="submit" onclick="return confirm('Data Akan Diperbarui ?')"> Update </button>
                    <button class="btn btn-danger" type="reset"> Reset </button>
                </div>
            </div>


        </form>

    <?php endforeach; ?>
</div>