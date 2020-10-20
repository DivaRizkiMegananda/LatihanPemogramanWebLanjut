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

// var_dump($_GET);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan 7 GET</title>
</head>

<body>

  <table border="3">
    <tr>
      <td> <?php echo $mahasiswa[0]["nama"]; ?></td>
      <td> ayam</td>
      <td> bebek</td>
    </tr>

    <tr>
      <td> sapi</td>
      <td> kambing</td>
      <td> kelinci</td>
    </tr>
  </table>



  <ul>
    <?php foreach ($mahasiswa as $mhs) : ?>

      <li>
        <a href="latihan7v2.php?nama=<?= $mhs['nama']; ?>&nim=<?= $mhs['nim']; ?>&jurusan=<?= $mhs['jurusan']; ?>"><?= $mhs['nama']; ?></a>
      </li>

    <?php endforeach; ?>
  </ul>
</body>

</html>