<?php
include '../../databases/koneksi.php';

if (isset($_POST['update'])) {
    if ($_POST['update'] == "add") {

        // var_dump($_POST);
        // die();

        $nama = $_POST['restock_number'];
        $date = $_POST['date'];
        $qty = $_POST['qty'];
        $price = $_POST['price'];
        $sup = $_POST['supplier_id'];

        $query = "INSERT INTO restock VALUES (null, '$nama', '$date', '$qty', '$price', '$sup')";
        $sql = mysqli_query($koneksi, $query);
        if ($sql) {
            echo header("location:../restock.php");
        } else {
            echo $query;
        }
        // echo $kode . " | " . $nama . " | " . $hargajul . " | " . $hargabel . " | " . $stok . " | " . $minstok . " | " . $type . " | " . $restock;

        // echo " <br>tambah data <a href='../produk_table.php'>[home]<a>";
    } elseif ($_POST['update'] == "edit") {
        echo "edit data <a href='../produk_table.php'>[home]<a>";

        $id = $_POST['id'];
        $nama = $_POST['restock_number'];
        $date = $_POST['date'];
        $qty = $_POST['qty'];
        $price = $_POST['price'];
        $sup = $_POST['supplier_id'];

        $query = "UPDATE restock SET restock_number='$nama', date='$date', qty='$qty', price='$price', supplier_id='$sup' WHERE id='$id';";
        $sql = mysqli_query($koneksi, $query);
        // var_dump($_POST);
        // die();
        if ($sql) {
            echo header("location:../restock.php");
        } else {
            echo $query;
        }
    }
}

if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    $query = "DELETE FROM restock WHERE id = '$id';";
    $sql = mysqli_query($koneksi, $query);

    if ($sql) {
        echo header("location:../restock.php");
    } else {
        echo $query;
    }
    // echo "hapus data <a href='../produk_table.php'>[home]<a>";
}
