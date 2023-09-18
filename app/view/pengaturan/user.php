<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Haieyelash">
    <meta name="description" content="By Developer Iko Almas">
    <title>Data Profile Document</title>
    <?php 
        include("../tampilan/header.php");

        $id = $_GET['id'];
        $user_level = $_GET['user_level'];
        
        $sql = "SELECT * FROM m_user_data WHERE id=? and user_level=?";
        $row = $koneksi->prepare($sql);
        $row->execute(array($id,$user_level));
        $hasil = $row->fetch();
    ?>
    <script lang="javascript">
        function shw(){
            var pass = document.getElementById('pass').type;
            if(pass == "password"){
                document.getElementById('pass').type = "text";
            }else{
                document.getElementById('pass').type = "password";
            }
        }
    </script>
</head>
<body>
    <?php 
        include("../tampilan/sidebar.php");
    ?>
    <div class="main-content">
        <div class="panel panel-default">
            <div class="panel-body">
                <?php 
                    if(isset($_GET['user_level'])){
                        if($_GET['user_level'] == "admin" || $_GET['user_level'] == "kasir"){
                            ?>
                            <section class="section">
                                <div class="section-header">
                                    <div class="section-header-breadcrumb">
                                        <div class="breadcrumb breadcrumb-item">
                                            <a href="../dashboard/dashboard.php" class="text-decoration-none text-primary">Halaman utama</a></div>
                                        <div class="breadcrumb breadcrumb-item">
                                            <a href="user.php?id=<?=$id;?>&user_level=<?=$_SESSION['user_level']?>" class="text-decoration-none text-primary">Edit Profile</a></div>
                                    </div>
                                </div>
                            </section>
                            <div class="row">
                                <div class="card">
                                    <div class="card-body">
                                        <form action="act-edit.php" method="post" enctype="multipart/form-data">
                                            <div class="table-responsive" style="padding-top: 50px;">
                                            <input type="hidden" name="id" value="<?=$hasil['id']?>">
                                                <div class="img-responsive">
                                                    <img src="../../../assets/image/profile/<?=$_SESSION['foto']?>" class="img-thumbnail" alt="profile" width="64" style="border-radius: 10px; border:1px solid; border-color:blue; top:0; bottom:0; right:20px; position:absolute;" title="<?php echo $_SESSION['username']?>">
                                                </div>
                                                <table class="table table-striped table-bordered">
                                                    <tr>
                                                        <td class="col-lg-4 text-md-start align-items-center" id="fontSize">E-mailing</td>
                                                        <td class="col-lg-8 col-md-4 align-items-center">
                                                            <small>Ketikan E-mailing baru</small>
                                                            <input type="email" name="userEmail" value="<?=$hasil['userEmail']?>" class="form-control">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-lg-4 text-md-start align-items-center" id="fontSize">Username</td>
                                                        <td class="col-lg-8 col-md-4 align-items-center">
                                                            <small>Ketikan username anda</small>
                                                            <input type="text" name="username" value="<?=$hasil['username']?>" class="form-control">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-lg-4 text-md-start align-items-center" id="fontSize">Password</td>
                                                        <td class="col-lg-8 col-md-4 align-items-center">
                                                            <small>Ketikan password baru anda</small>
                                                            <input type="password" name="password" id="pass" value="<?=$hasil['password']?>" class="form-control">
                                                            <input type="checkbox" onclick="shw()"> lihat password
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-lg-4 text-md-start align-items-center" id="fontSize">Jabatan</td>
                                                        <td class="col-lg-8 col-md-4 align-items-center">
                                                        <select name="user_level" class="form-control">
                                                            <option><?=$hasil['user_level'] ?></option>
                                                            <option value="Admin">Admin</option>
                                                            <option value="kasir">Kasir</option>
                                                        </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-lg-4 text-md-start align-items-center" id="fontSize">Telephone :</td>
                                                        <td>
                                                            <small>masukkan number telepone</small>
                                                            <input type="text" class="form-control" value="<?=$hasil['telepone']?>" name="telepone">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-lg-4 text-md-start align-items-center" id="fontSize">Uploud Foto</td>
                                                        <td class="col-lg-8 col-md-4 align-items-center">
                                                            <input type="file" name="foto" class="form-control" style="float: right;" require>
                                                        </td>
                                                    </tr>   
                                                </table>
                                                <div class="modal-footer">
                                                    <button type="submit" name="submit" class="btn btn-primary btn-lg">
                                                        <i class="fas fa-save mx-3"></i>Edit Data
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    }
                ?>
            </div>
        </div>
    </div>
    <?php 
        include("../tampilan/footer.php");
    ?>