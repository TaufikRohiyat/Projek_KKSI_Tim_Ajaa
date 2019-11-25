<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</head>
<body background="image/bg.png">
	<?php
include("koneksi.php");
?>
<?php
session_start();
if(isset($_SESSION['sessionLogin'])) {
  
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
    <a class="nav-link" href="tambah_barang.php">Tambah Barang</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="data_pinjam.php">Data Peminjaman</a>
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
<?php
}else{
 ?>
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="index.php">
    <img src="image/logo.jpg" width="100" height="50" alt="">
  </a>
  <ul class="nav nav-tabs">
	<li class="nav-item">
    <a class="nav-link" href="index.php">Beranda</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="pinjam.php">Pinjam</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="data_pinjam.php">Data Peminjaman</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="login.php">Login</a>
  </li>
</ul>
</nav>
  <?php
}
?>
<center><h3>DATA PEMINJAMAN BARANG KESELURUHAN</h3></center>
<?php 
if (!empty($_GET['update'])){
	if ($_GET['update']==1)
		echo "<p class='message'> <h4>Data peminjaman berhasil diupdate</h4></p>";
	else if ($_GET['update']==2)
		echo "<p class='message'> <h4>Data peminjaman berhasil ditambahkan</h4></p>";
	else if ($_GET['update']==3)
		echo "<p class='message'> <h4>Data peminjaman berhasil dihapus</h4></p>";
}?>

<?php
	$no=1;
	$sqlCount = "select count(tanggal_pinjam) from pinjam";
	$query = mysqli_query($conn,$sqlCount) or die(mysqli_error($conn));
	$rsCount = mysqli_fetch_array($query);
	$banyakData = $rsCount[0];
	$page = isset($_GET['page']) ? $_GET['page'] : 1;
	$limit = 5;
	$mulai_dari = $limit * ($page - 1);
	$sql_limit = "select * from pinjam order by tanggal_pinjam limit $mulai_dari, $limit";
	$hasil = mysqli_query($conn, $sql_limit) or die(mysqli_error($conn));
	if(mysqli_num_rows($hasil)==0){
		echo "<p class='message'>Data tidak ditemukan!</p>";
	}
?>

	<table class="table table-dark">
		<thead>
			<tr class="success">
				<td>No</td>
				<td>Nama Siswa</td>
				<td>Nama Barang</td>
				<td>Tanggal Pinjam</td>
				<td>Status</td>
			</tr>
		</thead>
	<tbody>

<?php 
	$no=$no+(($page-1)*$limit);
	//Buang field ke dalam array
	while ($data=mysqli_fetch_array($hasil)){
?>
	<tr class="success">
		<td><?php echo $no;?></td>
		<td><?php echo $data[1]; ?></td>
		<td><?php echo $data[2]; ?></td>
		<td><?php echo $data[3]; ?></td>
		<td><?php echo $data[4]; ?></td>
	</tr>

<?php 
	$no++;
	}
?>

</tbody>
</table>

<?php {}?>

<ul class="pagination justify-content-end">

<?php
	$banyakHalaman = ceil($banyakData / $limit);
	
		for($i = 1; $i <= $banyakHalaman; $i++){
			if($page != $i){
				echo '<li class="page-item"><a class="page-link" href="data_pinjam_semua.php?page='.$i.'">Page '.$i.'</a></li> ';
			}else{
				echo '<li class="page-item"><a class="page-link" href="#">Page '.$i.'</a></li> ';
			}
		}
?>
</ul>


</body>
</html>