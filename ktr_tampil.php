<?php

use App\Kontrak as Kontrak;

$ktr = new Kontrak;
$rows = $ktr->tampil();

?>

<h2>Data Kontrak</h2>

<a href="index.php?hal=ktr_input">Tambah Kontrak</a>
<table border="1">
    <tr>
        <td>No</td>
        <td>Penyewa</td>
        <td>Kost</td>
        <td>Waktu</td>
        <td>Harga</td>
        <td>Tgl Masuk</td>
        <td>Tgl Keluar</td>
        <td>Edit</td>
        <td>Delete</td>
    </tr>
    <?php 
    $no = 1;
    foreach ($rows as $row) { 
    ?>
    <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo $row['pen_nama']; ?></td>
        <td><?php echo $row['kost_kamar']; ?></td>
        <td><?php echo $row['hrg_waktu']; ?></td>
        <td><?php echo $row['hrg_harga']; ?></td>
        <td><?php echo $row['ktr_masuk']; ?></td>
        <td><?php echo $row['ktr_keluar']; ?></td>
        <td><a href="index.php?hal=ktr_edit&id=<?php echo $row['ktr_id']; ?>">Edit</a></td>
        <td><a href="index.php?hal=ktr_delete&id=<?php echo $row['ktr_id']; ?>">Delete</a></td>
    </tr>
    <?php
        $no++; 
    } 
    ?>
</table>
