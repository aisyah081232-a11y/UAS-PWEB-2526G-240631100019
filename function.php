<?php

include 'config/koneksi.php';

function tampilData($query){

    global $conn;

    $hasil = mysqli_query($conn,$query);

    $rows=[];

    while($row=mysqli_fetch_assoc($hasil)){
        $rows[]=$row;
    }

    return $rows;

}

function totalBuku(){

    global $conn;

    $hasil=mysqli_query($conn,"SELECT COUNT(*) AS total FROM buku");

    $data=mysqli_fetch_assoc($hasil);

    return $data['total'];

}

function totalStok(){

    global $conn;

    $hasil=mysqli_query($conn,"SELECT SUM(stok) AS total FROM buku");

    $data=mysqli_fetch_assoc($hasil);

    return $data['total'];

}

function tambah($data){

    global $conn;

    $kode=$data["kode_buku"];
    $judul=$data["judul"];
    $penulis=$data["penulis"];
    $penerbit=$data["penerbit"];
    $tahun=$data["tahun_terbit"];
    $stok=$data["stok"];

    mysqli_query($conn,"INSERT INTO buku VALUES('','$kode','$judul','$penulis','$penerbit','$tahun','$stok')");

    return mysqli_affected_rows($conn);

}

function ubah($data){

    global $conn;

    $id=$data["id"];
    $kode=$data["kode_buku"];
    $judul=$data["judul"];
    $penulis=$data["penulis"];
    $penerbit=$data["penerbit"];
    $tahun=$data["tahun_terbit"];
    $stok=$data["stok"];

    mysqli_query($conn,"UPDATE buku SET

    kode_buku='$kode',
    judul='$judul',
    penulis='$penulis',
    penerbit='$penerbit',
    tahun_terbit='$tahun',
    stok='$stok'

    WHERE id='$id'
    ");

    return mysqli_affected_rows($conn);

}

function hapus($id){

    global $conn;

    mysqli_query($conn,"DELETE FROM buku WHERE id='$id'");

    return mysqli_affected_rows($conn);

}

?>