<?php
        $host='localhost';
        $user='root';
        $pass='';
        $db  ='dblearningtools';

        $koneksi = mysqli_connect($host, $user, $pass, $db);
        mysqli_select_db($koneksi, $db);
?>