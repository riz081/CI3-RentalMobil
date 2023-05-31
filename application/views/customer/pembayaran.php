<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-8">
            <div class="card" style="margin-top: 150px;">
                <div class="card-header alert-dark">
                    <strong>Invoice Pembayaran</strong>
                </div>
                <div class="card-body">
                    <table class="table">
                        <?php foreach ($transaksi as $tr) : ?>
                            <tr>
                                <th>Merk Mobil</th>
                                <td>:</td>
                                <td><?php echo $tr->merk ?></td>
                            </tr>

                            <tr>
                                <th>Tanggal Rental</th>
                                <td>:</td>
                                <td><?php echo $tr->tanggal_rental ?></td>
                            </tr>

                            <tr>
                                <th>Tanggal Kembali</th>
                                <td>:</td>
                                <td><?php echo $tr->tanggal_kembali ?></td>
                            </tr>

                            <tr>
                                <th>Biaya Sewa/Hari</th>
                                <td>:</td>
                                <td><?php echo number_format($tr->harga, 0, ',', '.') ?></td>
                            </tr>

                            <tr>
                                <?php
                                $x = strtotime($tr->tanggal_kembali);
                                $y = strtotime($tr->tanggal_rental);
                                $jml_hari = abs(($x - $y) / (60 * 60 * 24));
                                ?>
                                <th>Lama Hari Penyewaan</th>
                                <td>:</td>
                                <td><?php echo $jml_hari ?> Hari</td>
                            </tr>

                            <tr class="text-success">
                                <th>Total Pembayaran</th>
                                <td>:</td>
                                <td><button class="btn btn-sm btn-success"> Rp.
                                        <?php echo number_format($tr->harga * $jml_hari, 0, ',', '.') ?>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td><a href="<?php echo base_url('customer/transaksi/cetak_invoice/' . $tr->id_rental) ?>" class="btn btn-sm btn-secondary">Print Invoice</a></td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="margin-top: 150px;">
                <div class="card-header alert alert-primary">
                    <strong>Informasi Pembayaran</strong>
                </div>
                <div class="card-body">
                    <strong>
                        <p class="text-success">SIlahkan Melakukan Pembayaran Melalui Nomor Rekening di Bawah Ini :</p>

                        <ul class="list-group list-group-flush mb-3">
                            <li class="list-group-item">Bank Mandiri 111xxxxxxxxx</li>
                            <li class="list-group-item">Bank BCA 111xxxxxxxxx</li>
                            <li class="list-group-item">Bank BNI 111xxxxxxxxx</li>
                            <li class="list-group-item">Bank BTN 111xxxxxxxxx</li>
                            <li class="list-group-item">Bank BRI 111xxxxxxxxx</li>
                        </ul>
                        <p class="text-danger" style="font-family: arail; font-size:12px;">
                            Note : Untuk Melakukan Upload Bukti Pembayaran, Format File Harus .pdf !
                        </p>

                        <?php
                        if (empty($tr->bukti_pembayaran)) { ?>
                            <!-- Button trigger modal -->
                            <button style="width: 100%;" type="button" class="btn btn-danger mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <strong>
                                    <i class="icon-note_add"></i>
                                    Upload Bukti Pembayaran
                                </strong>
                            </button>


                        <?php } elseif ($tr->status_pembayaran == "0") {
                        ?>
                            <button style="width: 100%;" class="btn btn-sm btn-warning"><i class="icon-clock-o"><strong></i> Menunggu Konfirmasi</button>
                    </strong>
                <?php } elseif ($tr->status_pembayaran == "1") { ?>
                    <button style="width: 100%;" class="btn btn-sm btn-success"><i class="icon-check"><strong></i> Pembayaran Selesai</button></strong>
                <?php } ?>

                </strong>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Upload bukti pembayaran -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Upload Bukti Pembayaran</h5>
                <button type="button" class="btn btn-sm btn-danger rounded" data-bs-dismiss="modal">X</button>
            </div>

            <form action="<?php echo base_url('customer/transaksi/pembayaran_aksi') ?>" enctype="multipart/form-data" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Upload Bukti Pembayaran</label>
                        <input type="hidden" name="id_rental" value="<?php echo $tr->id_rental ?>" class="form-control">
                        <input type="file" name="bukti_pembayaran" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-sm btn-success text-white">Kirim</button>
                </div>
            </form>
        </div>
    </div>
</div>