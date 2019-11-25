<?php
include("koneksi.php");
$siswa=$_POST['nama_siswa'];
$barang=$_POST['nama_barang'];
$tanggal=$_POST['tanggal_pinjam'];
$input="insert into pinjam (id, nama_siswa, nama_barang, tanggal_pinjam, status) values (NULL,'$siswa','$barang', '$tanggal','Y')";

if ($siswa=="" or $barang=="" or $tanggal=""){
	echo '<script type="text/javascript"> 
			var answer = alert("Data masih belum lengkap") window.location = "pinjam.php";
		 </script>';
}else{
	$hasil=mysqli_query($conn,$input);
		if ($hasil){
			header('location:data_pinjam.php?update=2');
		}else{
			echo '<script type="text/javascript">
					var answer = alert("Sudah ada barang dengan nama tersebut") window.location = "data_pinjam.php";
				</script>';
		}
}
?>