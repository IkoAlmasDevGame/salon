<?php 
include("../../database/koneksi.php");

if(isset($_POST['update'])){
    $id = htmlentities($_POST['id']);
    $kategori = htmlentities($_POST['kategori']);
    $nama = htmlentities($_POST['nama']);
    $harga_n = htmlentities($_POST['harga_normal']);
    $harga_d = htmlentities($_POST['harga_discont']);
    $tgl = htmlentities($_POST['tgl']);

    $d = array($kategori,$nama,$harga_n,$harga_d,$tgl,$id);
    $sql = "UPDATE m_treatment SET id_kategori=?, nama_treatment=?, harga_normal=?, harga_discont=?, tgl_input=? WHERE id_treatment = ?";
    $row = $koneksi->prepare($sql);
    $row->execute($d);

    header("location:master-treatment.php?pesan=edit");
}

?>