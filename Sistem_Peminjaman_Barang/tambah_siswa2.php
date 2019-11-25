<?php
include("koneksi.php");
$nama=$_POST['nama'];
$kelas=$_POST['kelas'];
$input="insert into siswa(id, nama, kelas) values (NULL, '$nama','$kelas')";

if ($nama=="" or $kelas==""){
	echo '<script type="text/javascript"> 
			var answer = alert("Data masih belum lengkap") window.location = "tambah_siswa.php";
		 </script>';
}else{
	$hasil=mysqli_query($conn,$input);
		if ($hasil){
			header('location:data_siswa.php?update=2');
		}else{
			echo '<script type="text/javascript">
					var answer = alert("Sudah ada siswa dengan nama tersebut") window.location = "index.php";
				</script>';
		}
}
?>