<?php

use App\Penyewa as Penyewa;

$id = $_GET['id'];

$pen = new Penyewa();
$rows = $pen->delete($id);

?>

Data berhasil dihapus!

<a href="index.php?hal=pen_tampil">Kembali</a>