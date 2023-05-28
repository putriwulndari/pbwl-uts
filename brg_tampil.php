<?php

use App\Barang as Barang;

$kk = new Barang;
$rows = $kk->tampil();

?>

<h2>Data Barang Masuk</h2>

<a href="index.php?hal=kk_input">Tambah Barang</a>
<table border="1">
    <tr>
        <td>NO</td>
        <td>penPLIER</td>
        <td>kelEGORI</td>
        <td>NAMA</td>
        <td>JUMLAH</td>
        <td>EDIT</td>
        <td>DELETE</td>
    </tr>
    <?php 
    $no = 1;
    foreach ($rows as $row) { 
    ?>
    <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo $row['pen_nama']; ?></td>
        <td><?php echo $row['kel_nama']; ?></td>
        <td><?php echo $row['kk_nama']; ?></td>
        <td><?php echo $row['kk_jumlah']; ?></td>
        <td><a href="index.php?hal=kk_edit&id=<?php echo $row['kk_id']; ?>">Edit</a></td>
        <td><a href="index.php?hal=kk_delete&id=<?php echo $row['kk_id']; ?>">Delete</a></td>
    </tr>
    <?php
        $no++; 
    } 
    ?>
</table>
