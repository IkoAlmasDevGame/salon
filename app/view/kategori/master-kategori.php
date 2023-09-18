<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Haieyelash">
    <meta name="description" content="By Developer Iko Almas">
    <title>Data Master Kategori</title>

    <?php 
        include("../tampilan/header.php");
    ?>
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
                        <h4 class="panel-title fw-bold font-timesnew">Data Master Kategori</h4>
                        <div class="section-header-breadcrumb">
                            <div class="breadcrumb breadcrumb-item">
                                <a href="../dashboard/dashboard.php" class="text-decoration-none text-primary">
                            Halaman utama </a></div>
                            <div class="breadcrumb breadcrumb-item">
                                <a href="master-kategori.php" class="text-decoration-none text-primary">
                            Data Master Kategori </a></div>
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
                        <div class="card-body">
                            <div class="card-header-form">
                                <a href="master-kategori.php" class="btn btn-success btn-lg">
                                    <i class="glyphicon glyphicon-refresh"></i> Refresh Data</a>
                                <form method="POST" action="act-edit.php">
                                        <?php
                                            if (!empty($_GET['id'])) {
                                                $id = $_GET['id'];
                                                $sql = "SELECT * FROM m_kategori WHERE id_kategori = '$id'";
                                                $row = $kon->query($sql);
                                                $edit = $row->fetch_array();
                                            ?>
                                        <table>
                                            <tr>
                                                <td style="width:25pc;" class="pt-3"><input type="text" class="form-control"
                                                        value="<?= $edit['nama_kategori']; ?>" required name="kategori"
                                                        placeholder="Masukan Kategori Barang Baru">
                                                    <input type="hidden" name="id" value="<?= $edit['id_kategori']; ?>">
                                                </td>
                                                <td style="padding-left:10px;" class="pt-3"><button id="tombol-simpan"
                                                        class="btn btn-primary" type="submit"><i class="fa fa-edit"></i>
                                                        Ubah Data</button></td>
                                            </tr>
                                        </table>
                                    </form>
                                    <?php } else { ?>
                                    <form method="POST" action="act-tambah.php">
                                        <table>
                                            <tr>
                                                <td style="width:25pc;" class="pt-3"><input type="text" class="form-control" required
                                                        name="kategori" placeholder="Masukan Kategori Barang Baru"></td>
                                                <td style="padding-left:10px;" class="pt-3"><button id="tombol-simpan"
                                                        class="btn btn-primary"><i class="fa fa-plus"></i>
                                                        Insert Data</button></td>
                                            </tr>
                                        </table>
                                    </form>
                                <?php } ?>
                            </div>
                            <div class="table-responsive pt-4">
                                <table class="table table-bordered table-striped" id="example1">
                                    <thead>
                                        <tr>
                                            <th style="width: 5%;">No</th>
                                            <th>Nama Kategori</th>
                                            <th>Tanggal Input</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            $hasil = $lihat -> kategori();
                                            $no = 1;
                                            foreach ($hasil as $isi) {
                                                ?>
                                                <tr>
                                                    <td class="text-center"><?php echo $no; ?></td>
                                                    <td><?php echo $isi['nama_kategori']; ?></td>
                                                    <td><?php echo $isi['tgl_input']; ?></td>
                                                    <td>
                                                        <a href="master-kategori.php?id=<?php echo $isi['id_kategori'];?>"><button
                                                            class="btn btn-warning btn-sm">Edit</button></a>
                                                        <a href="act-hapus.php?id=<?=$isi['id_kategori']?>"
                                                            onclick="javascript:return confirm('Hapus Data Kategori ?');"><button 
                                                            class="btn btn-danger btn-sm">Hapus</button></a>
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