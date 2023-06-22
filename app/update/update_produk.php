<?php
include('../../conf/config.php');
$id   =	$_GET['id'];
$kode = $_GET['kode'];
$nama_produk = $_GET['nama_produk'];
$jenis_sediaan = $_GET['jenis_sediaan'];
$lokator = $_GET['lokator'];
$query = mysqli_query ($koneksi, "UPDATE tb_produk SET kode='$kode', nama_produk='$nama_produk', jenis_sediaan='$jenis_sediaan', lokator='$lokator' WHERE id='$id'");

header('location: ../index.php?page=data-produk');

?>
