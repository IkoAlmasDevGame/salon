<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>Dashboard</title>

    <?php 
        include("../config/config.php");
    ?>
    <link rel="shortcut icon" href="<?=base('assets/icon/haieyelash studio.png')?>" type="image/x-icon">

    <!-- link css -->    
    <link rel="stylesheet" href="<?=base("dist/css/all.min.css")?>">
    <link rel="stylesheet" href="<?=base("dist/css/bootstrapv5223.css")?>">
    <link rel="stylesheet" href="<?=base("dist/css/carousel.css")?>">
    <!-- <link rel="stylesheet" href="<?=base("dist/css/bootstrap.min.css")?>"> -->
    <link rel="stylesheet" href="<?=base("dist/css/card.css")?>">
    <link rel="stylesheet" href="<?=base("dist/css/col-bootstrap.css")?>">
    <link rel="stylesheet" href="<?=base("dist/css/glyphicon.css")?>">
</head>
<body class="bg-info">
    <div class="app">
        <div class="layout">
            <div class="layoutAuthentication">
                <main>
                    <header>
                        <nav class="navbar navbar-default navbar-expand-lg sticky-top">
                            <div class="container-fluid">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-bs-toggle="collapse"
                                        data-bs-target="#bs-example-navbar-collapse">
                                        <span class="sr-only"></span> Menu <i class="fa fa-bars"></i>
                                    </button>
                                </div>

                                <a href="index.php" class="text-decoration-none navbar-brand">
                                    <img src="../../assets/icon/logo_2.jpg" width="32" alt="Logo" class="nav-pills mx-3">
                                    HAIEYLASH STUDIO
                                </a>

                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse">
                                    <ul class="nav navbar-nav navbar-right">
                                        <li class="navbar-item">
                                            <a href="index.php" class="nav-link m-2 menu-item active"
                                                style="font-size: 15px;">Beranda</a>
                                        </li>
                                        <li class="navbar-item">
                                            <a href="tampilan/signin.php" class="nav-link m-2 menu-item active"
                                                style="font-size: 15px;">Login</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </header>
                    <footer class="container-fluid">
                        <section class="col-sm-12 border-top border-black pt-1" style="bottom:0; left:0; position:absolute;">
                            <div class="col-lg-12">
                                <p class="text-black" style="font-size: 16px;">Copyright &copy; <script>
                                        document.write(new Date().getFullYear());
                                    </script>
                                </div>
                                <a href="" style="position: fixed; bottom:0; right:0; z-index: 1000;">
                                    <i class="fab fa-whatsapp" style="font-size:42px; color:green; margin-right:52px; margin-bottom:42px;"></i>
                                </a>
                            </div>
                        </section>
                    </footer>
                </main>
            </div>
        </div>
    </div>
    <script src="<?=base("dist/modules/all.min.js")?>" lang="javascript"></script>
    <script src="<?=base("dist/modules/bootstrap.bundle.js")?>" lang="javascript"></script>
    <script src="<?=base("bootstrap.min.js")?>" lang="javascript"></script>
</body>
</html>