<?php 
if($_SESSION['user_level' == ""]){
    header("location:../tampilan/signin.php?pesan=belummasuk");
    exit();
}

if(!empty($_SESSION['user_level'] == "admin" || $_SESSION['user_level'] == "kasir")){
    ?>
    <style type="text/css">
        #fontSize {
            font-size: 14px;
            font-family: monospace;
        }
        #iconSize {
            font-size: 14px;
        }
    </style>
    <div class="main-wrapper">
        <nav class="navbar navbar-default navbar-expand-lg main-navbar">
            <form>
                <div class="row">
                    <div class="img-responsive">
                        <img src="../../../assets/image/profile/<?=$_SESSION['foto']?>" alt="profile" width="64" style="border-radius: 20px; top:0; bottom:0; right:20px; position:absolute;" title="<?php echo $_SESSION['username']?>">
                    </div>
                </div>
                <ul class="list-unstyled navbar-nav" style="font-size:18px;">
                    <!-- <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i
                        class="fas fa-bars text-black" style="font-size: 18px;"></i></a></li> -->
                        <li class="sidebar-brand sidebar-brand-sm">
                            <img src="../../../assets/icon/haieyelash studio.png" alt="Logo" width="64">
                        </li>
                    <li style="padding-top:24px;">
                        <a href="../dashboard/dashboard.php" class="text-decoration-none nav-link">
                        Haieyelash Studio </a>
                    </li>
                </ul>
            </form>
        </nav>
        <div class="main-sidebar">
            <aside id="sidebar-wrapper">
                <!-- <div class="sidebar-brand sidebar-brand-sm">
                    <img src="../../../assets/icon/haieyelash studio.png" alt="Logo" class="sidebar-brand-sm" width="64">
                </div> -->
                <ul class="sidebar-menu">
                    <li class="menu-header pt-3">
                        Halaman Utama
                        <a href="../dashboard/dashboard.php" class="nav-link">
                            <i class="fa fa-fire fw-bold" id="iconSize"></i>
                            <span class="font-weight-600 mx-3" id="fontSize">Halaman utama</span>
                        </a>
                    </li>
                    <?php 
                        if(!empty($_SESSION['user_level'] == "admin")){
                            ?>
                            <li class="menu-header pt-3">
                                Master Data
                                <a href="../treatment/data-master.php" class="nav-link">
                                    <i class="fas fa-database" id="iconSize"></i>
                                    <span class="font-weight-600 mx-3" id="fontSize">Data Master</span>
                                </a>
                                <a href="../kategori/master-kategori.php" class="nav-link">
                                    <i class="fas fa-cubes" id="iconSize"></i>
                                    <span class="font-weight-600 mx-3" id="fontSize">Data Kategori</span>
                                </a>
                            </li>
                            <li class="menu-header pt-3">
                                Master Laporan
                                <a href="../laporan/laporan.php" class="nav-link">
                                    <i class="fas fa-book" id="iconSize"></i>
                                    <span class="font-weight-600 mx-2" id="fontSize">Laporan Keuangan</span>
                                </a>
                                <!-- <a href="" class="nav-link">
                                    <i class="" id="iconSize"></i>
                                    <span class="font-weight-600 mx-2" id="fontSize"></span>
                                </a> -->
                            </li>
                            <?php
                        }
                    ?>
                    <?php 
                        if(!empty($_SESSION['user_level'] == "kasir")){
                            ?>
                            <li class="menu-header pt-3">
                                Master Data Kasir
                                <a href="../kasir/kasir.php" class="nav-link">
                                    <i class="fas fa-cash-register" id="iconSize"></i>
                                    <span class="font-weight-600 mx-3" id="fontSize">Master Kasir</span>
                                </a>
                                <a href="../laporan/laporan.php" class="nav-link">
                                    <i class="fas fa-book" id="iconSize"></i>
                                    <span class="font-weight-600 mx-2" id="fontSize">Laporan Keuangan</span>
                                </a>
                            </li>
                            <?php
                        }
                    ?>
                    <?php 
                        if($_SESSION['user_level'] == "admin" || $_SESSION['user_level'] == "kasir"){
                            ?>
                            <li class="menu-header pt-3">
                                Pengaturan
                                <?php
                                    if($_SESSION['user_level'] == "kasir"){ 
                                    ?>
                                        <a href="../dashboard/log.php" class="nav-link">
                                            <i class="fas fa-clock" id="iconSize"></i>
                                            <span class="font-weight-600 mx-3" id="fontSize">Data Log</span>
                                        </a>
                                    <?php
                                    }
                                ?>
                                <a href="../pengaturan/user.php?id=<?=$_SESSION['id']?>&user_level=<?=$_SESSION['user_level']?>" class="nav-link">
                                    <i class="fas fa-user-alt" id="iconSize"></i>
                                    <span class="font-weight-600 mx-3" id="fontSize">Profile</span>
                                </a>
                                <?php 
                                    if($_SESSION['user_level'] == "admin"){
                                        ?>
                                        <a href="../dashboard/list.php" class="nav-link">
                                            <i class="fas fa-user-alt" id="iconSize"></i>
                                            <span class="font-weight-600 mx-3" id="fontSize">Data user</span>
                                        </a>
                                        <a href="../dashboard/log.php" class="nav-link">
                                            <i class="fas fa-clock" id="iconSize"></i>
                                            <span class="font-weight-600 mx-3" id="fontSize">Data Log</span>
                                        </a>
                                        <?php
                                    }
                                ?>
                                <a href="../tampilan/header.php?aksi=keluar" 
                                onclick="javascript:return confirm('Apakah anda ingin keluar dari website ?')" class="nav-link">
                                    <i class="fas fa-sign-out-alt has-icon text-danger mx-1" id="iconSize"></i>
                                    <span class="font-weight-600 mx-3 text-danger" id="fontSize">Logout</span>
                                </a>
                            </li>
                        <?php
                        }
                    ?>
                </ul>
            </aside>
        </div>
    </div>
    <?php
}else{
    header("location:../tampilan/signin.php?pesan=gagal");
    exit();
}
?>