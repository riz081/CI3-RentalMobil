<div class="container">

    <div class="card mx-auto" style="margin-top: 200px; width: 80%;">
        <div class="card-header">
            Data Transaksi <?php echo $this->session->userdata('nama') ?>
        </div>
        <span class="mt-2 p-2">
            <?php echo $this->session->flashdata('pesan') ?>
        </span>

        <div class="card-body">
            <table class="table table-bordered table-striped">
                <tr>
                    <th>No.</th>
                    <th>Nama Customer</th>
                    <th>Driver</th>
                    <th>Harga Sewa</th>
                    <th>Aksi</th>
                    <th>Batal</th>
                </tr>

                <?php
                $no = 1;
                foreach ($transaksi_driver as $tr) : ?>
                    <tr>
                        <td>
                            <?php echo $no++ ?>
                        </td>
                        <td><?php echo $tr->nama ?></td>
                        <td><?php echo $tr->nickname ?></td>
                        <td>Rp. <?php echo number_format($tr->harga_driver, 0, ',', '.') ?></td>
                        <td>
                            <?php if ($tr->status_rental == "Selesai") { ?>
                                <button class="btn btn-sm btn-danger text-white">
                                    Rental Selesai
                                </button>

                            <?php } else { ?>
                                <a href="<?php echo base_url('customer/transaksi_driver/pembayaran/' . $tr->id_rental) ?>" class="btn btn-sm btn-success text-white">
                                    Cek Pembayaran</a>
                            <?php } ?>
                        </td>
                        <td>
                            <?php if ($tr->status_rental == 'Belum Selesai') { ?>
                                <a onclick="return confirm('Yakin Membatalkan Transaksi ?')" class="btn btn-sm btn-danger" href="<?php echo base_url('customer/transaksi_driver/batal_transaksi/' . $tr->id_rental) ?>">Batalkan</a>
                            <?php } else { ?>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#exampleModal">
                                    Batalkan
                                </button>
                            <?php } ?>




                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Informasi Pembatalan Transaksi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Mohon Maaf Transaksi Telah Selesai, Anda Tidak Dapat Membatalkan Transaksi !
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-success" data-dismiss="modal"><i class="icon-check-circle"></i> OK</button>
            </div>
        </div>
    </div>
</div>