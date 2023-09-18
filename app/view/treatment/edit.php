<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta name="description" content="By Developer Iko Almas">
    <meta name="description" content="Haieyelash Remake 2023">

    <?php 
        include("../tampilan/header.php");
        $id = $_GET['id'];
        $row = $lihat-> treatment_edit($id);
    ?>

    <title>Edit Data Treatment</title>
</head>
<body>
    <?php 
        include ("../tampilan/sidebar.php");
    ?>
    <div class="main-content">
        <div class="col-xxl-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <section class="section">
                        <div class="section-header">
                            <h3 class="panel-title fw-bold font-timesnew">Data Edit Treamtent - <?php echo $row['nama_treatment'] ?></h3>
                            <div class="section-header-breadcrumb">
                                <div class="breadcrumb breadcrumb-item">
                                    <a href="../dashboard/dashboard.php" class="text-decoration-none text-primary">Halaman utama</a></div>
                                <div class="breadcrumb breadcrumb-item">
                                    <a href="data-master.php" class="text-decoration-none text-primary">Data Master Treatment</a></div>
                                <div class="breadcrumb breadcrumb-item">
                                    <a href="edit.php?id=<?=$id?>" class="text-decoration-none text-primary">Data Edit Treatment</a></div>
                            </div>
                        </div>
                    </section>
                    <div class="row">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <form action="act-edit.php" method="post">
                                            <tr>
                                                <td>ID Treatment</td>
                                                <td><input type="text" readonly="readonly" class="form-control"
                                                    value="<?php echo $row['id_treatment'];?>" name="id"></td>
                                            </tr>
                                            <tr>
                                                <td>Kategori Treatment</td>
                                                <td>
                                                    <select name="kategori" class="form-control">
                                                        <option value="<?php echo $row['id_kategori'];?>">
                                                            <?php echo $row['nama_kategori'];?></option>
                                                        <option value="#">Pilih Kategori</option>
                                                        <?php  $kat = $lihat-> kategori(); foreach($kat as $isi){ 	?>
                                                        <option value="<?php echo $isi['id_kategori'];?>">
                                                            <?php echo $isi['nama_kategori'];?></option>
                                                        <?php }?>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Nama Treatment</td>
                                                <td><input type="text" class="form-control"
                                                    value="<?php echo $row['nama_treatment'];?>" name="nama"></td>
                                            </tr>
                                            <tr>
                                                <td>Harga Normal</td>
                                                <td><input type="number" class="form-control"
                                                    value="<?php echo $row['harga_normal'];?>" name="harga_normal"></td>
                                            </tr>
                                            <tr>
                                                <td>Harga Discont</td>
                                                <td><input type="number" class="form-control"
                                                        value="<?php echo $row['harga_discont'];?>" name="harga_discont"></td>
                                            </tr>
                                            <tr>
                                                <td>Tanggal Update</td>
                                                <td><input type="text" readonly="readonly" class="form-control"
                                                    value="<?php echo  date("j F Y, G:i");?>" name="tgl"></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td><button class="btn btn-primary" type="submit" name="update"><i class="fa fa-edit"></i> Update
                                                        Data</button></td>
                                            </tr>
                                        </form>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php 
        include("../tampilan/footer.php");
    ?>