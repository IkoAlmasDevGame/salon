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
    <title>Data Detail</title>
    <link href="https://fonts.cdnfonts.com/css/3-of-9-barcode" rel="stylesheet">
</head>
<body>
    <?php 
        include("../tampilan/sidebar.php");
    ?>
    <div class="main-content">
        <div class="col-xxl-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <section class="section">
                        <div class="section-header">
                            <h3 class="panel-title fw-bold font-timesnew">Data Detail</h3>
                            <div class="section-header-breadcrumb">
                                <div class="breadcrumb breadcrumb-item">
                                    <a href="../dashboard/dashboard.php" class="text-decoration-none text-primary">Halaman utama</a></div>
                                <div class="breadcrumb breadcrumb-item">
                                    <a href="data-master.php" class="text-decoration-none text-primary">Data Master Treatment</a></div>
                                <div class="breadcrumb breadcrumb-item">
                                    <a href="detail.php?id=<?=$id?>" class="text-decoration-none text-primary">Data Detail</a></div>
                            </div>
                        </div>
                    </section>
                    <div class="row">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <tr>
                                            <td>ID Treatment</td>
                                            <td style="font-family:'3 of 9 Barcode', sans-serif; font-size:24px;"><?=$row['id_treatment']?></td>
                                        </tr>
                                        <tr>
                                            <td>Kategori</td>
                                            <td>
                                            <select name="kategori" class="form-control" readonly="readonly">
                                                <option value="<?php echo $row['id_kategori'];?>">
                                                    <?php echo $row['nama_kategori'];?></option>
                                            </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Nama Treatment</td>
                                            <td><input type="text" class="form-control"
                                                value="<?php echo $row['nama_treatment'];?>" readonly="readonly"></td>
                                        </tr>
                                        <tr>
                                            <td>Harga Normal</td>
                                            <td><input type="number" class="form-control"
                                                value="<?php echo $row['harga_normal'];?>" readonly="readonly"></td>
                                        </tr>
                                        <tr>
                                            <td>Harga Discont</td>
                                            <td><input type="number" class="form-control"
                                                value="<?php echo $row['harga_discont'];?>" readonly="readonly"></td>
                                        </tr>
                                        <tr>
                                            <td>Tanggal Update</td>
                                            <td><input type="text" readonly="readonly" class="form-control"
                                                value="<?php echo  date("j F Y, G:i");?>" name="tgl"></td>
                                        </tr>
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