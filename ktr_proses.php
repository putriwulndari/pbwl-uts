<?php

use App\Kontrak as Kontrak;

$ktr = new Kontrak();

if (isset($_POST['btn_simpan'])) {
    $ktr->simpan();
    header("location:index.php?hal=ktr_tampil");
}

if (isset($_POST['btn_update'])) {
    $ktr->update();
    header("location:index.php?hal=ktr_tampil");
}