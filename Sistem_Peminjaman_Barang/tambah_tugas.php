<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body background="image/bg.png">
<?php
include("koneksi.php");
?>
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="index_admin.php">
    <img src="image/logo.jpg" width="100" height="50" alt="">
  </a>
  <ul class="nav nav-tabs">
	<li class="nav-item">
    <a class="nav-link" href="index_admin.php">Beranda</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="tambah_siswa.php">Tambah Siswa</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="tambah_barang.php">Tambah Barang</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="data_pinjam.php">Data Peminjaman</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="data_siswa.php">Data Siswa</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="data_barang.php">Data Barang</a>
  </li>
    <li class="nav-item">
    <a class="nav-link" href="logout.php">Logout</a>
  </li>
</ul>
</nav>
<center><h1>TAMBAH DATA BARANG</h1></center>
<div class="container">
	<div class="row">
		<div class="col-md-6 offset-md-3">

		<form action="tambah_barang2.php" method="get">
			<table width="319" border="0" class="table table-dark">
				<tr>
					<td width="152">Nama Barang</td>
					<td width="157"><input name="barang" type="text" id="barang" size="20" /></td>
				</tr>
				<tr>
					<td width="152">Jumlah</td>
					<td width="157"><input name="jumlah" type="number" min="1" max="1000" id="jumlah" size="20" /></td>
				</tr>
				<tr>
					<td width="92"><button class="btn btn-warning" type="submit">Simpan</a></button></td>
					<td width="92"><a href="index.php" button class="btn btn-warning" type="button">Batal</a></button></td>
				</tr>
			</table>

<br>


		</form>

	</div>
	</div>
</div>


</body>
</html>