<?php

use App\Barang as Barang;

$id = $_GET['id'];

$kk = new Barang();
$rows = $kk->delete($id);

?>

Data berhasil dihapus!

<a href="index.php?hal=kk_tampil">Kembali</a>