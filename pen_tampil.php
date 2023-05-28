<?php

use App\Penyewa as Penyewa;

$pen = new Penyewa;
$rows = $pen->tampil();

?>

<h2>Data Penyewa</h2>

<a href="index.php?hal=pen_input">Tambah Penyewa</a>
<table border="1">
    <tr>
        <td>No</td>
        <td>Nama</td>
        <td>Telp</td>
    </tr>
    <?php 
    $no = 1;
    foreach ($rows as $row) { 
    ?>
    <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo $row['pen_nama']; ?></td>
        <td><?php echo $row['pen_telp']; ?></td>
        <td><a href="index.php?hal=pen_edit&id=<?php echo $row['pen_id']; ?>">Edit</a></td>
        <td><a href="index.php?hal=pen_delete&id=<?php echo $row['pen_id']; ?>">Delete</a></td>
    </tr>
    <?php
        $no++; 
    } 
    ?>
</table>
