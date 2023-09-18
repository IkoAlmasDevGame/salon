<?php 
include("../../database/koneksi.php");

if (!empty($_GET['cari_barang'])) {
    if(isset($_POST['keyword'])){
        $cari = strip_tags(trim($_POST['keyword']));
        if($cari == ''){   
        }else{
            $sql = "select * from m_treatment inner join m_kategori on m_treatment.id_kategori = m_kategori.id_kategori
            where id_treatment like '%$cari%' or nama_treatment like '%$cari%'";            
            
            $row = $koneksi -> prepare($sql);
            $row->execute();
            $row = $row -> fetchAll();
?>
    <link href="https://fonts.cdnfonts.com/css/3-of-9-barcode" rel="stylesheet">
    <table class="table table-striped table-bordered" id="example1">
        <tr>
            <th>ID Treatment</th>
            <th>Nama Treatment</th>
            <th>Nama Kategori</th>
            <th>Aksi</th>
        </tr>
<?php foreach ($row as $hasil) {
        ?>
        <tr>
            <td style="font-family:'3 of 9 Barcode', sans-serif; font-size:18px;"><?php echo $hasil['id_treatment'];?></td>
            <td><?php echo $hasil['nama_treatment'];?></td>
            <td><?php echo $hasil['nama_kategori'];?></td>
            <td>
                <a class="btn btn-success" href="act-tambah-normal.php?id=<?=$hasil['id_treatment']?>">
                    <i class="fa fa-shopping-cart"></i></a>
                <a class="btn btn-warning" href="act-tambah-discount.php?id=<?=$hasil['id_treatment']?>">
                    <i class="fa fa-shopping-cart"></i></a>
            </td>
        </tr>
    <?php }?>
    </table>
    <?php
        }
    }
}

?>