<?php

use App\Penyewa as Penyewa;

$pen = new Penyewa;
$data = $pen->edit($_GET['id']);
?>

<h2>Tambah Penyewa</h2>

<form action="index.php?hal=pen_proses" method="post">
    <input type="hidden" name="pen_id" value="<?= $data['pen_id'] ?>">
    <table>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="pen_nama" value="<?= $data['pen_nama'] ?>" autofocus required></td>
        </tr>
        <tr>
            <td>TELP</td>
            <td><input type="text" name="pen_telp" value="<?= $data['pen_telp'] ?>" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="SIMPAN"></td>
        </tr>
    </table>
</form>
<br>
<a href="index.php?hal=pen_tampil"><button>Kembali</button></a>