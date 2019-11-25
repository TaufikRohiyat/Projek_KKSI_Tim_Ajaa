<?php
include("koneksi.php");
//ambil nilai variabel no yang diambil dari form POST
$no=$_POST['no'];
$nama=$_POST['nama'];
$nama2=$_POST['nama2'];
$jumlah=$_POST['jumlah'];
$jumlah2=$_POST['jumlah2'];
$sql="UPDATE barang SET nama_barang='$nama', jumlah='$jumlah' WHERE nama_barang='$nama2' AND jumlah='$jumlah2'";

//lakukan query update
if(empty($nama)){
	echo "<p class='message'>Gagal : Nama Baang tidak boleh kosong</p>";?>
	<a href='update_barang.php?id=<?php echo $no;?>'class='back'>Batal</a>
	<?php
}else{
	$update = mysqli_query($conn,$sql);
	if($update){
		header('location:data_barang.php?update=1');
		//echo $sql;
	}else{
		echo "<p class='message'>Gagal: sudah ada data ".$nama."</p>";?>
		<br />
		<a href="update_barang.php?id=<?php echo $no;?>" class="back">Batal</a>
	<?php 
	}
}
	?>