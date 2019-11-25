<?php
include("koneksi.php");
$username=$_POST['user'];
$password=md5($_POST['pass']);
$input="insert into user(username, password) values ('$username','$password')";

if ($username=="" or $password==""){
	echo '<script type="text/javascript"> 
			var answer = alert("Data masih belum lengkap") window.location = "daftar.php";
		 </script>';
}else{
	$hasil=mysqli_query($conn,$input);
		if ($hasil){
			header('location:login.php');
		}else{
			echo '<script type="text/javascript">
					var answer = alert("Sudah ada barang dengan nama tersebut") window.location = "login.php";
				</script>';
		}
}
?>