<?php
include '../databases/koneksi.php';

$query = "SELECT * FROM restock";
$sql = mysqli_query($koneksi, $query);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Restock</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.html">Start Bootstrap</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Settings</a></li>
                    <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="#!">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link" href="../index.php">
                            <div class="sb-nav-link-icon text-primary"><i class="fa fa-cube" aria-hidden="true"></i></div>
                            Home
                        </a>
                        <a class="nav-link" href="produk_type.php">
                            <div class="sb-nav-link-icon"><i class="fa fa-cube" aria-hidden="true"></i></div>

                            Produk Type
                        </a>
                        <a class="nav-link" href="produk_table.php">
                            <div class="sb-nav-link-icon"><i class="fa fa-shopping-basket" aria-hidden="true"></i></div>
                            Produk
                        </a>
                        <a class="nav-link" href="restock.php">
                            <div class="sb-nav-link-icon"><i class="fa fa-barcode" aria-hidden="true"></i></div>
                            Restock
                        </a>
                        <a class="nav-link" href="supplier.php">
                            <div class="sb-nav-link-icon"><i class="fa fa-cubes" aria-hidden="true"></i></div>
                            Sepplier
                        </a>
                        <a class="nav-link" href="order.php">
                            <div class="sb-nav-link-icon"><i class="fa fa-shopping-cart" aria-hidden="true"></i></div>
                            Order
                        </a>
                        <a class="nav-link" href="customer.php">
                            <div class="sb-nav-link-icon"><i class="fa fa-child" aria-hidden="true"></i></div>
                            Customer
                        </a>
                        <a class="nav-link" href="card.php">
                            <div class="sb-nav-link-icon"><i class="fa fa-credit-card-alt" aria-hidden="true"></i></div>
                            Card
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    Start Bootstrap
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Table Restock</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Stok</li>
                    </ol>
                    <div class="card mb-4">
                        <div class="card-header">
                            <a href="tambah_restock/tambah_res.php?tambah" class="btn btn-success"><i class="fas fa-table me-1"></i>
                                TAMBAH TABLE</a>
                        </div>
                        <div class="card-body">
                            <table class="table table-border table-hover">
                                <thead class="bg-dark text-white text-center">
                                    <tr>
                                        <th>No</th>
                                        <th>Kode</th>
                                        <th>Data</th>
                                        <th>Jumlah</th>
                                        <th>Harga</th>
                                        <th>ID Pemasok</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    <?php
                                    $nomor = 1;
                                    while ($tabel = mysqli_fetch_assoc($sql)) {
                                    ?>
                                        <tr>
                                            <td><?= $nomor ?></td>
                                            <td><?= $tabel['restock_number']?></td>
                                            <td><?= $tabel['date']?></td>
                                            <td><?= $tabel['qty']?></td>
                                            <td><?= $tabel['price']?></td>
                                            <td><?= $tabel['supplier_id']?></td>
                                            <td>
                                                <a href="tambah_restock/view.php?view=<?= $tabel['id']?>" type=" button" class="btn btn-success btn-sm">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                    View
                                                </a>
                                                <a href="tambah_restock/tambah_res.php?edit=<?=$tabel['id']?>" type=" button" class="btn btn-success btn-sm">
                                                    <i class="fa fa-paint-brush" aria-hidden="true"></i>
                                                    Edit
                                                </a>
                                                <a href="tambah_restock/proses_res.php?hapus=<?= $tabel['id']?>" type="button" class="btn btn-danger btn-sm" onClick="return confirm('apakah anda yakin ingin menghapus data???')">
                                                    <i class="fa fa-trash"></i>
                                                    Hapus
                                                </a>
                                            </td>
                                        </tr>
                                    <?php
                                        $nomor++;
                                    }

                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2023</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>
</html>