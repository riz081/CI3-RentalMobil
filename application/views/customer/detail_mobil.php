<div class="d-flex m-5 p-5 ">

    <div class="card ml-5 mb-5 mr-5 p-5" style="margin-top: 70px;">
        <div class="card-body">
            <?php foreach ($detail as $dt) : ?>

                <div class="row">
                    <div class="col-md-6">
                        <img class="img-fluid img-bordered" style="border-radius: 20px;" src="<?php echo base_url('assets/upload/' . $dt->gambar) ?>">

                    </div>
                    <div class="col-md-6">
                        <table class="table table-striped table-hover">
                            <tr>
                                <th>Merk</th>
                                <td><?php echo $dt->merk ?></td>

                            </tr>

                            <tr>
                                <th>Nomor Plat</th>
                                <td><?php echo $dt->no_plat ?></td>

                            </tr>

                            <tr>
                                <th>Warna</th>
                                <td><?php echo $dt->warna ?></td>

                            </tr>

                            <tr>
                                <th>Tahun</th>
                                <td><?php echo $dt->tahun ?></td>

                            </tr>

                            <tr>
                                <th>Status</th>
                                <td><?php

                                    if ($dt->status == "1") {
                                        echo "Tersedia";
                                    } else {
                                        echo "Tidak Tersedia";
                                    }

                                    ?>
                                </td>

                            </tr>

                            <tr>
                                <td>
                                    <?php

                                    if ($dt->status == "0") {
                                        echo "<span class='btn btn-danger disable'> Telah Disewa </span>";
                                    } else {
                                        echo anchor('customer/rental/tambah_rental/' . $dt->id_mobil, '<button class="btn btn-danger"> Sewa </button>');
                                    }

                                    ?>
                                    <a class="btn btn-dark ml-4" href="<?php echo base_url('customer/data_mobil') ?>"> Kembali </a>
                                </td>

                            </tr>
                        </table>
                    </div>
                </div>

            <?php endforeach; ?>
        </div>

    </div>
</div>