<?php 
include("../../database/koneksi.php");

if(isset($_POST['submit'])){
    $id = htmlentities($_POST['id']);
    $kategori = htmlentities($_POST['kategori']);
    $nama = htmlentities($_POST['nama']);
    $harga_n = htmlentities($_POST['harga_normal']);
    $harga_d = htmlentities($_POST['harga_discont']);
    $tgl = htmlentities($_POST['tgl']);

    $d = array($id,$kategori,$nama,$harga_n,$harga_d,$tgl);
    $sql = "INSERT INTO m_treatment (id_treatment,id_kategori,nama_treatment,harga_normal,harga_discont,tgl_input) VALUES (?,?,?,?,?,?)";
    $row = $koneksi->prepare($sql);
    $row->execute($d);

    header("location:master-treatment.php?pesan=tambah");
}
?>