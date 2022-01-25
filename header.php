<?php
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Meta -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">     
    <meta name="description" content="RT Imobiliária">
    <meta property="og:image" content="/img/whatsapp.png">
    <meta property="og:title" content="RT Imobiliária">
    <meta property="og:site_name" content="RT Imobiliária">
    <meta property="og:description" content="Site Institucional">
    <meta property="og:image:type" content="img/whatsapp.jpg">
    <meta property="og:image:width" content="500">
    <meta property="og:image:height" content="500">

    <!-- Favicon -->
	 <link rel='shortcut icon' type='image/x-icon' href='img/favicon.png'>

     <!--Main CSS-->
	<link rel='stylesheet' type='text/css' href='css/reset.css'>
	<link rel='stylesheet' type='text/css' href='css/style.css'>

    <!--BOOTSTRAP-->
    <link rel='stylesheet' type='text/css' href='libs/bootstrap/bootstrap.min.css'>



    <!-- Lightbox -->
    <link rel='stylesheet' type='text/css' href='libs/lightbox/css/lightbox.css'>

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/85921d822d.js" crossorigin="anonymous"></script>

    <!-- WOW -->
    <link rel='stylesheet' type='text/css' href='libs/wow/animate.min.css'>
 
    <!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300&display=swap" rel="stylesheet">


    <title>%TITLE%</title>
</head>
<body>
    <!--HEADER-->
    <header id="header-desktop">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-2">                    
                    <a href="/">    
                        <img src="img/logo.svg" alt="logotipo" width="100px">
                    </a>
                    </div>

                    <div class="col-md-10 contato-top-container">
                        <div class="contato-top">
                            <i class="fas fa-phone"></i>
                            <div class="contato-top-info">
                                <p>79 3222-2222</p>
                                <p>contato@rtimobiliaria.com.br</p>
                            </div>
                        </div>

                        <div class="contato-top">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="contato-top-info">
                                <p>Av. Hermes Fontes</p>
                                <p>N. 01, Bairro Salgado Filho, Aracaju-SE</p>
                            </div>
                        </div>

                        <div class="contato-top">
                           <a href="#"><i class="fab fa-youtube"></i></a>
                           <a href="#"><i class="fab fa-facebook"></i></a>
                           <a href="#"><i class="fab fa-instagram"></i></a>                         
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="header-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <nav class="navbar">
                            <ul class="navbar-nav flex-row justify-content-between">
                                <li class="nav-item btn-inicio"><a href="<?php $_SERVER['HTTP_HOST']; ?>" class="nav-link">Início</a></li>
                                <li class="nav-item btn-sobre"><a href="<?php $_SERVER['HTTP_HOST']; ?>/sobre.php" class="nav-link">Sobre</a></li>
                                <li class="nav-item btn-imoveis"><a href="<?php $_SERVER['HTTP_HOST']; ?>/imoveis.php" class="nav-link">Imóveis</a></li>
                                <li class="nav-item btn-blog"><a href="<?php $_SERVER['HTTP_HOST']; ?>/blog.php" class="nav-link">Blog</a></li>
                                <li class="nav-item btn-contato"><a href="<?php $_SERVER['HTTP_HOST']; ?>/contato.php" class="nav-link">Contato</a></li>
                            </ul>
                        </nav>
                    </div>

                    <div class="col-md-4 d-flex justify-content-end">
                        <a href="#"><button class="btn btn-primary">ANUNCIE SEU IMÓVEL</button></a>
                    </div>
                </div>
            </div>
        </div>
</header>


<header id="header-mobile">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="header-mobile-top d-flex justify-content-between align-items-center">
                                <a href="/">    
                                    <img src="img/logo.svg" alt="logotipo" width="100px">
                                </a>

                                <a href="#" class="btn-mobile-menu">
                                    <i class="fas fa-bars"></i>
                                </a>

                            </div>

                            <nav class="navbar justify-content-center">
                                <ul class="navbar-nav flex-column w-100">
                                    <li class="nav-item btn-inicio"><a href="<?php $_SERVER['HTTP_HOST']; ?>" class="nav-link">Início</a></li>
                                    <li class="nav-item btn-sobre"><a href="<?php $_SERVER['HTTP_HOST']; ?>/sobre" class="nav-link">Sobre</a></li>
                                    <li class="nav-item btn-imoveis"><a href="<?php $_SERVER['HTTP_HOST']; ?>/imoveis" class="nav-link">Imóveis</a></li>
                                    <li class="nav-item btn-blog"><a href="<?php $_SERVER['HTTP_HOST']; ?>/blog" class="nav-link">Blog</a></li>
                                    <li class="nav-item btn-contato"><a href="<?php $_SERVER['HTTP_HOST']; ?>/contato" class="nav-link">Contato</a></li>
                                    <li class="nav-item"><a href="#" class="nav-link">Anuncie seu Imóvel</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
</header>




<main>

