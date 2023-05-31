<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Form Update Data Mobil</h1>
        </div>

        <div class="card">
            <div class="card-body">


                <?php foreach ($mobil as $mb) : ?>

                    <form method="POST" action="<?php echo base_url('admin/data_mobil/update_mobil_aksi') ?>" enctype="multipart/form-data">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label">Type Mobil</label>
                                        <input type="hidden" name="id_mobil" value="<?php echo $mb->id_mobil ?>">

                                        <select name="kode_type" class="form-control">
                                            <option value="<?php echo $mb->kode_type ?>"><?php echo $mb->kode_type ?></option>
                                            <?php foreach ($tipe as $tp) : ?>
                                                <option value="<?php echo $tp->kode_type ?>">
                                                    <?php echo $tp->nama_type ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <?php echo form_error('kode_type', '<div class="text-small text-danger">', '</div>') ?>
                                </div>

                                <div class="form-group">
                                    <label">Merk</label>
                                        <input type="text" name="merk" class="form-control" value="<?php echo $mb->merk ?>">
                                        <?php echo form_error('merk', '<div class="text-small text-danger">', '</div>') ?>
                                </div>


                                <div class="form-group">
                                    <label">Nomor Plat</label>
                                        <input type="text" name="no_plat" class="form-control" value="<?php echo $mb->no_plat ?>">
                                        <?php echo form_error('no_plat', '<div class="text-small text-danger">', '</div>') ?>
                                </div>


                                <div class="form-group">
                                    <label">Warna</label>
                                        <input type="text" name="warna" class="form-control" value="<?php echo $mb->warna ?>">
                                        <?php echo form_error('warna', '<div class="text-small text-danger">', '</div>') ?>
                                </div>


                                <div class="form-group">
                                    <label">Harga</label>
                                        <input type="text" name="harga" class="form-control" value="<?php echo $mb->harga ?>">
                                        <?php echo form_error('harga', '<div class="text-small text-danger">', '</div>') ?>
                                </div>

                                <div class="form-group">
                                    <label">Denda</label>
                                        <input type="text" name="denda" class="form-control" value="<?php echo $mb->denda ?>">
                                        <?php echo form_error('denda', '<div class="text-small text-danger">', '</div>') ?>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label">Tahun</label>
                                        <input type="text" name="tahun" class="form-control" value="<?php echo $mb->tahun ?>">
                                        <?php echo form_error('tahun', '<div class="text-small text-danger">', '</div>') ?>
                                </div>

                                <div class="form-group">
                                    <label">Status</label>
                                        <select name="status" class="form-control">
                                            <option <?php if ($mb->status == "1") {
                                                        echo "selected='selected'";
                                                    }
                                                    echo $mb->status; ?> value="1"> Tersedia </option>

                                            <option <?php if ($mb->status == "0") {
                                                        echo "selected='selected'";
                                                    }
                                                    echo $mb->status; ?> value="0"> Tidak Tersedia </option>
                                        </select>
                                        <?php echo form_error('status', '<div class="text-small text-danger">', '</div>') ?>
                                </div>

                                <div class="form-group">
                                    <label">AC</label>
                                        <select name="ac" class="form-control">
                                            <option <?php if ($mb->ac == "1") {
                                                        echo "selected='selected'";
                                                    }
                                                    echo $mb->ac; ?> value="1"> Tersedia </option>

                                            <option <?php if ($mb->ac == "0") {
                                                        echo "selected='selected'";
                                                    }
                                                    echo $mb->ac; ?> value="0"> Tidak Tersedia </option>
                                        </select>
                                        <?php echo form_error('ac', '<div class="text-small text-danger">', '</div>') ?>
                                </div>

                                <div class="form-group">
                                    <label">Sopir</label>
                                        <select name="sopir" class="form-control">
                                            <option <?php if ($mb->sopir == "1") {
                                                        echo "selected='selected'";
                                                    }
                                                    echo $mb->sopir; ?> value="1"> Tersedia </option>

                                            <option <?php if ($mb->sopir == "0") {
                                                        echo "selected='selected'";
                                                    }
                                                    echo $mb->sopir; ?> value="0"> Tidak Tersedia </option>
                                        </select>
                                        <?php echo form_error('sopir', '<div class="text-small text-danger">', '</div>') ?>
                                </div>

                                <div class="form-group">
                                    <label">Safety</label>
                                        <select name="safety" class="form-control">
                                            <option <?php if ($mb->safety == "1") {
                                                        echo "selected='selected'";
                                                    }
                                                    echo $mb->safety; ?> value="1"> Tersedia </option>

                                            <option <?php if ($mb->safety == "0") {
                                                        echo "selected='selected'";
                                                    }
                                                    echo $mb->safety; ?> value="0"> Tidak Tersedia </option>
                                        </select>
                                        <?php echo form_error('safety', '<div class="text-small text-danger">', '</div>') ?>
                                </div>


                                <div class="form-group">
                                    <label">Gambar</label>
                                        <input type="file" name="gambar" class="form-control">
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