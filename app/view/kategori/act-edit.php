<?php 
include("../../database/koneksi.php");

$nama= htmlentities($_POST['kategori']);
$id= htmlentities($_POST['id']);
$sql = "UPDATE m_kategori SET nama_kategori='$nama' WHERE id_kategori='$id'";
$row = $kon->query($sql);

if(!$row){
    die("error update : ".mysqli_errno($kon));
}else{
    header('location:master-kategori.php?id='.$id.'&pesan=edit');
}

?>