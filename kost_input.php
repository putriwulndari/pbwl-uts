<h2>Tambah Kost</h2>

<form action="index.php?hal=kost_proses" method="post">
    <table>
        <tr>
            <td>Kamar</td>
            <td><input type="text" name="kost_kamar" autofocus required></td>
        </tr>
        <tr>
            <td>Keterangan</td>
            <td><textarea name="kost_text" id="" cols="30" rows="10"></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_simpan" value="SIMPAN"></td>
        </tr>
    </table>
</form>
<br>
<a href="index.php?hal=kost_tampil"><button>Kembali</button></a>