hapus<?php
include 'koneksi.php';

if(isset($_GET['id'])){
    header ('location : tampildata.php');
}

$id_produk = $_GET ['id_produk'];
$sql = "DELETE FROM produk WHERE id_produk = '$id_produk'";
$query = mysqli_query($connect,$sql);

if($query) {
    header ('location : tampildata.php');
}else{
    header ('location : hapus.php?status=gagal');
}
?>