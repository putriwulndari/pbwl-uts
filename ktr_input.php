<?php

use App\Penyewa as Penyewa;
use App\Kost as Kost;
use App\Harga as Harga;

$ktr = new Penyewa;
$dataPenyewa = $ktr->tampil();

$kost = new Kost;
$dataKost = $kost->tampil();

$hrg = new Harga;
$dataHarga = $hrg->tampil();
?>

<h2>Tambah Kontrak</h2>

<form action="index.php?hal=ktr_proses" method="post">
    <table>
        <tr>
            <td>Penyewa</td>
            <td>
                <select name="ktr_id_penyewa" id="" required>
                    <?php foreach ($dataPenyewa as $row) { ?>
                    <option value="<?= $row['pen_id'] ?>"><?= $row['pen_nama'] ?></option>
                    <?php }?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Kost</td>
            <td>
                <select name="ktr_id_kost" id="" required>
                    <?php foreach ($dataKost as $row) { ?>
                    <option value="<?= $row['kost_id'] ?>"><?= $row['kost_kamar'] ?></option>
                    <?php }?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Harga</td>
            <td>
                <select name="ktr_id_harga" id="" required>
                    <?php foreach ($dataHarga as $row) { ?>
                    <option value="<?= $row['hrg_id'] ?>"><?= $row['hrg_waktu'] ?> / Rp <?= $row['hrg_harga'] ?></option>
                    <?php }?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Tgl Masuk</td>
            <td><input type="date" name="ktr_masuk" id="" required></td>
        </tr>
        <tr>
            <td>Tgl Keluar</td>
            <td><input type="date" name="ktr_keluar" id="" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_simpan" value="SIMPAN"></td>
        </tr>
    </table>
</form>
<br>
<a href="index.php?hal=ktr_tampil"><button>Kembali</button></a>