<?php

use App\Kontrak as Kontrak;

$id = $_GET['id'];

$ktr = new Kontrak();
$rows = $ktr->delete($id);

?>

Data berhasil dihapus!

<a href="index.php?hal=ktr_tampil">Kembali</a>