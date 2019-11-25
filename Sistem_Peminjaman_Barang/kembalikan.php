<?php 
include("koneksi.php");
$no = $_GET['id'];
echo $no;
$sql="UPDATE pinjam SET status='N' where id='$no'";
mysqli_query($conn,$sql);
?>
<script type="text/javascript">
	alert("Barang berhasil dikembalikan!");
	window.location.href="data_pinjam.php";
</script>