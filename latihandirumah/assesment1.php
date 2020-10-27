<?php

$laptop = array(
  array(
    'merek' => 'Apple',
    'ram' => '8',
    'harddisk'   => '512',
    'usb_type_c' => TRUE,
    'harga' => 20000000
  ),

  array(
    'merek' => 'Asus',
    'ram' => 16,
    'harddisk' => 512,
    'usb_type_c' => FALSE,
    'harga' => 18000000
  ),

  array(
    'merek' => 'Lenovo',
    'ram' => 8,
    'harddisk'   => 256,
    'usb_type_c' => TRUE,
    'harga' => 8000000
  ),
);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Assesment 1</title>
</head>

<body>
  <form action="" method="POST">
    <label for="tinggi"> Range Atas :
      <input type="text" name="tinggi" id="tinggi">
    </label>
    <br> <br>
    <label for="rendah"> Range Bawah :
      <input type="text" name="rendah" id="rendah">
    </label>
    <button type="submit" name="submit">Cari Barang</button>
  </form>

  <table border='1' cellpadding='5'>
    <thead>
      <th colspan='4'><b>Data laptop</b></th>
    </thead>
    <thead>
      <th><b>merek</b></th>
      <th><b>ram</b></th>
      <th><b>Hardisk</b></th>
      <th><b>usb type c</b></th>
      <th><b>harga</b></th>
    </thead>

    <?php foreach ($laptop as $lepi) { ?>
      <?php if ($_POST['tinggi'] <= $lepi['harga']) { ?>
        <tr>
          <td> <?= $lepi['merek']; ?></td>
          <td> <?= $lepi['ram']; ?></td>
          <td> <?= $lepi['harddisk']; ?></td>
          <td> <?= $lepi['usb_type_c']; ?></td>
          <td> <?= $lepi['harga']; ?></td>
        </tr>
        <?php break; ?>
      <?php } ?>
    <?php } ?>
    <?php if ($_POST['rendah'] >= $lepi['harga']) { ?>
      <p> Tidak Ada Produk yang memenuhi range harga tersebut</p>
    <?php } ?>

  </table>
</body>

</html>