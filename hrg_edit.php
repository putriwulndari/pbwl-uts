<?php

use App\Harga as Harga;

$harga = new Harga;
$hrg = $harga->edit($_GET['id']);
?>

<h2>Ubah Harga</h2>

<form action="index.php?hal=hrg_proses" method="post">
    <input type="hidden" name="hrg_id" value="<?= $hrg['hrg_id'] ?>">
    <table>
        <tr>
            <td>WAKTU</td>
            <td><input type="text" name="hrg_waktu" value="<?= $hrg['hrg_waktu'] ?>" required></td>
        </tr>
        <tr>
            <td>HARGA</td>
            <td>Rp<input type="text" name="hrg_harga" value="<?= $hrg['hrg_harga'] ?>" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="SIMPAN"></td>
        </tr>
    </table>
</form>
<br>
<a href="index.php?hal=hrg_tampil"><button>Kembali</button></a>