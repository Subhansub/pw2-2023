<?php
include '../../databases/koneksi.php';

// tambah data
$id         = '';
$order      = '';
$tanggal    = '';
$qty        = '';
$total      = '';
$customer   = '';
$produk     = '';


// edit data
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $query = "SELECT * FROM `order` WHERE id = '$id';";
    $sql = mysqli_query($koneksi, $query);

    $result = mysqli_fetch_assoc($sql);

    $id = $result['id'];
    $order = $result['order_number'];
    $tanggal = $result['date'];
    $qty = $result['qty'];
    $total = $result['total_price'];
    $customer = $result['customer_id'];
    $produk = $result['product_id'];



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
    <title>From Order</title>

    <!-- css -->
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
            <div class="col-3 text-center bg-white">
                <h3>Tambah Produk</h3>
            </div>
        </div>
    <?php
    } else {
    ?>
        <div class="row">
            <div class="col-3 text-center bg-white">
                <h3>UPDATE PRODUK</h3>
            </div>
        </div>
    <?php
    }
    ?><br><br>

    
    <div class="container">
        <div class="card">
            <h5 class="card-header text-white bg-dark text-center">Featured</h5>
            <div class="card-body bg-light">
                <form method="POST" action="proses_order.php">
                    <input type="hidden" value="<?= $id ?>" name="id">
                    <div class="form-group row">
                        <label for="order Number" class="col-4 col-form-label">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Kode</font>
                            </font>
                        </label>
                        <div class="col-8">
                            <input id="order_number" value="<?= $order ?>" name="order_number" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="date" class="col-4 col-form-label">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Data</font>
                            </font>
                        </label>
                        <div class="col-8">
                            <input id="date" value="<?= $tanggal ?>" name="date" type="date" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="qty" class="col-4 col-form-label">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Jumlah</font>
                            </font>
                        </label>
                        <div class="col-8">
                            <input id="qty" value="<?= $qty ?>" name="qty" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="total price" class="col-4 col-form-label">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Total Harga</font>
                            </font>
                        </label>
                        <div class="col-8">
                            <input id="total_price" value="<?= $total ?>" name="total_price" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="customer_id" class="col-4 col-form-label">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">ID Pelanggan</font>
                            </font>
                        </label>
                        <div class="col-8">
                            <input id="customer_id" value="<?= $customer ?>" name="customer_id" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="produk_id" class="col-4 col-form-label">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">ID Produk</font>
                            </font>
                        </label>
                        <div class="col-8">
                            <input id="produk_id" value="<?= $produk ?>" name="product_id" type="text" class="form-control">
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
</body>
</html>