<?php

use App\Kost as Kost;

$id = $_GET['id'];

$kost = new Kost();
$rows = $kost->delete($id);

?>

Data berhasil dihapus!

<a href="index.php?hal=kost_tampil">Kembali</a>