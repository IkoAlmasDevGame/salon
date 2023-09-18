<?php 
include("../../database/koneksi.php");

$id = $_GET['id'];

// get tabel m_treatment id_treatment
$sql = 'SELECT * FROM m_treatment WHERE id_treatment = ?';
$row = $koneksi->prepare($sql);
$row->execute(array($id));
$row = $row->fetch();

$jumlah = 1;
$total = $row['harga_normal'];
$tgl = date("j F Y, G:i");

$data1[] = $id;
$data1[] = $jumlah;
$data1[] = $total;
$data1[] = $tgl;

$sql1 = 'INSERT INTO m_penjualan (id_treatment,jumlah,total,tanggal_input) VALUES (?,?,?,?)';
if($row1 = $koneksi->prepare($sql1)){
$row1 -> execute($data1);
    header("location:kasir.php?nota=yes&harga_normal=yes");
}else{
    echo '<script>alert("Stok Barang Anda Telah Habis !");"</script>';
    header("location:kasir.php#keranjang");
}

?>