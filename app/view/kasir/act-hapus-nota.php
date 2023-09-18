<?php 
include("../../database/koneksi.php");

$sqlI = "DELETE FROM m_nota";
$rowI = $koneksi->prepare($sqlI);
$rowI->execute();
header("location:kasir.php?nota=yes#kasirnya");
?>