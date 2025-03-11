<?php

include "config/koneksi.php";

$kode = $_POST['kode'];
$nama = $_POST['nama'];
$rating = $_POST['rating'];
$catatan = $_POST['catatan'];

$ubah = mysqli_query($koneksi, "UPDATE tbkue SET namakue='$nama', rating='$rating', catatan='$catatan' WHERE kodekue='$kode'");
if ($ubah)
{
    echo "<script>alert('Data ulasan kue berhasil diubah! >3<');</script>";
    echo "<script>window.location.href='data_kue.php';</script>";
}
else
{
    echo "<script>alert('Data ulasan kue gagal diubah... T~T');</script>";
    echo "<script>window.location.href='data_kue.php';</script>";
}

?>