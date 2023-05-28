<?php

use App\Harga as Harga;

$id = $_GET['id'];

$hrg = new Harga();
$rows = $hrg->delete($id);

?>

Data berhasil dihapus!

<a href="index.php?hal=hrg_tampil">Kembali</a>