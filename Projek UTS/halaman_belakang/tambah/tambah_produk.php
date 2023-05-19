<!DOCTYPE html>

<!-- edit -->
<?php
include '../../databases/koneksi.php';

// tambah data
$id = '';
$kode = '';
$nama = '';
$hargajul = '';
$hargabel = '';
$stok = '';
$min = '';
$type = '';
$restok = '';

// edit data
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $query = "SELECT * FROM product WHERE id = '$id';";
    $sql = mysqli_query($koneksi, $query);

    $result = mysqli_fetch_assoc($sql);

    $kode = $result['sku'];
    $nama = $result['name'];
    $hargajul = $result['purchase_price'];
    $hargabel = $result['sell_price'];
    $stok = $result['stock'];
    $min = $result['min_stock'];
    $type = $result['product_type_id'];
    $restok = $result['restock_id'];



    // var_dump($result);
    // die();

}

?>



<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>from_tambah</title>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <!-- css bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="bg-secondary">
    <?php
    if (isset($_GET['tambah'])) {
    ?>
        <div class="row">
            <div class="col-3 bg-white text-center">
                <h3>Tambah Produk</h3>
            </div>
        </div>
    <?php
    } else {
    ?>
        <div class="row">
            <div class="col-3 bg-white text-center">
                <h3>Update Produk</h3>
            </div>
        </div>
    <?php
    }
    ?>


    <div class="container mt-4">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <div class="card">
                    <h5 class="card-header text-white bg-dark text-center">Featured</h5>
                    <div class="card-body bg-light">
                        <form method="POST" action="proses_produk.php">
                            <input type="hidden" value="<?= $id ?>" name="id">
                            <div class="form-group row">
                                <label for="sku" class="col-4 col-form-label">Kode</label>
                                <div class="col-8">
                                    <input value="<?= $kode ?>" id="sku" name="sku" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-4 col-form-label">Nama</label>
                                <div class="col-8">
                                    <input value="<?= $nama ?>" id="name" name="name" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="purchase_price" class="col-4 col-form-label">Harga Beli</label>
                                <div class="col-8">
                                    <input value="<?= $hargajul ?>" id="purchase_price" name="purchase_price" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="sell_price" class="col-4 col-form-label">Harga Jual</label>
                                <div class="col-8">
                                    <input value="<?= $hargabel ?>" id="sell_price" name="sell_price" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="stock" class="col-4 col-form-label">Stok</label>
                                <div class="col-8">
                                    <input value="<?= $stok ?>" id="stock" name="stock" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="min_stock" class="col-4 col-form-label">Min Stok</label>
                                <div class="col-8">
                                    <input value="<?= $min ?>" id="min_stock" name="min_stock" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="product_type_id" class="col-4 col-form-label">Jenis Produk</label>
                                <div class="col-8">
                                    <input value="<?= $type ?>" id="product_type_id" name="product_type_id" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="restock_id" class="col-4 col-form-label">Restock Id</label>
                                <div class="col-8">
                                    <input value="<?= $restok ?>" id="restock_id" name="restock_id" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="offset-4 col-8">
                                    <?php
                                    if (isset($_GET['edit'])) {

                                    ?>
                                        <button name="update" value="edit" type="submit" class="btn btn-success">
                                            <i class="fa fa-plus" aria-hidden="true"></i>UPDATE DATE
                                        </button>
                                    <?php
                                    } else {
                                    ?>
                                        <button name="update" value="add" type="submit" class="btn btn-success">
                                            <i class="fa fa-plus" aria-hidden="true"></i>Tambah
                                        </button>
                                    <?php
                                    }
                                    ?>
                                    <button name="reset" type="submit" class="btn btn-danger">
                                        <i class="fa fa-refresh" aria-hidden="true"></i>Reset
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-2"></div>
        </div>
    </div>
</body>
</html>