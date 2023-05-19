<?php
    include_once 'header.php';
?> 

<div class="container">
<form method="POST" action="">
  <h2>Data Mahasiswa</h2>
  <table class="table">
      <thead>
          <tr>
              <th>No</th>
              <th>Nama Lengkap</th>
              <th>Mata Kuliah</th>
              <th>UTS</th>
              <th>UAS</th>
              <th>Tugas</th>
              <th>Rerata</th>
              <th>Grade</th>
              <th>Predikat</th>
              <th>Keterangan</th>
          </tr>
      </thead>
      <tbody>
          <tr>
              <td>1</td>
              <td>Fakhirul</td>
              <td>Statistika dan Probabilitas</td>
              <td>89</td>
              <td>95</td>
              <td>80</td>
              <td>87.95</td>
              <td>A</td>
              <td>Sangat Memuaskan</td>
              <td>Lulus</td>
          </tr>
          <tr>
              <td>2</td>
              <td>Rul</td>
              <td>Statistika dan Probabilitas</td>
              <td>78</td>
              <td>81</td>
              <td>80</td>
              <td>79.75</td>
              <td>B</td>
              <td>Memuaskan</td>
              <td>Lulus</td>
          </tr>

			<?php
            require 'libfungsi.php';
            
            $no = 3;
            $nama = $_POST['nama_lengkap'];
            $matkul = $_POST['matkul'];
            $uts = $_POST['nilai_uts'];
            $uas = $_POST['nilai_uas'];
            $tugas = $_POST['nilai_tugas'];
            $rerata = ($uts + $uas + $tugas) / 3;
            $lulus = kelulusan($uts, $uas, $tugas);
            $grade = grade($rerata);
            $predikat = predikat($lulus, $rerata);
            $keterangan = keterangan($grade);
            echo "<tr>
                    <td>" . $no . "</td>
                    <td>" . $nama . "</td>
                    <td>" . $matkul . "</td>
                    <td>" . $uts . "</td>
                    <td>" . $uas . "</td>
                    <td>" . $tugas . "</td>
                    <td>" . $rerata . "</td>
                    <td>" . $grade . "</td>
                    <td>" . $predikat . "</td>
                    <td>" . $keterangan . "</td>
                  </tr>";
            ?>
      </tbody>
  </table>
</div>

<?php
    include_once 'footer.php';
?>	