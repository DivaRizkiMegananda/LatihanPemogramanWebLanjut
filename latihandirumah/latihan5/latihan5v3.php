<!-- latihan looping menggunakan array numerik tapi lebih tepat pake array asosiatif
-->
<?php

$mahasiswa = [
  ["Diva Rizki M", "6701190027", "Sistem Informasi"],
  ["Sela Pebriyanti", "7623623626", "Perpajakan"]
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
  <h1> Looping array numerik </h1>
  <h2> Data Mahasiswa</h2>

  <!-- cara 1 buat banyak orang -->
  <?php foreach ($mahasiswa as $mhs) { ?>
    <ul>
      <li><?php echo $mhs[0] ?></li>
      <li><?php echo $mhs[1] ?></li>
      <li><?php echo $mhs[2] ?></li>
    </ul>
  <?php } ?>
</body>

</html>