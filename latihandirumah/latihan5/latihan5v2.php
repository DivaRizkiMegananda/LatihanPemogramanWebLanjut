<?php
// pengulangan pada array 
// belajar for dan foreach
$hari = ["senin", "selasa", "rabu", "kamis", "jumat"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Latihan perulangan pada array</title>
  <style>
    .kotak {
      width: 50px;
      height: 50px;
      background-color: salmon;
      text-align: center;
      line-height: 50px;
      margin: 3px;
      float: left;
    }

    .clear {
      clear: both;
    }
  </style>
</head>

<body>

  <!-- cara 1 -->
  <?php for ($i = 0; $i < count($hari); $i++) { ?>
    <div class="kotak"><?php echo $hari[$i]; ?></div>
  <?php } ?>

  <div class="clear"></div>

  <!-- cara 2 -->
  <?php foreach ($hari as $h) { ?>
    <div class="kotak"><?php echo $h; ?></div>
  <?php } ?>

  <div class="clear"></div>

  <!-- cara 3  -->
  <?php foreach ($hari as $r) :  ?>
    <div class="kotak"> <?= $r ?></div>
  <?php endforeach ?>




</body>

</html>