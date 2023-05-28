<?php

use App\Penyewa as Penyewa;
use App\Kost as Kost;
use App\harga as harga;
use App\Kontrak as Kontrak;

$kontrak = new Kontrak;
$dataKontrak = $kontrak->edit($_GET['id']);

$pen = new Penyewa;
$dataPenyewa = $pen->tampil();

$kost = new Kost;
$dataKost = $kost->tampil();

$hrg = new Harga;
$dataHarga = $hrg->tampil();
?>

<h2>Ubah Kontrak</h2>

<form action="index.php?hal=ktr_proses" method="post">
    <input type="hidden" name="ktr_id" value="<?= $dataKontrak['ktr_id'] ?>">
    <table>
        <tr>
            <td>Penyewa</td>
            <td>
                <select name="ktr_id_penyewa" id="" required>
                    <option value="<?= $dataKontrak['pen_id'] ?>"><?= $dataKontrak['pen_nama'] ?></option>
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
                    <option value="<?= $dataKontrak['kost_id'] ?>"><?= $dataKontrak['kost_kamar'] ?></option>
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
                    <option value="<?= $dataKontrak['hrg_id'] ?>"><?= $dataKontrak['hrg_waktu'] ?> / Rp <?= $dataKontrak['hrg_harga'] ?></option>
                    <?php foreach ($dataHarga as $row) { ?>
                    <option value="<?= $row['hrg_id'] ?>"><?= $row['hrg_waktu'] ?> / Rp <?= $row['hrg_harga'] ?></option>
                    <?php }?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Tgl Masuk</td>
            <td><input type="date" name="ktr_masuk" id="" value="<?= $dataKontrak['ktr_masuk'] ?>" required></td>
        </tr>
        <tr>
            <td>Tgl Keluar</td>
            <td><input type="date" name="ktr_keluar" id="" value="<?= $dataKontrak['ktr_keluar'] ?>" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="SIMPAN"></td>
        </tr>
    </table>
</form>
<br>
<a href="index.php?hal=kk_tampil"><button>Kembali</button></a>