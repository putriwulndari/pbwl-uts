<?php

use App\Kost as Kost;

$pen = new Kost;
$rows = $pen->tampil();

?>

<h2>Data Kost</h2>

<a href="index.php?hal=kost_input">Tambah Kost</a>
<table border="1">
    <tr>
        <td>No</td>
        <td>Kamar</td>
        <td>Keterangan</td>
        <td>EDIT</td>
        <td>DELETE</td>
    </tr>
    <?php 
    $no = 1;
    foreach ($rows as $row) { 
    ?>
    <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo $row['kost_kamar']; ?></td>
        <td><?php echo $row['kost_text']; ?></td>
        <td><a href="index.php?hal=kost_edit&id=<?php echo $row['kost_id']; ?>">Edit</a></td>
        <td><a href="index.php?hal=kost_delete&id=<?php echo $row['kost_id']; ?>">Delete</a></td>
    </tr>
    <?php
        $no++; 
    } 
    ?>
</table>
