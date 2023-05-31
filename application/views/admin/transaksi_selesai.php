<div class="main-content">
    <section class="section">
        <div class="section-header">
            <strong>
                <h1>Transaksi Selesai</h1>
            </strong>
        </div>
    </section>

    <?php foreach ($transaksi as $tr) : ?>
        <form action="<?php echo base_url('admin/transaksi/transaksi_selesai_aksi') ?>" method="POST">
            <input type="hidden" name="id_rental" value="<?php echo $tr->id_rental ?>">
            <input type="hidden" name="tanggal_kembali" value="<?php echo $tr->tanggal_kembali ?>">
            <input type="hidden" name="denda" value="<?php echo $tr->denda ?>">


            <div class="form-group">
                <label>Tanggal Pengembalian</label>
                <input type="date" name="tanggal_pengembalian" class="form-control" value="<?php echo $tr->tanggal_pengembalian ?>">
            </div>

            <div class="form-group">
                <label>Status Pengembalian</label>
                <select name="status_pengembalian" class="form-control">
                    <option value="<?php echo $tr->status_pengembalian ?>"><?php echo $tr->status_pengembalian ?></option>
                    <option> Sudah Dikembalikan</option>
                    <option> Belum Dikembalikan</option>
                </select>
            </div>

            <div class="form-group">
                <label>Status Rental</label>
                <select name="status_rental" class="form-control">
                    <option value="<?php echo $tr->status_rental ?>"><?php echo $tr->status_rental ?></option>
                    <option> Selesai</option>
                    <option> Belum Selesai</option>
                </select>
            </div>

            <button type="submit" class="btn btn-success"> Simpan</button>
        </form>
    <?php endforeach; ?>

</div>