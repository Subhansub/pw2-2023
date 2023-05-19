<?php
include '../../databases/koneksi.php';

if (isset($_POST['update'])) {
    if ($_POST['update'] == "add") {

        // var_dump($_POST);
        // die();

        $order = $_POST['order_number'];
        $tanggal = $_POST['date'];
        $qty = $_POST['qty'];
        $total = $_POST['total_price'];
        $customer = $_POST['customer_id'];
        $produk = $_POST['product_id'];

        $query = "INSERT INTO `order` VALUES (null, '$order', '$tanggal', '$qty', '$total', '$customer', '$produk')";
        $sql = mysqli_query($koneksi, $query);
        if ($sql) {
            echo header("location:../order.php");
        } else {
            echo $query;
        }
        // echo $kode . " | " . $nama . " | " . $hargajul . " | " . $hargabel . " | " . $stok . " | " . $minstok . " | " . $type . " | " . $restock;

        // echo " <br>tambah data <a href='../produk_table.php'>[home]<a>";
    } elseif ($_POST['update'] == "edit") {
        echo "edit data <a href='../order.php'>[home]<a>";
        $id = $_POST['id'];
        $order = $_POST['order_number'];
        $tanggal = $_POST['date'];
        $qty = $_POST['qty'];
        $total = $_POST['total_price'];
        $customer = $_POST['customer_id'];
        $produk = $_POST['product_id'];


        $query = "UPDATE `order` SET  order_number='$order', date='$tanggal', qty='$qty', total_price='$total',   customer_id='$customer',   product_id='$produk' WHERE id='$id';";
        $sql = mysqli_query($koneksi, $query);
        // var_dump($_POST);
        // die();
        if ($sql) {
            echo header("location:../order.php");
        } else {
            echo $query;
        }
    }
}


if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    $query = "DELETE FROM `order` WHERE id = '$id';";
    $sql = mysqli_query($koneksi, $query);

    if ($sql) {
        echo header("location:../order.php");
    } else {
        echo $query;
    }
    // echo "hapus data <a href='../produk_table.php'>[home]<a>";
}
