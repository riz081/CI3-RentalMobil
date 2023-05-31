<!doctype html>
<html lang="en">

<head>
    <title>CarRental &mdash; Free Website Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/assets_shop/fonts/icomoon/style.css">

    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/assets_shop/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/assets_shop/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/assets_shop/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/assets_shop/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/assets_shop/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/assets_shop/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/assets_shop/css/aos.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/assets_shop/css/style.css">

</head>

<body>


    <div class="site-wrap" id="home-section">

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>



        <header class="site-navbar site-navbar-target bg-secondary" role="banner">

            <div class="container">
                <div class="row align-items-center position-relative">

                    <div class="col-3">
                        <div class="site-logo">
                            <a href="<?php echo base_url('customer/dashboard') ?>"><strong>CarRental</strong></a>
                        </div>
                    </div>

                    <div class="col-9  text-right">

                        <span class="d-inline-block d-lg-none"><a href="#" class=" site-menu-toggle js-menu-toggle py-5 "><span class="icon-menu h3 text-black"></span></a></span>

                        <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
                            <ul class="site-menu main-menu js-clone-nav ml-auto ">
                                <strong class="text-white"><?php echo $this->session->userdata('nama') ?> </strong>
                                <li class="active"><a href="<?php echo base_url('customer/data_mobil') ?>" class="nav-link"><strong>Mobil</strong></a></li>
                                <li><a href="<?php echo base_url('customer/data_driver') ?>" class="nav-link"><strong>Driver</strong></a></li>
                                <li><a href="<?php echo base_url('customer/transaksi') ?>" class="nav-link"><strong>Transaksi</strong></a></li>
                                <li><a href="<?php echo base_url('customer/transaksi_driver') ?>" class="nav-link"><strong>Driver Pay</strong></a></li>
                                <li><a href="<?php echo base_url('register') ?>" class="nav-link"><strong>Registrasi</strong></a></li>

                                <li class="nav-item row ml-2 ">

                                    <?php
                                    if ($this->session->userdata('nama')) { ?>

                                        <a class="nav-link" href="<?php echo base_url('auth/ganti_password') ?>"> <span class="btn btn-sm btn-secondary icon-gear"> Ganti Password </span> </a>
                                        <a class="nav-link" href="<?php echo base_url('auth/logout') ?>"><span class="btn btn-sm btn-danger icon-sign-out"> Logout </span> </a>
                                    <?php } else { ?>
                                        <a class="nav-link" href="<?php echo base_url('auth/login') ?>"> <span class="btn btn-sm btn-success"> Login </span> </a>
                                    <?php } ?>
                                </li>


                                <li class="nav-item row ml-2 ">

                                    <?php
                                    if ($this->session->userdata('nama')) { ?>


                                    <?php } else { ?>
                                        <a class="nav-link" href="<?php echo base_url('admin/auth_admin/login') ?>"> <span class="btn btn-sm btn-success"> Login as Admin </span> </a>
                                    <?php } ?>
                                </li>

                            </ul>
                        </nav>
                    </div>


                </div>
            </div>

        </header>