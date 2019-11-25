<?php
include("koneksi.php");
$barang=$_POST['barang'];
$jumlah=$_POST['jumlah'];
$input="insert into barang(id, nama_barang, jumlah) values (NULL,'$barang','$jumlah')";

if ($barang=="" or $jumlah==""){
	echo '<script type="text/javascript"> 
			var answer = alert("Data masih belum lengkap") window.location = "tambah_barang.php";
		 </script>';
}else{
	$hasil=mysqli_query($conn,$input);
		if ($hasil){
			header('location:data_barang.php?update=2');
		}else{
			echo '<script type="text/javascript">
					var answer = alert("Sudah ada barang dengan nama tersebut") window.location = "data_barang.php";
				</script>';
		}
}
?>