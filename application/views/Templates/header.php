<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $tab_title ?></title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url() ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url() ?>assets/css/sb-admin-2.min.css" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url() ?>assets/css/sweetalert2.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">

</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url() ?>admin">
                <!-- <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div> -->
                <div class="sidebar-brand-text mx-3">
                    <i class="fas fa-book-reader"></i>
                    AFK LIBRARY
                </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url() ?>admin">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Menu
            </div>

            <!-- Daftar Anggota -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="<?= base_url() ?>anggota">
                    <i class="fas fa-users"></i>
                    <span>Data Anggota</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="<?= base_url() ?>buku">
                <i class="fas fa-book-open"></i>
                    <span>Data Buku</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="<?= base_url() ?>kelas"> 
                    <i class="fas fa-school"></i>
                    <span>Data Kelas</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <div class="sidebar-heading">
                Transaksi
            </div>

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-book"></i>
                    <span>Peminjaman Buku</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <div class="sidebar-heading">
                Admin
            </div>

            <li class="nav-item">
                <a class="nav-link collapsed" href="<?= base_url() ?>petugas">
                    <i class="fas fa-user"></i>
                    <span>Manajemen User</span>
                </a>
            </li>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <a href="#" onclick="history.back()"><i class="fas fa-chevron-left"></i></a>

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span
                                    class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $this->session->userdata['name'] ?></span>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>


                    </ul>

                </nav>
                <!-- End of Topbar -->