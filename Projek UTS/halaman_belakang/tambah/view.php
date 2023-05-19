<?php
include '../../databases/koneksi.php';

if (isset($_GET['view'])) {
    $id = $_GET['view'];
    $query = "SELECT * FROM product WHERE id = '$id';";
    $sql = mysqli_query($koneksi, $query);

    $result = mysqli_fetch_assoc($sql);



    // var_dump($result);
    // die();

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Produk</title>
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</head>

<body class="bg-success">
    <div class="container-fluid">
        <div class="row">
		<div class="col-md-12 bg-dark">
			<nav class="navbar navbar-light bg-dark ">
				<a class="navbar-brand text-white" href="#">
					<img src="../../img/46.png" width="30" height="30" class="d-inline-block align-top " alt="">
					Nahushop
				</a>
                <h5 class="text-white">Detail Produk</h5>
				<ul class="nav justify-content-center">
					<li class="nav-item">
						<h6><a class="nav-link  text-warning" href="../../halaman_belakang/pesanan.php?tambah">Pesanan</a></h6>
					</li>
					<li class="nav-item">
						<h6><a class="nav-link  text-warning" href="../../halaman_belakang/lihatpesanan.php?tambah">Lihat Pesanan</a></h6>
					</li>
					<li class="nav-item ">
						<h6><a class="nav-link active text-warning" href="../../halaman_belakang/produk_table.php">Kembali</a></h6>
					</li>
					<li class="nav-item">
				</ul>
			</nav>
			<h1></h1>
		</div>
            <div class="col-md-3 text-white">
            </div>
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header text-white bg-primary text-center">
                        <h2>View Produk</h2>
                    </div>
                    <div class="border card-body">
                        <table class="table border">
                        <tr>
                            <td>Kode</td>
                            <td><?= $result['sku'] ?></td>
                        </tr><br>
                        <tr>
                            <td>Nama</td>
                            <td><?= $result['name'] ?></td>
                        </tr>
                        <tr>
                            <td>Harga Beli</td>
                            <td><?= $result['purchase_price'] ?></td>
                        </tr>
                        <tr>
                            <td>Harga Jual</td>
                            <td><?= $result['sell_price'] ?></td>
                        </tr>
                        <tr>
                            <td>Stok</td>
                            <td><?= $result['stock'] ?></td>
                        </tr>
                        <tr>
                            <td>Min Stok</td>
                            <td><?= $result['min_stock'] ?></td>
                        </tr>
                        <tr>
                            <td>Jenis Produk</td>
                            <td><?= $result['product_type_id'] ?></td>
                        </tr>
                        <tr>
                            <td>Restock id</td><td><?= $result['restock_id'] ?></td>
                        </tr>
                        </table>
                    </div>
                    <div class="card-footer bg-light text-center">
                        2 days ago
                    </div>
                </div>
            </div>
        </div>
    </div><br>
</body>
</html>