<?php

use App\Harga as Harga;

$hrg = new Harga;
$rows = $hrg->tampil();

?>

<h2>Data Harga</h2>

<a href="index.php?hal=hrg_input">Tambah Harga</a>
<table border="1">
    <tr>
        <td>No</td>
        <td>Waktu</td>
        <td>Harga</td>
        <td>Edit</td>
        <td>Delete</td>
    </tr>
    <?php 
    $no = 1;
    foreach ($rows as $row) { 
    ?>
    <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo $row['hrg_waktu']; ?></td>
        <td>Rp <?php echo $row['hrg_harga']; ?></td>
        <td><a href="index.php?hal=hrg_edit&id=<?php echo $row['hrg_id']; ?>">Edit</a></td>
        <td><a href="index.php?hal=hrg_delete&id=<?php echo $row['hrg_id']; ?>">Delete</a></td>
    </tr>
    <?php
        $no++; 
    } 
    ?>
</table>
