<?php
include("koneksi.php");
$id=$_GET['id'];
$query = mysqli_query($conn,"delete from barang where nama_barang='$id'") or die(mysqli_error($conn));
//kembali ke halaman user.php
header('location:data_barang.php?update=3');
exit;
?>