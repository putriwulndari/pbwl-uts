<?php

use App\Kost as Kost;

$kost = new Kost;
$dataKost = $kost->edit($_GET['id']);
?>

<h2>Ubah Kost</h2>

<form action="index.php?hal=kost_proses" method="post">
    <input type="hidden" name="kost_id" value="<?= $dataKost['kost_id'] ?>">
    <table>
        <tr>
            <td>KAMAR</td>
            <td><input type="text" name="kost_kamar" value="<?= $dataKost['kost_kamar'] ?>" required></td>
        </tr>
        <tr>
            <td>KETERANGAN</td>
            <td><textarea name="kost_text" id="" cols="30" rows="10"><?= $dataKost['kost_text'] ?></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="SIMPAN"></td>
        </tr>
    </table>
</form>
<br>
<a href="index.php?hal=kost_tampil"><button>Kembali</button></a>