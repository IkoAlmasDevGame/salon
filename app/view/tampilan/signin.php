<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard Login</title>

    <?php 
        include("../../config/config.php");
    ?>
    <link rel="shortcut icon" href="<?=base('assets/icon/haieyelash studio.png')?>" type="image/x-icon">

    <!-- link css -->
    <link rel="stylesheet" href="<?=base("dist/css/all.min.css")?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?=base("dist/css/bootstrapv5222.css")?>">
    <link rel="stylesheet" href="<?=base("dist/css/bootstrapv5223.css")?>">
    <!-- <link rel="stylesheet" href="<?=base("dist/css/toast.css")?>"> -->
    <!-- <link rel="stylesheet" href="<?=base("dist/css/carousel.css")?>"> -->
    <link rel="stylesheet" href="<?=base("dist/css/close.css")?>">
    <link rel="stylesheet" href="<?=base("dist/css/modal.css")?>">
    <link rel="stylesheet" href="<?=base("dist/css/card.css")?>">
    <link rel="stylesheet" href="<?=base("dist/css/col-bootstrap.css")?>">
    <link rel="stylesheet" href="<?=base("dist/css/glyphicon.css")?>">
    <link rel="stylesheet" href="<?=base("dist/css/fontawesome.min.css")?>">
    <!-- <link rel="stylesheet" href="<?=base("dist/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css")?>"> -->
    <!-- <link rel="stylesheet" href="<?=base("dist/css/style-2.css")?>"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@7.2.96/css/materialdesignicons.min.css">

    <!-- <link rel="stylesheet" href="<?=base("dist/css/dataTables.bootstrap4.css")?>"> -->
    <!-- <link rel="stylesheet" href="<?=base("dist/css/jquery.dataTables.min.css")?>"> -->
    <style type="text/css">
    @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Georgia, sans-serif, 'Times New Roman';
    }

    html,
    body {
        width: 100%;
        height: 100%;

        display:flex;
        justify-content: center;
        align-items: center;

        background-color:lightsalmon;
        background-blend-mode: darken;
    }

    ::selection {
        background: #0073e6 !important;
        color: #fff;
    }

    .wrapper {
        overflow: hidden;
        max-width: 420px;
        background: lightcyan;
        padding: 20px;
        border-radius: 15px;
        box-shadow: 0px 15px 20px rgba(0, 0, 0, 0.1);
    }

    .wrapper .title-text {
        display: flex;
        width: 200%;
    }

    .wrapper .title {
        width: 50%;
        font-size: 35px;
        font-weight: 600;
        text-align: center;
        transition: all 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
    }

    .wrapper .slide-controls {
        position: relative;
        display: flex;
        height: 50px;
        width: 100%;
        overflow: hidden;
        margin: 30px 0 10px 0;
        justify-content: space-between;
        border: 1px solid black;
        border-radius: 15px;
    }

    .slide-controls .slide {
        height: 100%;
        width: 100%;
        color: #fff;
        font-size: 18px;
        font-weight: 500;
        text-align: center;
        line-height: 48px;
        cursor: pointer;
        z-index: 1;
        transition: all 0.6s ease;
    }

    .slide-controls label.signup {
        color: #000;
    }

    .slide-controls .slider-tab {
        position: absolute;
        height: 100%;
        width: 50%;
        left: 0;
        z-index: 0;
        border-radius: 15px;
        background: -webkit-linear-gradient(left, #0073e6, #0059b3 #0059b3, #0073e6);
        transition: all 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
    }

    input[type="radio"] {
        display: none;
    }

    #signup:checked~.slider-tab {
        left: 50%;
    }

    #signup:checked~label.signup {
        color: blue;
        cursor: default;
        user-select: none;
    }

    #signup:checked~label.login {
        color: black;
    }

    #login:checked~label.signup {
        color: black;
    }

    #login:checked~label.login {
        color:blue;
        cursor: default;
        user-select: none;
    }

    .wrapper .form-container {
        width: 100%;
        overflow: hidden;
    }

    .form-container .form-inner {
        display: flex;
        width: 200%;
    }

    .form-container .form-inner form {
        width: 50%;
        transition: all 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
    }

    .form-inner form .field {
        height: 50px;
        width: 100%;
        margin-top: 20px;
    }

    .form-inner form .field input {
        height: 100%;
        width: 100%;
        outline: none;
        padding-left: 15px;
        border-radius: 15px;
        border: 1px solid grey;
        border-bottom-width: 2px;
        font-size: 17px;
        transition: all 0.3s ease;
    }

    .form-inner form .field input:focus {
        border-color: #1a75ff;
        /* box-shadow: inset 0 0 3px #fb6aae; */
    }

    .form-inner form .field input::placeholder {
        color: #999;
        transition: all 0.3s ease;
    }

    form .field input:focus::placeholder {
        color: #1a75ff;
    }

    .form-inner form .pass-link {
        margin-top: 5px;
    }

    .form-inner form .signup-link {
        text-align: center;
        margin-top: 30px;
    }

    .form-inner form .pass-link a,
    .form-inner form .signup-link a {
        color: #1a75ff;
        text-decoration: none;
    }

    .form-inner form .pass-link a:hover,
    .form-inner form .signup-link a:hover {
        text-decoration: underline;
    }

    form .btn {
        height: 50px;
        width: 100%;
        border-radius: 15px;
        position: relative;
        overflow: hidden;
    }

    form .btn .btn-layer {
        height: 100%;
        width: 300%;
        position: absolute;
        left: -100%;
        background: -webkit-linear-gradient(left, lightskyblue, #004080, lightskyblue, #0073e6);
        border-radius: 15px;
        transition: all 0.4s ease;
        ;
    }

    form .btn:hover .btn-layer {
        left: 0;
    }

    form .btn input[type="submit"] {
        height: 100%;
        width: 100%;
        z-index: 1;
        position: relative;
        background: none;
        border: none;
        color: #fff;
        padding-left: 0;
        border-radius: 15px;
        font-size: 20px;
        font-weight: 500;
        cursor: pointer;
    }
    </style>
</head>

<body>
    <div class="app">
        <div class="layout">
            <div class="layoutAuthentication">
                <main role="alert">
                    <?php 
                        if(isset($_GET['pesan'])){
                            if($_GET['pesan'] == "gagal"){
                                ?>
                                <div class="alert alert-info mb-5" role="alert">
                                    <strong>Perhatian !</strong>
                                    <button type="button" class="close" data-bs-dismiss="alert" aria-hidden="true"
                                    onclick="javascript:return location.href='signin.php'" style="font-size: 19px;">&times;</button>
                                    <div class="toast-body">
                                        harap coba lagi, userEmail / password anda.
                                    </div>
                                </div>
                                <?php
                            }
                            if($_GET['pesan'] == "belummasuk"){
                                ?>
                                <div class="alert alert-warning mb-5" role="alert">
                                    <strong>Perhatian !</strong>
                                    <button type="button" class="close" data-bs-dismiss="alert" aria-hidden="true"
                                    onclick="javascript:return location.href='signin.php'" style="font-size: 19px;">&times;</button>
                                    <div class="toast-body">
                                        Anda belum berhasil masuk ke halaman
                                        <div class="toast-body">
                                        dashboard utama.
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                            if($_GET['pesan'] == "kosong"){
                                ?>
                                <div class="alert alert-danger mb-5" role="alert">
                                    <strong>Perhatian !</strong>
                                    <button type="button" class="close" data-bs-dismiss="alert" aria-hidden="true"
                                    onclick="javascript:return location.href='signin.php'" style="font-size: 19px;">&times;</button>
                                    <div class="toast-body">
                                        Anda tidak boleh mengkosongkan email dan password.
                                    </div>
                                </div>
                                <?php
                            }
                        }
                    ?>
                </main>
                <main role="dialog">
                    <div class="wrapper pt-5" style="margin-top:-2.8rem; border:1px solid;">
                        <div class="title-text">
                            <div class="title login">Login Form</div>
                            <div class="title signup">Signup Form</div>
                        </div>
                        <div class="form-container">
                            <div class="slide-controls">
                                <input type="radio" name="slide" id="login" checked>
                                <input type="radio" name="slide" id="signup">
                                <label for="login" class="slide login">Login</label>
                                <label for="signup" class="slide signup">Signup</label>
                                <div class="slider-tab"></div>
                            </div>
                            <div class="form-inner">
                                <form action="../../action/act-signin.php" method="post" class="login" enctype="multipart/form-data">
                                    <fieldset class="form-group row align-items-center pt-1">
                                        <label class="col-lg-1 ms-3 me-3 text-center align-items-center">
                                            <i class="fa fa-envelope mt-2" style="font-size: 20px;"></i>
                                        </label>
                                        <div class="col-lg-10 col-md-2 align-items-center">
                                            <small>masukkan email anda / username</small>
                                            <input type="text" name="userEmail" class="form-control" require>
                                        </div>
                                    </fieldset>
                                    <fieldset class="form-group row align-items-center pt-1">
                                        <label class="col-lg-1 ms-3 me-3 text-center align-items-center">
                                            <i class="fa fa-lock mt-2" style="font-size: 20px;"></i>
                                        </label>
                                        <div class="col-lg-10 col-md-2 align-items-center">
                                            <small>masukkan password anda</small>
                                            <input type="password" name="password" id="pass" class="form-control" require>
                                            <input type="checkbox" onclick="shw()"> show password
                                        </div>
                                    </fieldset>
                                    <div class="pass-link text-center"><a href="#">Forgot password?</a></div>
                                    <div class="field btn">
                                        <div class="btn-layer"></div>
                                        <input type="submit" value="Login" name="signin_submit">
                                    </div>
                                    <div class="signup-link">Not a member? <a href="">Signup now</a></div>
                                </form>
                                <form action="../../action/act-signup.php" method="post" class="signup" enctype="multipart/form-data">
                                    <fieldset class="form-group row align-items-center pt-1">
                                        <label class="col-lg-1 ms-3 me-3 text-center align-items-center">
                                            <i class="fa fa-envelope mt-2" style="font-size: 20px;"></i>
                                        </label>
                                        <div class="col-lg-10 col-md-2 align-items-center">
                                            <small>masukkan email baru anda</small>
                                            <input type="email" name="userEmail" class="form-control" require>
                                        </div>
                                    </fieldset>
                                    <fieldset class="form-group row align-items-center pt-1">
                                        <label class="col-lg-1 ms-3 me-3 text-center align-items-center">
                                            <i class="fa fa-user mt-2" style="font-size: 20px;"></i>
                                        </label>
                                        <div class="col-lg-10 col-md-2 align-items-center">
                                            <small>masukkan username baru anda</small>
                                            <input type="text" name="username" class="form-control" require>
                                        </div>
                                    </fieldset>
                                    <fieldset class="form-group row align-items-center pt-1">
                                        <label class="col-lg-1 ms-3 me-3 text-center align-items-center">
                                            <i class="fa fa-lock mt-2" style="font-size: 20px;"></i>
                                        </label>
                                        <div class="col-lg-10 col-md-2 align-items-center">
                                            <small>masukkan password anda</small>
                                            <input type="password" name="password" id="passwd" class="form-control" require>
                                            <input type="checkbox" onclick="shwd()"> show password
                                        </div>
                                    </fieldset>
                                    <fieldset class="form-group row align-items-center pt-1">
                                        <label class="col-lg-1 ms-3 me-3 text-center align-items-center">
                                            <i class="fa fa-phone mt-2" style="font-size: 20px;"></i>
                                        </label>
                                        <div class="col-lg-10 col-md-2 align-items-center">
                                            <small>masukkan no telephone</small>
                                            <input type="text" name="telepone" class="form-control" require>
                                        </div>
                                    </fieldset>
                                    <fieldset class="form-group row align-items-center pt-1">
                                        <label class="col-lg-1 ms-3 me-3 text-center align-items-center">
                                            <i class="fa fa-id-card mt-2" style="font-size: 20px;"></i>
                                        </label>
                                        <div class="col-lg-10 col-md-2 align-items-center">
                                            <small>card Jabatan</small>
                                            <select name="user_level" class="form-control">
                                                <option>Pilih card Jabatan</option>
                                                <option value="admin">Administrasi</option>
                                                <option value="kasir">Cashier</option>
                                            </select>
                                        </div>
                                    </fieldset>
                                    <div class="field btn">
                                        <div class="btn-layer"></div>
                                        <input type="submit" value="Signup" name="signup_submit">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="container-fluid">
                    <section class="col-sm-12 border-top border-black pt-1" style="bottom:0; left:0; position:absolute;">
                        <div class="col-lg-12">
                            <p class="text-black" style="font-size: 14px;">Copyright &copy; <script>
                                    document.write(new Date().getFullYear());
                                </script>
                            </div>
                            <a href="" style="position: absolute; bottom:0; right:0; z-index: 1000;">
                                <i class="fab fa-whatsapp" style="font-size:42px; color:green; margin-right:52px; margin-bottom:42px;"></i>
                            </a>
                            <p style="position: absolute; bottom:0; right:0;">
                                <i class="fa fa-map-marked-alt"></i>
                                Jl. xx. xxxxxx. xx/xx, xxxxxx, xxxxxx, xxxxxxx
                            </p>
                        </div>
                    </section>
                </footer>
            </div>
        </div>
    </div>
    <script src="<?=base("dist/modules/all.min.js")?>" lang="javascript"></script>
    <script src="<?=base("dist/modules/bootstrap.bundle.js")?>" lang="javascript"></script>
    <script src="<?=base("dist/modules/bootstrap.min.js")?>" lang="javascript"></script>
    <!-- <script src="<?=base("dist/sweetalert2/sweetalert2.min.js")?>" lang="javascript"></script> -->
    <script lang="javascript">
    function shw() {
        var pass = document.getElementById('pass').type;
        if (pass == "password") {
            document.getElementById('pass').type = "text";
        } else {
            document.getElementById('pass').type = "password";
        }
    }

    function shwd() {
        var pass = document.getElementById('passwd').type;
        if (pass == "password") {
            document.getElementById('passwd').type = "text";
        } else {
            document.getElementById('passwd').type = "password";
        }
    }

    const loginText = document.querySelector(".title-text .login");
    const loginForm = document.querySelector("form.login");
    const loginBtn = document.querySelector("label.login");
    const signupBtn = document.querySelector("label.signup");
    const signupLink = document.querySelector("form .signup-link a");
    signupBtn.onclick = (() => {
        loginForm.style.marginLeft = "-50%";
        loginText.style.marginLeft = "-50%";
    });
    loginBtn.onclick = (() => {
        loginForm.style.marginLeft = "0%";
        loginText.style.marginLeft = "0%";
    });
    signupLink.onclick = (() => {
        signupBtn.click();
        return false;
    });
    </script>
</body>

</html>