<?php 

include("../../database/koneksi.php");

$id = $_GET['id'];
$sql = "DELETE FROM m_treatment WHERE id_treatment = ?";
$row = $koneksi->prepare($sql);
$row->execute(array($id));
header("location:data-treatment.php?pesan=hapus");
?>