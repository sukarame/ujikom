<?php
session_start();

// cek apakah yang mengakses halaman ini sudah login
if ($_SESSION['level'] == "") {
    header("location:../index.php?pesan=info_login");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan Digital</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="../assets/css/sb-admin-2.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
</head>

<body class="bg-gradient-to-r from-blue-500 via-blue-400 to-blue-300">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-secondary sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-text mx-3">Perpustakaan Digital</div>
            </a>
            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-home"></i>
                    <span>Home</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="buku.php">
                    <i class="fas fa-fw fa-book"></i>
                    <span>Buku</span>
                </a>
                <a class="nav-link" href="kategori_buku.php">
                    <i class="fas fa-fw fa-book-open"></i>
                    <span>Kategori</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="member.php">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Member</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">
            <li class="nav-item">
                <a class="nav-link" href="ulasan.php">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Ulasan Buku</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="generate.php">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Generate Laporan</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['username']; ?></span>
                                <img class="img-profile rounded-circle" src="../assets/img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>
                <!-- End of Topbar -->
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                    </div>
                    <!-- Content Row -->
                    <div class="row">
                        <!-- Data data admin -->
                        <div class="content mt-3">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="card">
                                        <?php
                                        include '../koneksi.php';
                                        $dp = mysqli_query($koneksi, "SELECT COUNT(*) total FROM buku");
                                        $rp = mysqli_fetch_assoc($dp);
                                        ?>
                                        <div class="card-body bg-success-subtle text-center">
                                            <h3>Data Buku</h3>
                                            <h2><?php echo $rp['total']; ?></h2>
                                            <hr>
                                            <a href="buku.php" class="btn btn-dark btn-sm">Lihat Data</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="card">
                                        <?php
                                        include '../koneksi.php';
                                        $dp = mysqli_query($koneksi, "SELECT COUNT(*) total FROM kategoribuku");
                                        $rr = mysqli_fetch_assoc($dp);
                                        ?>
                                        <div class="card-body bg-warning-subtle text-center">
                                            <h3>Kategori Buku</h3>
                                            <h2><?php echo $rr['total']; ?></h2>
                                            <hr>
                                            <a href="kategori_buku.php" class="btn btn-dark btn-sm">Lihat Data</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="card">
                                        <?php
                                        include '../koneksi.php';
                                        $dp = mysqli_query($koneksi, "SELECT COUNT(*) total FROM user WHERE level = 3");
                                        $a = mysqli_fetch_assoc($dp);
                                        ?>
                                        <div class="card-body bg-danger-subtle text-center">
                                            <h3>Member</h3>
                                            <h2><?php echo $a['total']; ?></h2>
                                            <hr>
                                            <a href="member.php" class="btn btn-dark btn-sm">Lihat Data</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="card">
                                        <?php
                                        include '../koneksi.php';
                                        $dp = mysqli_query($koneksi, "SELECT COUNT(*) total FROM peminjaman");
                                        $b = mysqli_fetch_assoc($dp);
                                        ?>
                                        <div class="card-body bg-info-subtle text-center">
                                            <h3>Peminjaman</h3>
                                            <h2><?php echo $b['total']; ?></h2>
                                            <hr>
                                            <a href="generate.php" class="btn btn-dark btn-sm">Lihat Data</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- kartu -->
                            <div class="card mt-4">
                                <div class="card-body">
                                    <table class="table table-striped">
                                        <tr>
                                            <td width="200">Nama</td>
                                            <td width="1">:</td>
                                            <td><?php echo $_SESSION['username']; ?></td>
                                        </tr>
                                        <tr>
                                            <td width="200">Hak akses</td>
                                            <td width="1">:</td>
                                            <td><?php echo $_SESSION['level']; ?></td>
                                        </tr>
                                        <tr>
                                            <td width="200">Tanggal Login</td>
                                            <td width="1">:</td>
                                            <td><?php echo date('l, d M Y'); ?></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="../assets/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="../assets/js/sb-admin-2.min.js"></script>
</body>

</html>
