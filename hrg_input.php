<h2>Tambah Harga</h2>

<form action="index.php?hal=hrg_proses" method="post">
    <table>
        <tr>
            <td>Waktu</td>
            <td><input type="text" name="hrg_waktu" autofocus required></td>
        </tr>
        <tr>
            <td>HARGA</td>
            <td>Rp<input type="number" name="hrg_harga" min="0" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_simpan" value="SIMPAN"></td>
        </tr>
    </table>
</form>
<br>
<a href="index.php?hal=hrg_tampil"><button>Kembali</button></a>