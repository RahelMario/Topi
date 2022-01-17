<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pembayaran</title>

    <link rel="icon" type="image/x-icon" href="assets/img/favicon.png">
    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-20">
                    <i class="fab fa-hornbill"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Mie Yummy</div>
            </a>
            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('user/index'); ?>">
                    <i class="fas  fa-fw fa-home"></i>
                    <span>Home</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('user/menu') ?>">
                    <i class="fas fa-fw fa-list-ul"></i>
                    <span>Menu</span></a>
            </li>
            <hr class="sidebar-divider">
            <!-- Heading -->
            <div class="sidebar-heading">
                Sub Menu
            </div>

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('user/makanan') ?>">
                    <i class="fas fa-fw fa-food"></i>
                    <span>Makanan</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('user/minuman') ?>">
                    <i class="fas fa-fw fa-bottle"></i>
                    <span>Minuman</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('user/topping') ?>">
                    <i class="fas fa-fw fa-bottle"></i>
                    <span>Topping</span></a>
            </li>

            <hr class="sidebar-divider">

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('auth/logout'); ?>">
                    <i class="fas fa-fw fa-sign-out-alt"></i>
                    <span>Logout</span></a>
            </li>
            <hr class="sidebar-divider">

            <li class="nav-item">
                <a class="nav-link" href="">
                    <span style="font-size: 17px; ">About</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <footer class="sticky-footer bg-auto">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Kel 6 2021</span>
                    </div>
                </div>
            </footer>

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

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $user['name'] ?></span>
                                <img class="img-profile rounded-circle" src="<?= base_url('assets/img/') . $user['image']; ?>">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="<?= base_url('user/editp'); ?>">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?= base_url('auth/logout'); ?>" data-toggle="modal" data-target="#logoutModal">
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
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <div class="btn btn-sm btn-success">
                                <?php $grand_total = 0;
                                if ($order = $this->cart->contents()) {
                                    foreach ($order as $item) {
                                        $grand_total = $grand_total + $item['subtotal'];
                                    }
                                    echo "<h3>Total Pesanan Anda: Rp. " . number_format($grand_total, 0, ',', '.');
                                ?>
                            </div><br><br>
                            <h3>Input Alamat Rumah Anda</h3>
                            <form method="post" action="<?= base_url('User/proses_pesan') ?>">
                                <div class="form-group">
                                    <label>Nama Lengkap</label>
                                    <input type="text" name="nama" placeholder="Nama Lengkap Anda" class="form-control" value="<?= $user['name'] ?>">
                                </div>
                                <div class="form-group">
                                    <label>Alamat Lengkap</label>
                                    <input type="text" name="alamat" placeholder="Alamat Lengkap Anda" class="form-control" value="<?= $user['address'] ?>">
                                </div>
                                <div class="form-group">
                                    <label>No. Telepon</label>
                                    <input type="text" name="no_tlp" placeholder="Nomor Telepon Anda" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Jasa Pengiriman</label>
                                    <select class="form-control">
                                        <option>Grab</option>
                                        <option>Gojek</option>
                                        <option>ShopeeFood</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Metode Pembayaran</label>
                                    <select class="form-control">
                                        <option>Dana</option>
                                        <option>Ovo</option>
                                        <option>GoPay</option>
                                        <option>ShopeePay</option>
                                        <option>BCA - XXXXXXX</option>
                                        <option>BRI - XXXXXXX</option>
                                        <option>MANDIRI - XXXXXXX</option>
                                        <option>Ginjal</option>

                                    </select>
                                </div>
                                <a href="<?= base_url('User/detail_order') ?>">
                                    <div class="btn btn-sm btn-danger mt-2">Batal</div>
                                    <button type="submit" class="btn btn-sm btn-primary mt-2">Pesan</button>
                            </form>
                        <?php
                                } else {
                                    echo "<h4>Anda belum Memesan Apapaun";
                                }
                        ?>
                        </div>

                        <div class="col-md-2"></div>
                    </div>

                </div>
            </div>



        </div>
        <!-- End of Footer -->

        <!-- End of Content Wrapper -->

        <!-- End of Page Wrapper -->
        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Yakin Mau Logout? Pesen Aja Belom.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="<?= base_url('auth/logout'); ?>">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>

</body>

</html>