<?php

use App\penplier as penplier;
use App\kelegori as kelegori;

$penplier = new penplier;
$pen = $penplier->tampil();

$kelegori = new kelegori;
$kel = $kelegori->tampil();

?>

<h2>Tambah Barang Masuk</h2>

<form action="index.php?hal=kk_proses" method="post">
    <table>
        <tr>
            <td>penPLIER</td>
            <td>
                <select name="kk_id_penplier" id="">
                    <?php
                    foreach ($pen as $row) {
                    ?>
                    <option value="<?= $row['pen_id']?>"><?= $row['pen_nama']?></option>
                    <?php } ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>kelEGORI</td>
            <td>
                <select name="kk_id_kelegori" id="">
                    <?php
                    foreach ($kel as $row) {
                    ?>
                    <option value="<?= $row['kel_id']?>"><?= $row['kel_nama']?></option>
                    <?php } ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="kk_nama" required></td>
        </tr>
        <tr>
            <td>JUMLAH</td>
            <td><input type="number" min="0" name="kk_jumlah" required></td>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_simpan" value="SIMPAN"></td>
        </tr>
    </table>
</form>
<br>
<a href="index.php?hal=kk_tampil"><button>Kembali</button></a>