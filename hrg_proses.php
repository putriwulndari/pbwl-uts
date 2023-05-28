<?php

use App\Harga as Harga;

$hrg = new Harga();

if (isset($_POST['btn_simpan'])) {
    $hrg->simpan();
    header("location:index.php?hal=hrg_tampil");
}

if (isset($_POST['btn_update'])) {
    $hrg->update();
    header("location:index.php?hal=hrg_tampil");
}