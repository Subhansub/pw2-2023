<?php
include '../../databases/koneksi.php';

if (isset($_POST['update'])) {
    if ($_POST['update'] == "add") {

        // var_dump($_POST);
        // die();
        $nama = $_POST['name'];

        $query = "INSERT INTO product_type VALUES (null, '$nama')";
        $sql = mysqli_query($koneksi, $query);
        if ($sql) {
            echo header("location:../produk_type.php");
        } else {
            echo $query;
        }
        // echo $kode . " | " . $nama . " | " . $hargajul . " | " . $hargabel . " | " . $stok . " | " . $minstok . " | " . $type . " | " . $restock;

        // echo " <br>tambah data <a href='../produk_table.php'>[home]<a>";
    } elseif ($_POST['update'] == "edit") {
        echo "edit data <a href='../produk_type.php'>[home]<a>";
        
        $id = $_POST['id'];
        $nama = $_POST['name'];


        $query = "UPDATE product_type SET name='$nama' WHERE id='$id';";
        $sql = mysqli_query($koneksi, $query);
        // var_dump($_POST);
        // die();
        if ($sql) {
            echo header("location:../produk_type.php");
        } else {
            echo $query;
        }
    }
}

if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    $query = "DELETE FROM product_type WHERE id = '$id';";
    $sql = mysqli_query($koneksi, $query);

    if ($sql) {
        echo header("location:../produk_table.php");
    } else {
        echo $query;
    }
    // echo "hapus data <a href='../produk_table.php'>[home]<a>";
}