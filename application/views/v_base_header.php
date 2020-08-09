<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Sidebar</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
    <link rel="shortcut icon" href="<?= base_url() ?>assets/img/favicon-32x32.png">
</head>
<?php 
$navActive = function(){echo "class='active disabled'";}; 
?>
<body>

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar" class="active">
            <div class="sidebar-header text-center">
                <h5>Premium Laundry</h5>
                <strong>PL</strong>
            </div>

            <ul class="list-unstyled components list-sidebar">
                <li <?php if($page_name == "dasbor"){$navActive();} ?>>
                    <a href="<?= site_url() ?>/dasbor">
                        <i class="fas fa-tachometer-alt mr-2 logo-sidebar" id="logo-sidebar"></i>
                        <span class="d-none">Dasbor</span>
                    </a>
                </li>
                <li <?php if($page_name == "data_pelanggan"){$navActive();} ?>>
                    <a href="<?= site_url() ?>/data_pelanggan">
                        <i class="fas fa-id-card-alt mr-2 logo-sidebar"></i>
                        <span class="d-none">Data Pelanggan</span>
                    </a>
                </li>
                <li <?php if($page_name == "data_member"){$navActive();} ?>>
                    <a href="<?= site_url() ?>/data_member">
                        <i class="fas fa-users-cog mr-2 logo-sidebar"></i>
                        <span class="d-none">Data Member</span>
                    </a>
                </li>
                <li <?php if($page_name == "data_pengguna"){$navActive();} ?>>
                    <a href="<?= site_url() ?>/data_pengguna">
                        <i class="fas fa-address-card mr-2 logo-sidebar"></i>
                        <span class="d-none">Data Pengguna</span>
                    </a>
                </li>
                <li <?php if($page_name == "data_cabang"){$navActive();} ?>>
                    <a href="<?= site_url() ?>/data_cabang">
                        <i class="fas fa-store-alt mr-2 logo-sidebar"></i>
                        <span class="d-none">Data Cabang</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-user-plus mr-2 logo-sidebar"></i>
                        <span class="d-none">Registrasi Pelanggan</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-money-check mr-2 logo-sidebar"></i>
                        <span class="d-none">Transaksi</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-info-circle mr-2 logo-sidebar"></i>
                        <span class="d-none">Detil Pesanan</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-file-alt mr-2 logo-sidebar"></i>
                        <span class="d-none">Laporan</span>
                    </a>
                </li>
            </ul>

            <ul class="list-unstyled CTAs">
                <li>
                    <a href="#" class="article">
                        <i class="fas fa-cog mr-2"></i>
                        Pengaturan
                    </a>
                </li>
                <li>
                    <a href="#" class="article">
                        <i class="fas fa-sign-out-alt mr-2"></i>
                        Logout
                    </a>
                </li>
            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-dark">
                        <i class="fas fa-align-left"></i>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <h5>Premium Laundry</h5>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>