<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Detail Mobil</h1>
        </div>
    </section>

    <?php foreach ($detail as $dt) : ?>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-5">
                        <img style="border-radius: 10%;" class=" border border-dark img-thumbnail mt-5" src="<?php echo base_url() . 'assets/upload/' . $dt->foto ?>">
                    </div>
                    <div class=" col-md-7">
                        <table class="table">
                            <tr>
                                <td>Kode Driver</td>
                                <td><?php echo $dt->kode_driver ?></td>
                            </tr>

                            <tr>
                                <td>Nickname</td>
                                <td><?php echo $dt->nickname ?></td>
                            </tr>

                            <tr>
                                <td>Nama</td>
                                <td><?php echo $dt->nama ?></td>
                            </tr>

                            <tr>
                                <td>Alamat</td>
                                <td><?php echo $dt->alamat ?></td>
                            </tr>

                            <tr>
                                <td>No. Handphone</td>
                                <td><?php echo $dt->no_hp ?></td>
                            </tr>

                            <tr>
                                <td>Status Driver</td>
                                <td>
                                    <?php
                                    if ($dt->status_driver == "0") {
                                        echo "<span class='badge badge-danger'> Tidak Tersedia</span>";
                                    } else {
                                        echo "<span class='badge badge-success'> Tersedia</span>";
                                    }
                                    ?>
                                </td>
                            </tr>

                            <tr>
                                <td>Harga</td>
                                <td>Rp. <?php echo number_format($dt->harga_driver, 0, ',', '.') ?></td>
                            </tr>

                            <tr>
                                <td>Denda</td>
                                <td>Rp. <?php echo number_format($dt->denda_driver, 0, ',', '.') ?></td>
                            </tr>

                        </table>

                        <a class="btn btn-sm btn-dark ml-4" href="<?php echo base_url('admin/data_driver') ?>"> Kembali </a>

                        <a class="btn btn-sm btn-warning ml-2" href="<?php echo base_url('admin/data_driver/update_driver/' . $dt->id_driver) ?>"> Update </a>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>