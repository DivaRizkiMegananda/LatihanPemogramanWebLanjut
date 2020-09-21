<!-- Latihan array asosisatif -->
<!-- array asosiatif memiliki keys berupa string -->

<?php
$mahasiswa = [
  [
    "nama" => "Diva Rizki M",
    "nim" => "6701190027",
    "jurusan" => "Sistem Informasi"
  ],

  [
    "nama" => "Sela Pebriyanti",
    "nim" => "7623623626",
    "jurusan" => "Perpajakan"
  ]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan looping array </title>
</head>

<body>
  <h1> Looping Array Asosiatif </h1>
  <h2> Data Mahasiswa</h2>

  <!-- cara 1 buat banyak orang -->
  <?php foreach ($mahasiswa as $mhs) { ?>
    <ul>
      <li><?php echo $mhs["nama"] ?></li>
      <li><?php echo $mhs["nim"] ?></li>
      <li><?php echo $mhs["jurusan"] ?></li>
    </ul>
  <?php } ?>
</body>

</html>