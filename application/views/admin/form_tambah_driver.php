<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Form Input Driver</h1>
        </div>

        <div class="card">
            <div class="card-body">
                <form action="<?php echo base_url() . 'admin/data_driver/tambah_driver_aksi' ?>" method="POST" enctype="multipart/form-data">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Kode Driver</label>
                                <input type="text" name="kode_driver" class="form-control"></input>
                                <?php echo form_error('kode_driver', '<div class="text-small text-danger">', '</div>') ?>
                            </div>

                            <div class="form-group">
                                <label>Nickname</label>
                                <input type="text" name="nickname" class="form-control"></input>
                                <?php echo form_error('nickname', '<div class="text-small text-danger">', '</div>') ?>
                            </div>

                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" name="nama" class="form-control"></input>
                                <?php echo form_error('nama', '<div class="text-small text-danger">', '</div>') ?>
                            </div>

                            <div class="form-group">
                                <label>alamat</label>
                                <input type="text" name="alamat" class="form-control"></input>
                                <?php echo form_error('alamat', '<div class="text-small text-danger">', '</div>') ?>
                            </div>

                            <div class="form-group">
                                <label>No. Handphone</label>
                                <input type="text" name="no_hp" class="form-control"></input>
                                <?php echo form_error('no_hp', '<div class="text-small text-danger">', '</div>') ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Status</label>
                                <select type="text" name="status_driver" class="form-control">
                                    <option value="">== Pilih Status ==</option>
                                    <option value="1"> Tersedia </option>
                                    <option value="0"> Tidak Tersedia</option>
                                </select>
                                <?php echo form_error('status_driver', '<div class="text-small text-danger">', '</div>') ?>
                            </div>

                            <div class="form-group">
                                <label>Harga</label>
                                <input type="number" name="harga_driver" class="form-control"></input>
                                <?php echo form_error('harga_driver', '<div class="text-small text-danger">', '</div>') ?>
                            </div>


                            <div class="form-group">
                                <label>Denda</label>
                                <input type="number" name="denda_driver" class="form-control"></input>
                                <?php echo form_error('denda_driver', '<div class="text-small text-danger">', '</div>') ?>
                            </div>


                            <div class="form-group">
                                <label>Foto</label>
                                <input type="file" name="foto" class="form-control"></input>
                                <?php echo form_error('foto', '<div class="text-small text-danger">', '</div>') ?>
                            </div>

                            <button type="submit" class="btn btn-primary mt-4" onclick="return confirm('Ingin Menambah Data ?')"> Submit </button>
                            <button type="reset" class="btn btn-danger mt-4">Reset</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </section>
</div>