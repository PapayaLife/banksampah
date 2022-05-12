<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Mazer Admin Dashboard</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/bootstrap.css">

    <link rel="stylesheet" href="<?= base_url(); ?>/assets/vendors/iconly/bold.css">

    <link rel="stylesheet" href="<?= base_url(); ?>/assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/app.css">
    <link rel="shortcut icon" href="<?= base_url(); ?>/assets/images/favicon.svg" type="image/x-icon">
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="<?= base_url('dashboard'); ?>">
                                <h3 class="text-primary"><i class="fas fa-university"></i> Bank Sampah</h3>
                            </a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-item active ">
                            <a href="<?= base_url('dashboard'); ?>" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <hr>

                        <li class="sidebar-title">Admin</li>

                        <li class="sidebar-item ">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-clipboard-plus"></i>
                                <span>Kelola</span>
                            </a>
                        </li>

                        <li class="sidebar-item ">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-people"></i>
                                <span>Master Users</span>
                            </a>
                        </li>


                        <li class="sidebar-item ">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-receipt-cutoff"></i>
                                <span>Master Riwayat</span>
                            </a>
                        </li>

                        <hr>

                        <li class="sidebar-title">User</li>

                        <li class="sidebar-item ">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-receipt"></i>
                                <span>Riwayat</span>
                            </a>
                        </li>

                        <li class="sidebar-item ">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-wallet2"></i>
                                <span>Saldo</span>
                            </a>
                        </li>

                        <li class="sidebar-item ">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-gear"></i>
                                <span>Setting</span>
                            </a>
                        </li>

                        <hr>

                        <li class="sidebar-item ">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Logout</span>
                            </a>
                        </li>

                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Page Title</h3>
                            <!-- <p class="text-subtitle text-muted">For user to check they list</p> -->
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <!-- <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li> -->
                                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <?= $this->renderSection('content'); ?>

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2021 &copy; Mazer</p>
                    </div>
                    <div class="float-end">
                        <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a href="http://ahmadsaugi.com">A. Saugi</a></p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="<?= base_url(); ?>/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="<?= base_url(); ?>/assets/js/bootstrap.bundle.min.js"></script>

    <script src="<?= base_url(); ?>/assets/vendors/apexcharts/apexcharts.js"></script>
    <script src="<?= base_url(); ?>/assets/js/pages/dashboard.js"></script>

    <script src="<?= base_url(); ?>/assets/js/main.js"></script>
</body>

</html>