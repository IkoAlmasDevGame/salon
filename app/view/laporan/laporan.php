<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Laporan</title>
    <?php
    include("../tampilan/header.php");
    $bulan_tes = array(
        '01' => "Januari",
        '02' => "Februari",
        '03' => "Maret",
        '04' => "April",
        '05' => "Mei",
        '06' => "Juni",
        '07' => "Juli",
        '08' => "Agustus",
        '09' => "September",
        '10' => "Oktober",
        '11' => "November",
        '12' => "Desember"
    );
    ?>
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

                        </div>
                    </section>
                    <div class="row">
                        <div class="col-sm-12">
                            <h4>
                                <!--<a  style="padding-left:2pc;" href="fungsi/hapus/hapus.php?laporan=jual" onclick="javascript:return confirm('Data Laporan akan di Hapus ?');"><button class="btn btn-danger">RESET</button></a>-->
                                <?php if (!empty($_GET['cari'])) { ?>
                                Data Laporan Penjualan <?= $bulan_tes[$_POST['bln']]; ?> <?= $_POST['thn']; ?>
                                <?php } elseif (!empty($_GET['hari'])) { ?>
                                Data Laporan Penjualan <?= $_POST['hari']; ?>
                                <?php } else { ?>
                                Data Laporan Penjualan <?= $bulan_tes[date('m')]; ?> <?= date('Y'); ?>
                                <?php } ?>
                            </h4>
                            <div class="card">
                                <div class="card-body p-0">
                                    <form method="post" action="laporan.php?cari=ok">
                                        <table class="table table-striped">
                                            <tr>
                                                <th>
                                                    Pilih Bulan
                                                </th>
                                                <th>
                                                    Pilih Tahun
                                                </th>
                                                <th>
                                                    Aksi
                                                </th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <select name="bln" class="form-control">
                                                        <option selected="selected">Bulan</option>
                                                        <?php
                                                        $bulan = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
                                                        $jlh_bln = count($bulan);
                                                        $bln1 = array('01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12');
                                                        $no = 1;
                                                        for ($c = 0; $c < $jlh_bln; $c += 1) {
                                                            echo "<option value='$bln1[$c]'> $bulan[$c] </option>";
                                                            $no++;
                                                        }
                                                        ?>
                                                    </select>
                                                </td>
                                                <td>
                                                    <?php
                                                    $now = date('Y');
                                                    echo "<select name='thn' class='form-control'>";
                                                    echo '<option selected="selected">Tahun</option>';
                                                    for ($a = 2000; $a <= $now; $a++) {
                                                        echo "<option value='$a'>$a</option>";
                                                    }
                                                    echo "</select>";
                                                    ?>
                                                </td>
                                                <td>
                                                    <input type="hidden" name="periode" value="ya">
                                                    <button class="btn btn-primary">
                                                        <i class="fa fa-search"></i> Cari
                                                    </button>
                                                    <a href="laporan.php" class="btn btn-success">
                                                        <i class="glyphicon glyphicon-refresh"></i> Refresh</a>

                                                    <?php if (!empty($_GET['cari'])) { ?>
                                                    <a href="excel.php?cari=yes&bln=<?= $_POST['bln']; ?>&thn=<?= $_POST['thn']; ?>"
                                                        class="btn btn-info"><i class="fa fa-download"></i>
                                                        Excel</a>
                                                    <?php } else { ?>
                                                    <a href="excel.php" class="btn btn-info"><i
                                                            class="fa fa-download"></i>
                                                        Excel</a>
                                                    <?php } ?>
                                                </td>
                                            </tr>
                                        </table>
                                    </form>
                                    <form method="post" action="laporan.php?hari=cek">
                                        <table class="table table-striped">
                                            <tr>
                                                <th>
                                                    Pilih Hari
                                                </th>
                                                <th>
                                                    Aksi
                                                </th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input type="date" value="<?= date('Y-m-d');?>" class="form-control"
                                                        name="hari">
                                                </td>
                                                <td>
                                                    <input type="hidden" name="periode" value="ya">
                                                    <button class="btn btn-primary">
                                                        <i class="fa fa-search"></i> Cari
                                                    </button>
                                                    <a href="laporan.php" class="btn btn-success">
                                                        <i class="glyphicon glyphicon-refresh"></i> Refresh</a>

                                                    <?php if(!empty($_GET['hari'])){?>
                                                    <a href="excel.php?hari=cek&tgl=<?= $_POST['hari'];?>"
                                                        class="btn btn-info"><i class="fa fa-download"></i>
                                                        Excel</a>
                                                    <?php }else{?>
                                                    <a href="excel.php" class="btn btn-info"><i
                                                            class="fa fa-download"></i>
                                                        Excel</a>
                                                    <?php }?>
                                                </td>
                                            </tr>
                                        </table>
                                    </form>
                                </div>
                            </div>
                            <br>
                            <br>
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered w-100 table-sm" id="example1">
                                        <thead>
						                	<tr style="background:#DFF0D8;color:#333;">
						                		<th> No</th>
						                		<th> ID Treatment</th>
						                		<th> Nama Treatment</th>
						                		<th style="width:10%;"> Jumlah</th>
						                		<th style="width:10%;"> Modal Normal</th>
						                		<th style="width:10%;"> Modal Discont</th>
						                		<th style="width:10%;"> Total</th>
						                		<th> Kasir</th>
						                		<th> Tanggal Input</th>
						                	</tr>
						                </thead>
                                        <tbody>
                                            <?php 
                                            $no=1; 
                                            if(!empty($_GET['cari'])){
                                                $periode = $_POST['bln'].'-'.$_POST['thn'];
                                                $no=1; 
                                                $jumlah = 0;
                                                $bayar = 0;
                                                $row = $lihat-> periode_jual($periode);
                                            }elseif(!empty($_GET['hari'])){
                                                $hari = $_POST['hari'];
                                                $no=1; 
                                                $jumlah = 0;
                                                $bayar = 0;
                                                $row = $lihat-> hari_jual($hari);
                                            }else{
                                                $row = $lihat-> jual();
                                            }
                                            ?>
                                            <?php 
                                            foreach ($row as $isi) {
                                                $bayar += $isi['total'];
									            $modal1 += $isi['harga_normal'];
									            $modal2 += $isi['harga_discont'];
									            $jumlah += $isi['jumlah'];
                                                $keperluan += $isi['total'] - ($isi['harga_normal'] + $isi['harga_discount']);
                                                ?>
                                                <tr>
								                    <td><?php echo $no;?></td>
								                    <td><?php echo $isi['id_treatment'];?></td>
								                    <td><?php echo $isi['nama_treatment'];?></td>
								                    <td><?php echo $isi['jumlah'];?> </td>
								                    <td>Rp.<?php echo number_format($isi['harga_normal']* $isi['jumlah']);?>,-</td>
								                    <td>Rp.<?php echo number_format($isi['harga_discont']* $isi['jumlah']);?>,-</td>
								                    <td>Rp.<?php echo number_format($isi['total']);?>,-</td>
								                    <td><?php echo $_SESSION['username'];?></td>
								                    <td><?php echo $isi['tanggal_input'];?></td>
                                                </tr>
                                                <?php
                                                $no++;
                                                }
                                            ?>
                                        </tbody>
                                        <tfoot>
						                	<tr>
						                		<th colspan="3">Total Terjual</td>
						                		<th><?php echo $jumlah;?></td>
						                		<th>Rp.<?php echo number_format($modal1);?>,-</th>
						                		<th>Rp.<?php echo number_format($modal2);?>,-</th>
						                		<th>Rp.<?php echo number_format($bayar);?>,-</th>
						                		<th style="background:#0bb365;color:#fff;">Keuntungan</th>
						                		<th style="background:#0bb365;color:#fff;">Rp.<?php echo number_format($keperluan);?>,-</th>
						                	</tr>
						                </tfoot>
                                        </table>
                                    </div>
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