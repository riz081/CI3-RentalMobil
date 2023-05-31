<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Form Update Data Driver</h1>
        </div>

        <div class="card">
            <div class="card-body">


                <?php foreach ($driver as $dr) : ?>

                    <form method="POST" action="<?php echo base_url() . 'admin/data_driver/update_driver_aksi' ?>" enctype="multipart/form-data">

                        <div class="row">
                            <div class="col-md-6">

                                <div class="form-group">
                                    <label">Kode Driver</label>
                                        <input type="hidden" name="id_driver" value="<?php echo $dr->id_driver ?>">
                                        <input type="text" name="kode_driver" class="form-control" value="<?php echo $dr->kode_driver ?>">
                                        <?php echo form_error('kode_driver', '<div class="text-small text-danger">', '</div>') ?>
                                </div>


                                <div class="form-group">
                                    <label">Nickname</label>
                                        <input type="text" name="nickname" class="form-control" value="<?php echo $dr->nickname ?>">
                                        <?php echo form_error('nickname', '<div class="text-small text-danger">', '</div>') ?>
                                </div>


                                <div class="form-group">
                                    <label">Nama Lengkap</label>
                                        <input type="text" name="nama" class="form-control" value="<?php echo $dr->nama ?>">
                                        <?php echo form_error('nama', '<div class="text-small text-danger">', '</div>') ?>
                                </div>

                                <div class="form-group">
                                    <label">Alamat</label>
                                        <input type="text" name="alamat" class="form-control" value="<?php echo $dr->alamat ?>">
                                        <?php echo form_error('alamat', '<div class="text-small text-danger">', '</div>') ?>
                                </div>

                                <div class="form-group">
                                    <label">No. Hanphone</label>
                                        <input type="number" name="no_hp" class="form-control" value="<?php echo $dr->no_hp ?>">
                                        <?php echo form_error('no_hp', '<div class="text-small text-danger">', '</div>') ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label">Harga</label>
                                        <input type="text" name="harga_driver" class="form-control" value="<?php echo $dr->harga_driver ?>">
                                        <?php echo form_error('harga_driver', '<div class="text-small text-danger">', '</div>') ?>
                                </div>

                                <div class="form-group">
                                    <label">Denda</label>
                                        <input type="text" name="denda_driver" class="form-control" value="<?php echo $dr->denda_driver ?>">
                                        <?php echo form_error('denda_driver', '<div class="text-small text-danger">', '</div>') ?>
                                </div>


                                <div class="form-group">
                                    <label">Status</label>
                                        <select name="status_driver" class="form-control">
                                            <option <?php if ($dr->status_driver == "1") {
                                                        echo "selected='selected'";
                                                    }
                                                    echo $dr->status_driver; ?> value="1"> Tersedia </option>

                                            <option <?php if ($dr->status_driver == "0") {
                                                        echo "selected='selected'";
                                                    }
                                                    echo $dr->status_driver; ?> value="0"> Tidak Tersedia </option>
                                        </select>
                                        <?php echo form_error('status_driver', '<div class="text-small text-danger">', '</div>') ?>
                                </div>

                                <div class="form-group">
                                    <label">Foto</label>
                                        <input type="file" name="foto" class="form-control">
                                </div>

                                <button type="submit" class="btn btn-success mt-4" onclick="return confirm('Data Akan Diperbarui ?')"> Update </button>
                                <button type="reset" class="btn btn-danger mt-4"> Reset </button>
                            </div>
                        </div>
                    </form>

                <?php endforeach; ?>

            </div>
        </div>
    </section>
</div>