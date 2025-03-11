<?php

include "config/koneksi.php";

$kodekue    =$_POST['kode'];
$namakue    =$_POST['nama'];
$rating     =$_POST['rating'];
$catatan    =$_POST['catatan'];

$simpan = mysqli_query($koneksi, "INSERT INTO tbkue VALUES ('$kodekue', '$namakue', '$rating', '$catatan')");
if ($simpan)
{
    echo "<script>alert('Data Makanan Berhasil Disimpan yey :3');
    window.location.href='data_kue.php';</script>";
} 
else
{
    echo "<script>alert('Data Makanan Gagal Disimpan fufufu.. ;(');
    window.location.href='tambah_kue.php';</script>";
}

?>