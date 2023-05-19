<?php
include '../../databases/koneksi.php';

if (isset($_POST['update'])) {
    if ($_POST['update'] == "add") {

        // var_dump($_POST);
        // die();

        $kode = $_POST['code'];
        $nama = $_POST['name'];
        $dis = $_POST['discount'];
        $member = $_POST['member_fee'];
    

        $query = "INSERT INTO `card` VALUES (null, '$kode', '$nama', '$dis', '$member')";
        $sql = mysqli_query($koneksi, $query);
        if ($sql) {
            echo header("location:../card.php");
        } else {
            echo $query;
        }
        // echo $kode . " | " . $nama . " | " . $hargajul . " | " . $hargabel . " | " . $stok . " | " . $minstok . " | " . $type . " | " . $restock;

        // echo " <br>tambah data <a href='../produk_table.php'>[home]<a>";
    } elseif ($_POST['update'] == "edit") {
        echo "edit data <a href='../card.php'>[home]<a>";

        $id = $_POST['id'];
        $kode = $_POST['code'];
        $nama = $_POST['name'];
        $dis = $_POST['discount'];
        $member = $_POST['member_fee'];
        $query = "UPDATE `card` SET code='$kode', name='$nama', discount='$di', member_fee='$member' WHERE id='$id';";
        $sql = mysqli_query($koneksi, $query);
        // var_dump($_POST);
        // die();
        if ($sql) {
            echo header("location:../card.php");
        } else {
            echo $query;
        }
    }
}

if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    $query = "DELETE FROM `card` WHERE id = '$id';";
    $sql = mysqli_query($koneksi, $query);

    if ($sql) {
        echo header("location:../card.php");
    } else {
        echo $query;
    }
    // echo "hapus data <a href='../produk_table.php'>[home]<a>";
}
