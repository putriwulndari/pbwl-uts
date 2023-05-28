<?php

use App\Penyewa as Penyewa;

$pen = new Penyewa();

if (isset($_POST['btn_simpan'])) {
    $pen->simpan();
    header("location:index.php?hal=pen_tampil");
}

if (isset($_POST['btn_update'])) {
    $pen->update();
    header("location:index.php?hal=pen_tampil");
}