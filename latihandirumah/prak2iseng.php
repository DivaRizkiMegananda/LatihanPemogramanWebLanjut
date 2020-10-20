<?php
$buku = array(
  array(
    'judul' => 'Sherlock Holmes',
    'pengarang' => 'Arthur Cona Doyle',
    'harga' => 50000,
    'stok' => 20
  ),
  array(
    'judul' => 'Arsene',
    'pengarang' => 'Maurice LeBlanc',
    'harga' => 250000,
    'stok' => 50
  ),
  array(
    'judul' => 'Games Of Throne',
    'pengarang' => 'George R.R.Martin',
    'harga' => 125000,
    'stok' => 60
  ),
);


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iseng Praktikum 2</title>
</head>

<body>
  <h1> mencari data array </h1>

  <?php
  $keyword = "Arsene";
  $ketemu  = FALSE;
  for ($i = 0; $i < count($buku); $i++) {
    if ($buku[$i]["judul"] == $keyword) {
      $ketemu = TRUE;
      break;
    }
  }

  if ($ketemu == TRUE) {
    echo "Keyword $keyword berhasil ditemukan";
  } else {
    echo "Keyword $keyword GAGAALL ditemukan";
  }

  ?>
</body>

</html>