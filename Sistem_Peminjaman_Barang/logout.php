<?php
session_start();
if(isset($_SESSION['sessionLogin'])) {
unset($_SESSION);
session_destroy();
	echo '<script type="text/javascript">
			alert("Anda Berhasil Logout!");
			window.location.href="index.php";
		</script>';
}
?>

<form method="post" action="latihan.php">

</form>