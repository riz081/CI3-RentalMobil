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
                        <img style="border-radius: 10%;" class=" border border-dark img-thumbnail mt-5" src="<?php echo base_url() . 'assets/upload/' . $dt->gambar ?>">
                    </div>
                    <div class=" col-md-7">
                        <table class="table">
                            <tr>
                                <td>Type Mobil</td>
                                <td>
                                    <?php
                                    if ($dt->kode_type == "SDN") {
                                        echo "Sedan";
                                    } elseif ($dt->kode_type == "MPV") {
                                        echo "Multi Purpose Vehicle";
                                    } elseif ($dt->kode_type == "SUV") {
                                        echo "Sport Utility Vehicle";
                                    } elseif ($dt->kode_type == "HB") {
                                        echo "Hatchback";
                                    } else {
                                        echo "<span class='text-danger> Type Mobil Belum Tersedia</span>";
                                    }
                                    ?>
                                </td>
                            </tr>

                            <tr>
                                <td>Merk</td>
                                <td><?php echo $dt->merk ?></td>
                            </tr>

                            <tr>
                                <td>Nomor Plat</td>
                                <td><?php echo $dt->no_plat ?></td>
                            </tr>

                            <tr>
                                <td>Warna</td>
                                <td><?php echo $dt->warna ?></td>
                            </tr>

                            <tr>
                                <td>Tahun</td>
                                <td><?php echo $dt->tahun ?></td>
                            </tr>

                            <tr>
                                <td>Harga</td>
                                <td>Rp. <?php echo number_format($dt->harga, 0, ',', '.') ?></td>
                            </tr>

                            <tr>
                                <td>Denda</td>
                                <td>Rp. <?php echo number_format($dt->denda, 0, ',', '.') ?></td>
                            </tr>

                            <tr>
                                <td>Status</td>
                                <td>
                                    <?php
                                    if ($dt->status == "0") {
                                        echo "<span class='badge badge-danger'> Tidak Tersedia</span>";
                                    } else {
                                        echo "<span class='badge badge-success'> Tersedia</span>";
                                    }
                                    ?>
                                </td>
                            </tr>

                            <tr>
                                <td>AC</td>
                                <td>
                                    <?php
                                    if ($dt->ac == "0") {
                                        echo "<span class='badge badge-danger'> Tidak Tersedia</span>";
                                    } else {
                                        echo "<span class='badge badge-success'> Tersedia</span>";
                                    }
                                    ?>
                                </td>
                            </tr>

                            <tr>
                                <td>Sopir</td>
                                <td>
                                    <?php
                                    if ($dt->sopir == "0") {
                                        echo "<span class='badge badge-danger'> Tidak Tersedia</span>";
                                    } else {
                                        echo "<span class='badge badge-success'> Tersedia</span>";
                                    }
                                    ?>
                                </td>
                            </tr>

                            <tr>
                                <td>Safety</td>
                                <td>
                                    <?php
                                    if ($dt->safety == "0") {
                                        echo "<span class='badge badge-danger'> Tidak Tersedia</span>";
                                    } else {
                                        echo "<span class='badge badge-success'> Tersedia</span>";
                                    }
                                    ?>
                                </td>
                            </tr>

                        </table>

                        <a class="btn btn-sm btn-dark ml-4" href="<?php echo base_url('admin/data_mobil') ?>"> Kembali </a>

                        <a class="btn btn-sm btn-warning ml-2" href="<?php echo base_url('admin/data_mobil/update_mobil/' . $dt->id_mobil) ?>"> Update </a>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>