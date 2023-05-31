<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>
                Data Transaksi
            </h1>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <tr>
                    <th>No.</th>
                    <th>Customer</th>
                    <th>Mobil</th>
                    <th>tgl. Rental</th>
                    <th>tgl. Kembali</th>
                    <th>Harga Sewa/Hari</th>
                    <th>Denda/Hari</th>
                    <th>Total Denda</th>
                    <th>tgl. Dikembalikan</th>
                    <th>Status Pengembalian</th>
                    <th>Status Rental</th>
                    <th>Cek Pembayaran</th>
                    <th>
                        Aksi
                    </th>
                </tr>

                <?php $no = 1;
                foreach ($transaksi as $tr) : ?>

                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $tr->nama ?></td>
                        <td><?php echo $tr->merk ?></td>
                        <td><?php echo date('d/m/Y', strtotime($tr->tanggal_rental));  ?></td>
                        <td><?php echo date('d/m/Y', strtotime($tr->tanggal_kembali));  ?></td>
                        <td>Rp.<?php echo number_format($tr->harga, 0, ',', '.');  ?></td>
                        <td>Rp.<?php echo number_format($tr->denda, 0, ',', '.');  ?></td>
                        <td>Rp.<?php echo number_format($tr->total_denda, 0, ',', '.') ?></td>
                        <td>
                            <?php
                            if ($tr->tanggal_pengembalian == "0000-00-00") {
                                echo "-";
                            } else {
                                echo date('d/m/Y', strtotime($tr->tanggal_pengembalian));
                            }
                            ?>

                        </td>
                        <td>
                            <?php echo $tr->status_pengembalian ?>
                        </td>
                        <td>
                            <?php echo $tr->status_rental; ?>
                        </td>

                        <td>
                            <center>
                                <?php
                                if (empty($tr->bukti_pembayaran)) { ?>
                                    <button class="btn btn-sm btn-danger"><i class="fas fa-times-circle" data-toggle="tooltip" data-placement="top" title="Belum Konfirmasi"></i></button>
                                <?php } else { ?>
                                    <a class="btn btn-sm btn-success icon-gear" href="<?php echo base_url('admin/transaksi/pembayaran/' . $tr->id_rental) ?>"><i class="fas fa-check-circle" data-toggle="tooltip" data-placement="top" title="Selesai Konfirmasi"></i></a>
                                <?php } ?>
                            </center>
                        </td>

                        <td>
                            <?php
                            if ($tr->status == "1") {
                                echo "-";
                            } else { ?>
                                <div class="row">
                                    <a class="btn btn-sm btn-success m-2" href="<?php echo base_url('admin/transaksi/transaksi_selesai/' . $tr->id_rental) ?>"><i class="fas fa-check" data-toggle="tooltip" data-placement="top" title="Konfirmasi Transaksi"></i></a>

                                    <a onclick="return confirm('Yakin Membatalkan Transaksi ?')" class="btn btn-sm btn-danger m-2" href="<?php echo base_url('admin/transaksi/batal_transaksi/' . $tr->id_rental) ?>"><i class="fas fa-times" data-toggle="tooltip" data-placement="top" title="Hapus Transaksi"></i></a>
                                </div>
                            <?php } ?>
                        </td>
                    </tr>

                <?php endforeach; ?>
            </table>
        </div>
    </section>
</div>