<?php
include '../../databases/koneksi.php';

// tambah data
$id = '';
$nama = '';
$phone = '';
$address = '';
$con = '';

// edit data
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $query = "SELECT * FROM supplier WHERE id = '$id';";
    $sql = mysqli_query($koneksi, $query);

    $result = mysqli_fetch_assoc($sql);

    $nama = $result['name'];
    $phone = $result['phone'];
    $address = $result['address'];
    $con = $result['contact_name'];


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
    <title>From Seppler</title>
    <!-- css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
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
                <h3>UPDATE PRODUK</h3>
            </div>
        </div>
    <?php
    }
    ?><br><br>

    <div class="container mt-4">
        <div class="card">
            <h5 class="card-header text-white bg-dark text-center">Featured</h5>
            <div class="card-body bg-light">
                <form method="POST" action="proses_sep.php">
                    <input type="hidden" value="<?= $id ?>" name="id">
                    <div class="form-group row">
                        <label for="name" class="col-4 col-form-label">Nama</label>
                        <div class="col-8">
                            <input id="name" value="<?= $nama ?>" name="name" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="phone" class="col-4 col-form-label">Phone</label>
                        <div class="col-8">
                            <input id="phone" value="<?= $phone ?>" name="phone" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="address" class="col-4 col-form-label">Alamat</label>
                        <div class="col-8">
                            <input id="address"  value="<?= $address ?>" name="address" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="contact_name" class="col-4 col-form-label">Nama Kontak</label>
                        <div class="col-8">
                            <input id="contact_name" value="<?= $con ?>" name="contact_name" type="text" class="form-control">
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