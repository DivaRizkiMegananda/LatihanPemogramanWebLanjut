<?php
if (!isset($_GET["nama"])) {
  header("location: latihan7.php");
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman 2</title>
</head>

<body>

  <ul>
    <li><?= $_GET['nama']; ?></li>
    <li><?= $_GET['nim']; ?></li>
    <li><?= $_GET['jurusan']; ?></li>
  </ul>
  <a href="latihan7.php">kembali ke halaman 1</a>
</body>

</html>