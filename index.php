<?php

require_once "inc/Koneksi.php";
require_once "vendor/autoload.php";




?>

<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>KOST PUTRI</title>
      <link rel="stylesheet" href="layouts/assets/css/style.css">
</head>

<body>

      <div class="container">
            <header>
                  <img src="layouts/assets/img/header.jpeg" alt="" height="350px" >
            </header>

            <nav>
                  <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="index.php?hal=pen_tampil">Penyewa</a></li>
                        <li><a href="index.php?hal=kost_tampil">Kost</a></li>
                        <li><a href="index.php?hal=hrg_tampil">Harga</a></li>
                        <li><a href="index.php?hal=ktr_tampil">Kontrak</a></li>

                  </ul>
            </nav>

            <main>
                  <section>
                        <?php 
                        if (isset($_GET['hal'])) {
                              require $_GET['hal'] . ".php";
                        } else {
                              require 'main.php';
                        }
                        ?>
                  </section>
            </main>

            <footer>
                  Copyright &copy; 2023. Designed by Putri Wulandari
            </footer>
      </div>

</body>

</html>