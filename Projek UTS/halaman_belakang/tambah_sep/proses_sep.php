<?php
include '../../databases/koneksi.php';

if (isset($_POST['update'])) {
    if ($_POST['update'] == "add") {

        // var_dump($_POST);
        // die();

        $nama = $_POST['name'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $con = $_POST['contact_name'];

        $query = "INSERT INTO supplier VALUES (null, '$nama', '$phone', '$address', '$con')";
        $sql = mysqli_query($koneksi, $query);
        if ($sql) {
            echo header("location:../supplier.php");
        } else {
            echo $query;
        }
        // echo $kode . " | " . $nama . " | " . $hargajul . " | " . $hargabel . " | " . $stok . " | " . $minstok . " | " . $type . " | " . $restock;

        // echo " <br>tambah data <a href='../produk_table.php'>[home]<a>";
    } elseif ($_POST['update'] == "edit") {
        echo "edit data <a href='../produk_table.php'>[home]<a>";

        $id = $_POST['id'];
        $nama = $_POST['name'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $con = $_POST['contact_name'];


        $query = "UPDATE supplier SET name='$nama', phone='$phone', address='$address', contact_name='$con' WHERE id='$id';";
        $sql = mysqli_query($koneksi, $query);
        // var_dump($_POST);
        // die();
        if ($sql) {
            echo header("location:../supplier.php");
        } else {
            echo $query;
        }
    }
}

if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    $query = "DELETE FROM supplier WHERE id = '$id';";
    $sql = mysqli_query($koneksi, $query);

    if ($sql) {
        echo header("location:../supplier.php");
    } else {
        echo $query;
    }
    // echo "hapus data <a href='../produk_table.php'>[home]<a>";
}

