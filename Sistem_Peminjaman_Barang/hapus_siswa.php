<?php
include("koneksi.php");
$id=$_GET['id'];
$query = mysqli_query($conn,"delete from siswa where nama='$id'") or die(mysqli_error($conn));
//kembali ke halaman user.php
header('location:data_siswa.php?update=3');
exit;
?>