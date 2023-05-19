<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai Siswa</title>
</head>
<body>
    
    <?php

        //variabel untuk nampung data
        $name = $_POST['nama_lengkap'];
        $matkul = $_POST['matkul'];
        $uts = $_POST['nilai_uts'];
        $uas = $_POST['nilai_uas'];
        $tugas = $_POST['nilai_tugas'];

        $total = ($uts * 0.3) + ($uas * 0.35) + ($tugas * 0.35);

        //tampilan data dari variabel
        echo '<br>Nama Siswa : ' . $name;
        echo '<br>Nata kuliah : ' . $matkul;
        echo '<br>Nilai UTS : ' . $uts;
        echo '<br>Nilai UAS : ' . $uas;
        echo '<br>Nilai Tugas : ' . $tugas;
        echo '<hr>';
        echo 'Total Nilai : ' . $total;
        echo '<hr>';

    ?>

</body>
</html>