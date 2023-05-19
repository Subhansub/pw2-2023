<?php
include '../../databases/koneksi.php';

if (isset($_POST['update'])) {
    if ($_POST['update'] == "add") {

        // var_dump($_POST);
        // die();

        $kode = $_POST['sku'];
        $nama = $_POST['name'];
        $hargajul = $_POST['purchase_price'];
        $hargabel = $_POST['sell_price'];
        $stok = $_POST['stock'];
        $minstok = $_POST['min_stock'];
        $type = $_POST['product_type_id'];
        $restock = $_POST['restock_id'];

        $query = "INSERT INTO product VALUES (null, '$kode', '$nama', '$hargajul', '$hargabel', '$stok', '$minstok', '$type', '$restock')";
        $sql = mysqli_query($koneksi, $query);
        if ($sql) {
            echo header("location:../produk_table.php");
        } else {
            echo $query;
        }
        // echo $kode . " | " . $nama . " | " . $hargajul . " | " . $hargabel . " | " . $stok . " | " . $minstok . " | " . $type . " | " . $restock;

        // echo " <br>tambah data <a href='../produk_table.php'>[home]<a>";
    } elseif ($_POST['update'] == "edit") {
        echo "edit data <a href='../produk_table.php'>[home]<a>";

        $id = $_POST['id'];
        $kode = $_POST['sku'];
        $nama = $_POST['name'];
        $hargajul = $_POST['purchase_price'];
        $hargabel = $_POST['sell_price'];
        $stok = $_POST['stock'];
        $minstok = $_POST['min_stock'];
        $type = $_POST['product_type_id'];
        $restock = $_POST['restock_id'];

        $query = "UPDATE product SET sku='$kode', name='$nama', purchase_price='$hargajul', sell_price='$hargabel', stock='$stok', min_stock='$minstok', product_type_id='$type', restock_id='$restock' WHERE id='$id';";
        $sql = mysqli_query($koneksi, $query);
        // var_dump($_POST);
        // die();
        if ($sql) {
            echo header("location:../produk_table.php");
        } else {
            echo $query;
        }
    }
}

if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    $query = "DELETE FROM product WHERE id = '$id';";
    $sql = mysqli_query($koneksi, $query);

    if ($sql) {
        echo header("location:../produk_table.php");
    } else {
        echo $query;
    }
    // echo "hapus data <a href='../produk_table.php'>[home]<a>";
}
