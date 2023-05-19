<?php
    /* Task 1
    Buatlah array multidimensi yang berisi data buah
    seperti nama, warna, stok, harga dan deskripsi
    */
  $m_fruits = [
    ["id" => "1","name" => "Pepaya", "color" => "Hijau", "stock" => 18, "price" => 20000, "description" => "Menyehatan jantung"],
    ["id" => "2","name" => "Sirsak", "color" => "Putih", "stock" => 31, "price" => 15000, "description" => "Meningkatkan daya tahan tubuh"],
    ["id" => "3","name" => "Pisang", "color" => "Kuning", "stock" => 36, "price" => 17000, "description" => "Bisa menyediakan energi"],
    ["id" => "4","name" => "Rambuta", "color" => "Merah", "stock" => 53, "price" => 34000, "description" => "Membentuk dan menguatkan tulang"],
    ["id" => "5", "name" => "Semangka ", "color" => "Hijau", "stock" => 20, "price" => 13000, "description" => "Membantu hiderasi tubuh"],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Array Table Buah</title>
</head>
<body>
  <div class="container">
    <h1 class="text-center mt-5 mb-4">Daftar Buah</h1>
    <table class="table table-striped table-hover">
      <thead class="thead-dark">
        <tr>
          <th>ID</th>
          <th>Nama</th>
          <th>Warna</th>
          <th>Stok</th>
          <th>Harga</th>
          <th>Deskripsi</th>
        </tr>
      </thead>
        
      <tbody class="bg1">
       <?php
      //table buah//
      foreach ($m_fruits as $fruit) {
        echo  "<tr>";
        echo "<th>".$fruit["id"]."</th>";
        echo "<th>".$fruit["name"]."</th>";
        echo "<th>".$fruit["color"]."</th>";
        echo "<th>".$fruit["stock"]."</th>";
        echo "<th>".$fruit["price"]."</th>";
        echo "<th>".$fruit["description"]."</th>";
        echo "</tr>";
      }
      
        ?>
      </tbody>
    </table>
  </div>
</body>
</html>