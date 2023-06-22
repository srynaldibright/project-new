<?php
include('../../conf/config.php');
$kode = $_GET['kode'];
$nama_produk = $_GET['nama_produk'];
$jenis_sediaan = $_GET['jenis_sediaan'];
$lokator = $_GET['lokator'];
$query = mysqli_query ($koneksi, "INSERT INTO tb_produk (id,kode,nama_produk,jenis_sediaan,lokator) VALUES ('','$kode','$nama_produk','$jenis_sediaan','$lokator')");
header('location: ../index.php?page=data-produk');

// if(isset($_POST['import'])) {
// 	$_FILES['file']['name'];
// 	$ekstensi = explode(".", $file);
// 	$file_name = "file-". round(microtime(true)).","end($ekstensi);
// 	$sumber = $_FILES['file']['tmp_name'];
// 	$target_dir = "";
// 	$target_file = $target_dir.$target_file;
// 	$upload = move_uploaded_file($sumber, $target_file);
// 	if(upload){
// 		echo "upload sukses";
// 	}else{
// 		echo "upload gagal";
// 	}
// }
?>
