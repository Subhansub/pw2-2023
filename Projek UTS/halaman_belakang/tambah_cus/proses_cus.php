<?php
include '../../databases/koneksi.php';

if (isset($_POST['update'])) {
    if ($_POST['update'] == "add") {

        // var_dump($_POST);
        // die();

        $nama = $_POST['name'];
        $gender = $_POST['gender'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $card = $_POST['card_id'];

        $query = "INSERT INTO customer VALUES (null, '$nama', '$gender', '$phone', '$email', '$address', '$card')";
        $sql = mysqli_query($koneksi, $query);
        if ($sql) {
            echo header("location:../customer.php");
        } else {
            echo $query;
        }
        // echo $kode . " | " . $nama . " | " . $hargajul . " | " . $hargabel . " | " . $stok . " | " . $minstok . " | " . $type . " | " . $restock;

        // echo " <br>tambah data <a href='../produk_table.php'>[home]<a>";
    } elseif ($_POST['update'] == "edit") {
        // var_dump($_POST);
        // die();
        $id = $_POST['id'];
        $nama = $_POST['name'];
        $gender = $_POST['gender'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $card = $_POST['card_id'];

        $query = "UPDATE customer SET name='$nama', gender='$gender', phone='$phone', email='$email', address='$address', card_id='$card' WHERE id='$id';";
        $sql = mysqli_query($koneksi, $query);
        if ($sql) {
            echo header("location:../customer.php");
        } else $query;
    }
}
if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    $query = "DELETE FROM customer WHERE id = '$id';";
    $sql = mysqli_query($koneksi, $query);

    if ($sql) {
        echo header("location:../customer.php");
    } else {
        echo $query;
    }
    // echo "hapus data <a href='../produk_table.php'>[home]<a>";
}
