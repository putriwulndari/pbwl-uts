<?php

use App\Barang as Barang;
use App\penplier as penplier;
use App\kelegori as kelegori;

$penplier = new penplier;
$pen = $penplier->tampil();

$kelegori = new kelegori;
$kel = $kelegori->tampil();

$barang = new Barang;
$kk = $barang->edit($_GET['id']);
?>

<h2>Ubah Barang</h2>

<form action="index.php?hal=kk_proses" method="post">
    <input type="hidden" name="kk_id" value="<?= $kk['kk_id'] ?>">
    <table>
        <tr>
            <td>penPLIER</td>
            <td>
                <select name="kk_id_penplier" id="">
                    <option value="<?= $kk['pen_id']?>"><?= $kk['pen_nama']?></option>
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
                    <option value="<?= $kk['kel_id']?>"><?= $kk['kel_nama']?></option>
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
            <td><input type="text" name="kk_nama" value="<?= $kk['kk_nama'] ?>" required></td>
        </tr>
        <tr>
            <td>JUMLAH</td>
            <td><input type="number" min="0" name="kk_nama" value="<?= $kk['kk_jumlah'] ?>" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="SIMPAN"></td>
        </tr>
    </table>
</form>
<br>
<a href="index.php?hal=kk_tampil"><button>Kembali</button></a>