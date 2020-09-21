<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan fungsi</title>
</head>

<body>

  <?php
  function salam($nama = "admin", $waktu = "datang")
  {
    return "Selamat $waktu, $nama";
  }
  ?>
  <h1>
    <?php
    echo salam("Diva", "siang");
    ?>
  </h1>
</body>

</html>