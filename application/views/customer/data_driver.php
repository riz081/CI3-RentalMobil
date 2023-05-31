<div class="hero inner-page" style="background-image: url('<?php echo base_url() ?>/assets/assets_shop/images/hero_1_a.jpg');">

    <div class="container">
        <div class="row align-items-end ">
            <div class="col-lg-5">

                <div class="intro">
                    <h1><strong>Daftar Driver</strong></h1>
                    <div class="custom-breadcrumbs"><a href="index.html">Home</a> <span class="mx-2">/</span> <strong>Daftar Driver</strong></div>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="site-section bg-light">
    <?php echo $this->session->flashdata('pesan') ?>
    <div class="container">
        <div class="row">
            <?php foreach ($driver as $dr) : ?>
                <div class="col-md-6 col-lg-4 mb-4">

                    <div class="listing d-block  align-items-stretch">
                        <div class="listing-img h-100 mr-4">
                            <img src="<?php echo base_url('assets/upload/' . $dr->foto) ?>" alt="Image" class="img-fluid">
                        </div>
                        <div class="listing-contents h-100">
                            <h3><?php echo $dr->nickname ?></h3>
                            <div class="rent-price">
                                <strong>Rp. <?php echo number_format($dr->harga_driver, 0, ',', '.') ?></strong><span class="mx-1"> / hari</span>
                            </div>
                            <div class="d-block d-md-flex mb-3 border-bottom pb-3">

                            </div>
                            <div>
                                <?php
                                if ($dr->status_driver == "1") {
                                    echo anchor('customer/rental_driver/tambah_rental/' . $dr->id_driver, "<span class='btn btn-sm btn-success text-white'> Sewa Sekarang </span>");
                                } else {
                                    echo "<span class='btn btn-sm btn-danger text-white'> Tidak Tersedia </span>";
                                }
                                ?>
                                <a href="<?php echo base_url('customer/data_driver/detail_driver/') . $dr->id_driver ?>" class="btn btn-sm btn-dark"><i class="icon-eye"> Detail</i></a>
                            </div>
                        </div>

                    </div>
                </div>

            <?php endforeach; ?>



        </div>
        <div class="row">
            <div class="col-5">
                <div class="custom-pagination">
                    <a href="#">1</a>
                    <span>2</span>
                    <a href="#">3</a>
                    <a href="#">4</a>
                    <a href="#">5</a>
                </div>
            </div>
        </div>
    </div>
</div>