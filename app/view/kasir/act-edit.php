<?php 
include("../../database/koneksi.php");

$id = htmlentities($_POST['id']);
$id_barang = htmlentities($_POST['id_treatment']);
$jumlah = htmlentities($_POST['jumlah']);

$sql_tampil = "select * from m_treatment where id_treatment=?";
$row_tampil = $koneksi -> prepare($sql_tampil);
$row_tampil -> execute(array($id_barang));
$row = $row_tampil -> fetch();

if($row['harga_normal'] > $jumlah){
    $jual = $row['harga_normal'];
    $total = $jual * $jumlah;
    
    $data1[] = $jumlah;
    $data1[] = $total;
    $data1[] = $id;

    $sql1 = 'UPDATE m_penjualan SET jumlah=?,total=? WHERE id=?';
}else if($row['harga_discont'] > $jumlah){
    $jual1 = $row['harga_discont'];
    $total1 = $jual1 * $jumlah;
    
    $data1[] = $jumlah1;
    $data1[] = $total1;
    $data1[] = $id;

    $sql1 = 'UPDATE m_penjualan SET jumlah=?,total=? WHERE id=?';
}
if($row1 = $koneksi -> prepare($sql1)){
    $row1 -> execute($data1);
    echo '<script>window.location="kasir.php?nota=yes"</script>';
} else {
    echo '<script>alert("Keranjang Melebihi Stok Barang Anda !");
			window.location="kasir.php#keranjang"</script>';
}

?>