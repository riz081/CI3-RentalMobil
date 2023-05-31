<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Dashboard</h1>
        </div>


        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Customer</h4>
                        </div>
                        <div class="card-body">
                            <?= $this->fungsi->count_data('customer') ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-danger">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Mobil</h4>
                        </div>
                        <div class="card-body">
                            <?= $this->fungsi->count_data('mobil') ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-warning">
                        <i class="fas fa-user-clock"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Driver</h4>
                        </div>
                        <div class="card-body">
                            <?= $this->fungsi->count_data('driver') ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-success">
                        <i class="fas fa-random"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Transaksi</h4>
                        </div>
                        <div class="card-body">
                            <?= $this->fungsi->count_data('transaksi') ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-dark">
                        <i class="fas fa-user-circle"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Admin</h4>
                        </div>
                        <div class="card-body">
                            <?= $this->fungsi->count_data('admin') ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                        <i class="fas fa-money-bill-wave"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Driver Payment</h4>
                        </div>
                        <div class="card-body">
                            <?= $this->fungsi->count_data('transaksi_driver') ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <i class="fas fa-cog"></i>
            <strong>Control Panel</strong>
        </button>
    </section>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-black" style="font-weight: bolder;" id="exampleModalLabel">CONTROL PANEL</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- row  1 -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-danger">
                                <a class="fas fa-car" href="<?php echo base_url('admin/data_mobil/') ?>" data-toggle="tooltip" data-placement="top" title="Data Mobil"></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-primary">
                                <a class="fas fa-users" href="<?php echo base_url('admin/data_customer/') ?> " data-toggle="tooltip" data-placement="top" title="Data Customer"></a>
                            </div>
                        </div>
                    </div>

                    <div class=" col-md-4">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-warning">
                                <a class="fas fa-user-clock" href="<?php echo base_url('admin/data_driver/') ?> " data-toggle="tooltip" data-placement="top" title="Data Driver"></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- row  2 -->
                <div class="row">

                    <div class="col-md-4">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-success">
                                <a class="fas fa-random" href="<?php echo base_url('admin/transaksi/') ?>" data-toggle="tooltip" data-placement="top" title="Data Transaksi"> </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-primary">
                                <a class="fas fa-money-bill-wave" href="<?php echo base_url('admin/transaksi_driver/') ?>" data-toggle="tooltip" data-placement="top" title="Driver Payment"> </a>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-4">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-dark">
                                <a class="fas fa-grip-horizontal" href="<?php echo base_url('admin/data_type/') ?> " data-toggle="tooltip" data-placement="top" title="Data Type Mobil"></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-info">
                                <a class="fas fa-clipboard-list" href="<?php echo base_url('admin/laporan/') ?> " data-toggle="tooltip" data-placement="top" title="Data Laporan"> </a>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>