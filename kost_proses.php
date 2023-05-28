<?php

use App\Kost as Kost;

$dataKost = new Kost();

if (isset($_POST['btn_simpan'])) {
    $dataKost->simpan();
    header("location:index.php?hal=kost_tampil");
}

if (isset($_POST['btn_update'])) {
    $dataKost->update();
    header("location:index.php?hal=kost_tampil");
}