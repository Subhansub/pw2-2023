<?php
include '../../databases/koneksi.php';

// tambah data
$id = '';
$nama = '';
$gender = '';
$phone = '';
$email = '';
$address = '';
$card = '';

// edit data
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $query = "SELECT * FROM customer WHERE id = '$id';";
    $sql = mysqli_query($koneksi, $query);

    $result = mysqli_fetch_assoc($sql);

    $nama = $result['name'];
    $gender = $result['gender'];
    $phone = $result['phone'];
    $email = $result['email'];
    $address = $result['address'];
    $card = $result['card_id'];




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
    <title>From Customer</title>
    <!-- css -->
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
    ?>
    <div class="container mt-4">
        <div class="card">
            <h5 class="card-header text-white bg-dark text-center">Featured</h5>
            <div class="card-body bg-light">
                <form method="POST" action="proses_cus.php">
                    <input type="hidden" value="<?= $id ?>" name="id">
                    <div class="form-group row">
                        <label for="name" class="col-4 col-form-label">Nama</label>
                        <div class="col-8">
                            <input id="name" value="<?= $nama ?>" name="name" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="gender" class="col-4 col-form-label">Gender</label>
                        <div class="col-8">
                            <select id="gender" value="<?= $gender ?>" name="gender" class="custom-select">
                                <option value="L">Laki-Laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="phone" class="col-4 col-form-label">Phone</label>
                        <div class="col-8">
                            <input id="phone" value="<?= $phone ?>" name="phone" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-4 col-form-label">Email</label>
                        <div class="col-8">
                            <input id="email" value="<?= $email ?>" name="email" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="address" class="col-4 col-form-label">Alamat</label>
                        <div class="col-8">
                            <input id="address" value="<?= $address ?>" name="address" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="card_id" class="col-4 col-form-label">Kartu</label>
                        <div class="col-8">
                            <input id="card_id" value="<?= $card ?>" name="card_id" type="text" class="form-control">
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