<?php

//  Cek apakah sudah submit atau belum
if (isset($_POST['submit'])) {
  // jika sudah submit
  // cek username dan password admin
  if ($_POST['username'] == "admin" && $_POST['password'] == "123") {
    // redirect ke halaman admin
    header("Location: admin.php");
    exit;
  } else {
    // jika username dan password salah
    //tampilkan pesan kesalahan
    $status = true;
  }
}






?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan Login sederhana</title>
</head>

<body>

  <h1> Silahkan masukan data kalian</h1>

  <!-- menampilkan pesan salah -->
  <?php if (isset($status)) { ?>
    <p style="color: red; font-style: italic; font-size: large;"> Kata sandi atau password salah</p>
  <?php } ?>

  <form action="" method="POST">

    <label for="username">
      Username :
      <input type="text" name="username" id="username">
    </label>
    <br><br>
    <label for="password">
      Password :
      <input type="password" name="password" id="password">
    </label>
    <button type="submit" name="submit">GasPol</button>
  </form>

</body>

</html>