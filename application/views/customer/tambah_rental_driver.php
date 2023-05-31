<div class="container">
    <div class="card" style="margin-top: 150px; margin-bottom: 50px">
        <div class="card-header">
            Form Rental Driver
        </div>
        <div class="card-body">
            <?php foreach ($detail as $dt) : ?>
                <form action="<?php echo base_url('customer/rental_driver/tambah_rental_aksi') ?>" method="POST">
                    <div class="form-group">
                        <label>Harga Sewa/hari</label>
                        <input type="hidden" name="id_driver" value="<?php echo $dt->id_driver ?>">
                        <input type="text" name="harga_driver" class="form-control" value="<?php echo $dt->harga_driver ?>" readonly>
                    </div>

                    <div class="form-group">
                        <label>Denda/hari</label>
                        <input type="text" name="denda_driver" class="form-control" value="<?php echo $dt->denda_driver ?>" readonly>
                    </div>

                    <div class="form-group">
                        <label>Tanggal Rental</label>
                        <input type="date" name="tanggal_rental" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Tanggal Kembali</label>
                        <input type="date" name="tanggal_kembali" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-success">Rental</button>

                </form>


            <?php endforeach; ?>
        </div>
    </div>
</div>