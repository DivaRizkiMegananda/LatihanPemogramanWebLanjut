<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan POST</title>
</head>

<body>
  <?php if (isset($_POST['fname'])) { ?>
    <h1> hiii kamu tebak aku pasti <?= $_POST['fname']; ?></h1>
  <?php } ?>
  <form action="" method="POST">
    <center>
      <label for="fname">Masukin Nama Depan </label>
      <input type="text" name="fname">
      <br><br>
      <label for="lname">Masukan Nama Belakang </label>
      <input type="text" name="lname">
      <br><br>
      <button type="submit" name="submit">Submit Disini</button>
    </center>
  </form>
</body>

</html>