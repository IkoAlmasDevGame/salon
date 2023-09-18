<?php 
include("../../database/koneksi.php");

$dataI = $_GET['brg'];
$sql = "select * from m_treatment where id_treatment= ?";
$row = $koneksi->prepare($sql);
$row->execute(array($dataI));

$id = $_GET['id'];
$sqlI = "DELETE FROM m_penjualan WHERE id= ?";
$rowI = $koneksi->prepare($sqlI);
$rowI->execute(array($id));
header("location:kasir.php");
?>