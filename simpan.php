<?php
include 'koneksi.php';
if(isset($_POST['simpan'])){
$id_produk = $_POST['id_produk'];
$nama_produk = $_POST['nama_produk'];
$harga_produk = $_POST['harga_produk'];
$gambar_produk = $_POST['gambar_produk'];

$sql = "INSERT INTO produk (id_produk, nama_produk, harga_produk, gambar_produk) VALUES ('$id_produk','$nama_produk','$harga_produk','$gambar_produk')";
$query = mysqli_query ($connect,$sql);
if($query) {
    header('location : tampildataa.php');
}else{
    header('location : simpan.php?status=gagal');
}
}
?>