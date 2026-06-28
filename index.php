<?php
include 'function.php';

$totalBuku = totalBuku();
$totalStok = totalStok();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Pendataan Buku</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="navbar">
     Sistem Pendataan Buku Praktis
</div>

<div class="container">

    <div class="card">
        <h2>Halooo Selamat Datang </h2>
        <p>
            Aplikasi ini digunakan untuk mengelola data buku perpustakaan / data buku yang anda miliki.
            Anda dapat melihat, menambah, mengubah, dan menghapus data buku
            dengan mudah dan cepat. 
        </p>
    </div>

    <div class="dashboard">

        <div class="box">
            <h1><?= $totalBuku; ?></h1>
            <p>Total Buku</p>
        </div>

        <div class="box">
            <h1><?= $totalStok; ?></h1>
            <p>Total Stok</p>
        </div>

    </div>

    <a href="daftar.php" class="btn btn-primary">📖 Daftar Buku</a>

</div>

<footer>
    <hr>
    <p>
        Dibuat Oleh 
        <b>Nur Aisyah</b><br>
        <b>019</b><br>
        
    </p>
</footer>

</body>
</html>