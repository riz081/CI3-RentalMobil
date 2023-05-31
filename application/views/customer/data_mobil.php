<div class="hero inner-page" style="background-image: url('<?php echo base_url() ?>/assets/assets_shop/images/hero_1_a.jpg');">

    <div class="container">
        <div class="row align-items-end ">
            <div class="col-lg-5">

                <div class="intro">
                    <h1><strong>Daftar Mobil</strong></h1>
                    <div class="custom-breadcrumbs"><a href="index.html">Home</a> <span class="mx-2">/</span> <strong>Daftar Mobil</strong></div>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="site-section bg-light">
    <?php echo $this->session->flashdata('pesan') ?>
    <div class="container">
        <div class="row">
            <?php foreach ($mobil as $mb) : ?>
                <div class="col-md-6 col-lg-4 mb-4">

                    <div class="listing d-block  align-items-stretch">
                        <div class="listing-img h-100 mr-4">
                            <img src="<?php echo base_url('assets/upload/' . $mb->gambar) ?>" alt="Image" class="img-fluid">
                        </div>
                        <div class="listing-contents h-100">
                            <h3><?php echo $mb->merk ?></h3>
                            <div class="rent-price">
                                <strong>Rp. <?php echo number_format($mb->harga, 0, ',', '.') ?></strong><span class="mx-1"> / hari</span>
                            </div>
                            <div class="d-block d-md-flex mb-3 border-bottom pb-3">
                                <div class="listing-feature pr-4 text-center">
                                    <span class="caption"><strong>AC</strong></span>
                                    <span class="number">
                                        <?php
                                        if ($mb->ac == "1") {
                                            echo "<span class='badge badge-success text-white'> Tersedia </span>";
                                        } else {
                                            echo "<span class='badge badge-danger'> Kosong </span>";
                                        }
                                        ?>
                                    </span>
                                </div>
                                <div class="listing-feature pr-4 text-center">
                                    <span class="caption"><strong>Sopir</strong></span>
                                    <span class="number">
                                        <?php
                                        if ($mb->sopir == "1") {
                                            echo "<span class='badge badge-success text-white'> Tersedia </span>";
                                        } else {
                                            echo "<span class='badge badge-danger'> Kosong </span>";
                                        }
                                        ?>
                                    </span>
                                </div>
                                <div class="listing-feature pr-4 text-center">
                                    <span class="caption"><strong>Safety</strong></span>
                                    <span class="number">
                                        <?php
                                        if ($mb->safety == "1") {
                                            echo "<span class='badge badge-success text-white'> Tersedia </span>";
                                        } else {
                                            echo "<span class='badge badge-danger'> Kosong </span>";
                                        }
                                        ?>
                                    </span>
                                </div>
                            </div>
                            <div>
                                <?php
                                if ($mb->status == "1") {
                                    echo anchor('customer/rental/tambah_rental/' . $mb->id_mobil, "<span class='btn btn-sm btn-success text-white'> Rental Sekarang </span>");
                                } else {
                                    echo "<span class='btn btn-sm btn-danger text-white'> Mobil Kosong </span>";
                                }
                                ?>
                                <a href="<?php echo base_url('customer/data_mobil/detail_mobil/') . $mb->id_mobil ?>" class="btn btn-sm btn-dark"><i class="icon-eye"> Detail</i></a>
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