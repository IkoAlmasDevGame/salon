<?php 
include("../../database/koneksi.php");

$sqlI = "DELETE FROM m_penjualan";
$rowI = $koneksi->prepare($sqlI);
$rowI->execute();
header("location:kasir.php");
?>