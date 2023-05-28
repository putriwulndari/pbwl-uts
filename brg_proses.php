<?php

use App\Barang as Barang;

$kk = new Barang();

if (isset($_POST['btn_simpan'])) {
    $kk->simpan();
    header("location:index.php?hal=kk_tampil");
}

if (isset($_POST['btn_update'])) {
    $kk->update();
    header("location:index.php?hal=kk_tampil");
}