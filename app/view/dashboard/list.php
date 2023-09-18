<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Haieyelash">
    <meta name="description" content="By Developer Iko Almas">

    <title>List Karyawan Salon</title>

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
                        <h4 class="panel-title fw-bold font-timesnew">List Karyawan</h4>
                        <div class="section-header-breadcrumb">
                            <div class="breadcrumb breadcrumb-item">
                                <a href="dashboard.php" class="text-decoration-none text-primary">Halaman utama</a></div>
                            <div class="breadcrumb breadcrumb-item">
                                <a href="list.php" class="text-decoration-none text-primary">List Karyawan Salon</a></div>
                        </div>
                    </div>
                </section>
                <div class="row">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-header">
                                <a href="list.php" onclick="javascript:return confirm('Apakah anda ingin refresh page ini ?')" 
                                class="btn btn-warning btn-lg" style="position: absolute; top:0; right:20px;">
                                    <i class="glyphicon glyphicon-refresh"></i>
                                </a>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="example1">
                                    <thead>
                                        <tr>
                                            <th style="width: 5%;">No</th>
                                            <th style="width: 25%;">Nama Karyawan</th>
                                            <th>Jabatan</th>
                                            <th>IP Address</th>
                                            <th>Browser</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            $row = $lihat -> karyawan();
                                            foreach ($row as $isi) {
                                                ?>
                                                <tr>
                                                    <td><?php echo $no=1;$no++; ?></td>
                                                    <td><?php echo $isi['username'] ?></td>
                                                    <td><?php echo $isi['user_level'] ?></td>
                                                    <td><?php echo get_ip_address(); ?></td>
                                                    <td><?php echo get_client_browser(); ?></td>
                                                </tr>
                                                <?php
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