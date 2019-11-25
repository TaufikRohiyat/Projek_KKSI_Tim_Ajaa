<?php
include("koneksi.php");
//ambil nilai variabel no yang diambil dari form POST
$no=$_POST['no'];
$nama=$_POST['nama'];
$nama2=$_POST['nama2'];
$kelas=$_POST['kelas'];
$sql="UPDATE siswa SET nama='$nama', kelas='$kelas' WHERE nama='$nama2'";

//lakukan query update
if(empty($nama)){
	echo "<p class='message'>Gagal : Nama tidak boleh kosong</p>";?>
	<a href='update_siswa.php?id=<?php echo $no;?>'class='back'>Batal</a>
	<?php
}else{
	$update = mysqli_query($conn,$sql);
	if($update){
		header('location:data_siswa.php?update=1');
		//echo $sql;
	}else{
		echo "<p class='message'>Gagal: sudah ada data ".$nama."</p>";?>
		<br />
		<a href="update_siswa.php?id=<?php echo $no;?>" class="back">Batal</a>
	<?php 
	}
}
	?>