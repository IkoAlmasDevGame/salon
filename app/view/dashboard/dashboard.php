<?php 
include("../tampilan/header.php");
include("../tampilan/sidebar.php");

$rowKategori = $lihat -> kategori_row();
$rowTreatment = $lihat -> treatment_row();
$jumlah = $lihat->jumlah();
?>

<div class="main-content">
    <div class="panel panel-default bg-info" style="min-width:1400px; min-height:720px;">
        <div class="panel-body">
            <section class="section">
                <div class="section-header">
                    <h4 class="panel-title fw-bold font-timesnew" style="font-size: 18px;">Halaman utama</h4>
                </div>
                <?php 
        if(isset($_GET['pesan'])){
            if($_GET['pesan'] == "berhasil"){
                ?>
                <div class="alert alert-success" role="alert">
                    <strong>Success </strong>Anda berhasil login di website ini.
                    <button type="button" class="close" data-bs-dismiss="modal"
                        onclick="javascript:location.href='dashboard.php'" aria-hidden="true">&times;</button>
                </div>
                <?php
            }
            if($_GET['pesan'] == "edit"){
                ?>
                <div class="alert alert-warning font-timesnew text-black" role="alert">
                    <strong class="text-black fw-bold font-timesnew">Success ! </strong>Anda Telah mengedit data baru.
                    <button type="button" class="close" data-bs-dismiss="modal"
                        onclick="javascript:return location.href='dashboard.php'" aria-hidden="true">&times;</button>
                </div>
                <?php
            }
            if($_GET['pesan'] == "gagal"){
                ?>
                <div class="alert alert-warning font-timesnew text-black" role="alert">
                    <strong class="text-black fw-bold font-timesnew">Perhatian ! </strong>Anda gagal menambahkan data
                    baru.
                    <button type="button" class="close" data-bs-dismiss="modal"
                        onclick="javascript:return location.href='dashboard.php'" aria-hidden="true">&times;</button>
                </div>
                <?php
            }
        }
    ?>
            </section>
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <div class="d-flex justify-content-around align-items-center flex-wrap">
                                <div class="card bg-primary col-sm-2">
                                    <div class="card-body text-center">
                                        <i class="fas fa-cubes" style="font-size: 28px;"></i>
                                        <div style="font-size: 18px;" class="text-center pt-4">
                                            <?php echo number_format($rowKategori) ?>
                                        </div>
                                    </div>
                                    <a href="../kategori/master-kategori.php"
                                        class="nav-link text-right text-decoration-none pb-3 pe-3">
                                        <span class="font-weight-600" style="font-size: 14px;">Data Kategori <i
                                                class="fas fa-arrow-right"></i></span>
                                    </a>
                                </div>
                                <div class="card bg-primary col-sm-2">
                                    <div class="card-body text-center">
                                        <i class="fas fa-archive" style="font-size: 28px;"></i>
                                        <div style="font-size: 18px;" class="text-center pt-4">
                                            <?php echo number_format($rowTreatment) ?>
                                        </div>
                                    </div>
                                    <a href="../treatment/data-master.php"
                                        class="nav-link text-right text-decoration-none pb-3 pe-3">
                                        <span class="font-weight-600" style="font-size: 14px;">Data Treatment <i
                                                class="fas fa-arrow-right"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center align-items-center">
                    <div class="card" style="min-width: 768px; min-height:360px;">
                        <div class="card-body">
                            Pendapatan Haieyelash Studio
                            <div class="border-bottom"></div>
                            <div class="text-center" style="padding-top: 98px;">
                                <i class="fas fa-money-bill-alt" style="font-size: 36px;"></i>
                            </div>
                            <div class="text-center">
                                <div style="padding-top: 16px; font-size:18px;">
                                    Rp. <?php echo number_format($jumlah['bayar']); ?>
                                </div>
                            </div>
                        </div>
                        <a href="" class="text-decoration-none font-timesnew fw-lighter text-right pb-3 pe-3"
                            style="font-size: 16px;">
                            Laporan Keuangan <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php 
include("../tampilan/footer.php");
?>