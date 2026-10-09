<?php

// buat manggil file koneksi.php
include_once('koneksi.php');

if (isset($_POST['submit'])){
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];

    $query = mysqli_query($db, "INSERT INTO siswa (nis, nama, kelas, jurusan) Values ('$nis', '$nama', '$kelas', '$jurusan')" );

    if ($query){
        header('location: index.php');
        exit ();
    } else {
        echo "error : " . mysqli_error ($db);
    }
}
?>