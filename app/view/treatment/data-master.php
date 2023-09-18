<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Haieyelash">
    <meta name="description" content="By Developer Iko Almas">

    <title>Data Master Treatment</title>

    <?php 
        include("../tampilan/header.php");
    ?>
    <link href="https://fonts.cdnfonts.com/css/3-of-9-barcode" rel="stylesheet">
</head>
<body>
    <?php 
        include("../tampilan/sidebar.php");
    ?>
    <div class="main-content">
        <div class="panel panel-default">
            <div class="panel-body">
                <section class="section">
                    <div class="section-header">
                        <h4 class="panel-title fw-bold font-timesnew">Data Master Treatment</h4>
                        <div class="section-header-breadcrumb">
                            <div class="breadcrumb breadcrumb-item">
                                <a href="../dashboard/dashboard.php" class="text-decoration-none text-primary">
                                    Halaman utama </a></div>
                            <div class="breadcrumb breadcrumb-item">
                                <a href="data-master.php" class="text-decoration-none text-primary">
                                    Data Master Treatment </a></div>
                        </div>
                    </div>
                    <?php 
                        if(isset($_GET['pesan'])){
                            if($_GET['pesan'] == "hapus"){
                            ?>
                                <div class="col-sm-12">
                                    <div class="alert alert-danger" style="right: 0; bottom:0; top:0;" role="alert">
                                        <strong>Perhatian !</strong>Anda telah menghapus barang ini.
                                        <button type='button' class="close" data-bs-dismiss='alert' aria-label='Close'
                                         onclick="window.location = 'master-kategori.php'">
                                            <span aria-hidden='true'>&times;</span>
                                        </button>
                                    </div>
                                </div>
                            <?php
                            }
                            if($_GET['pesan'] == "tambah"){
                            ?>
                                <div class="col-sm-12">
                                    <div class="alert alert-info" style="right: 0; bottom:0; top:0;" role="alert">
                                        <strong>Perhatian !</strong>Anda telah menambahkan data produk.
                                        <button type='button' class="close" data-bs-dismiss='alert' aria-label='Close'
                                         onclick="window.location = 'master-kategori.php'">
                                            <span aria-hidden='true'>&times;</span>
                                        </button>
                                    </div>
                                </div>
                            <?php
                            }
                            if($_GET['pesan'] == "edit"){
                            ?>
                                <div class="col-sm-12">
                                    <div class="alert alert-info" style="right: 0; bottom:0; top:0;" role="alert">
                                        <strong>Perhatian !</strong>Anda telah mengubah data produk.
                                        <button type='button' class="close" data-bs-dismiss='alert' aria-label='Close'
                                         onclick="window.location = 'master-kategori.php'">
                                            <span aria-hidden='true'>&times;</span>
                                        </button>
                                    </div>
                                </div>
                            <?php
                            }
                        }
                    ?>
                </section>
                <div class="row">
                    <div class="card">
                        <div class="card-header-form">
                            <button type="button" class="btn btn-primary btn-lg me-2" data-bs-toggle="modal"
                                data-bs-target="#myModal">
                                <i class="fa fa-plus"></i> Insert Data</button>
                            </button>
                            <a href="data-master.php" class="btn btn-success btn-lg">
                                <i class="glyphicon glyphicon-refresh"></i> Refresh Data</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered" id="example1">
                                    <thead>
                                        <tr>
                                            <th style="width: 5%;">No</th>
                                            <th style="width: 5%;">Barcode</th>
                                            <th>Nama Treatment</th>
                                            <th>Nama Kategori</th>
                                            <th>Harga Normal</th>
                                            <th>Harga Discount</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            $hasil = $lihat -> treatment();
                                            $no = 1;
                                            foreach ($hasil as $isi) {
                                                ?>
                                                <tr>
                                                    <td class="text-center"><?php echo $no; ?></td>
                                                    <td style="font-family:'3 of 9 Barcode', sans-serif; font-size:18px;">
                                                        <?php echo $isi['id_treatment']; ?></td>
                                                    <td><?php echo $isi['nama_treatment']; ?></td>
                                                    <td><?php echo $isi['nama_kategori']; ?></td>
                                                    <td><?php echo number_format($isi['harga_normal']); ?></td>
                                                    <td><?php echo number_format($isi['harga_discont']); ?></td>
                                                    <td>
                                                        <a href="act-hapus.php?id=<?=$isi['id_treatment']?>" onclick="javascript:return confirm('Apakah kamu ingin menghapus data ini ?')"
                                                         class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                                        <a href="edit.php?id=<?=$isi['id_treatment']?>" onclick="javascript:return confirm('Apakah kamu ingin edit data ini ?')"
                                                         class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                                        <a href="detail.php?id=<?=$isi['id_treatment']?>" onclick="javascript:return confirm('Apakah kamu ingin me-review data ini ?')"
                                                         class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
                                                    </td>
                                                </tr>
                                                <?php
                                                $no++;
                                            }
                                        ?>
                                    </tbody>
                                </table>
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