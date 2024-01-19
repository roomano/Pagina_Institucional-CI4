<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CIBurguer</title>
    <!-- BOOTSTRAP CSS -->
    <link rel="shortcut icon" href="<?php echo base_url('assets/images/logo.png'); ?>" type="image/x-icon">
    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/app.css'); ?>">
</head>
<body>
    <!-- NAV -->
    <nav class="container-fluid">
        <div class="row align-items-center">
            <div class="col p-3">
                <!-- logo -->
                <a href="<?php echo site_url('/'); ?>">
                    <img src="<?php echo base_url('assets/images/logo.png'); ?>" alt="CIGBURGER logo" srcset="">
            </a>
            </div>
            <div class="col p-3 pe-5 d-flex flex-row justify-content-end">
                <div><a class="nav-link ms-5" href="<?php echo site_url('/'); ?>">Início</a></div>
                <div><a class="nav-link ms-5" href="<?php echo site_url('products'); ?>">Produtos</a></div>
                <div><a class="nav-link ms-5" href="<?php echo site_url('where_we_are'); ?>">Onde estamos?</a></div>
            </div>
        </div>
    </nav>
    <!-- main -->
    <section class="container product-box py-5">
        <div class="row">
            <div class="col-5 text-center">
                <img class="img-fluid" src="<?php echo base_url('assets/images/room.jpg'); ?>" alt="A nossa sala">
            </div>
            <div class="col-6">
                <p class="where-we-are-title mb-0">CIGBurger Moz</p>
                <p class="where-we-are-subtitle">Rua dos culinarios, Matola, 5435</p>
                <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, cumque quod. Amet, doloribus quos unde optio debitis excepturi earum non quis dicta eaque impedit. Voluptatem excepturi nisi nihil quaerat neque!</p>
                <div class="d-flex align-items-center mb-3">
                    <img src="<?php echo base_url('assets/images/icon_phone.png'); ?>" alt="Phone" >
                    <div class="where-we-are-subtitle ms-3">
                        <a class="nav-link" href="tel:+258 84 719 8940">+258 84 719 8940</a>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-3">
                    <img src="<?php echo base_url('assets/images/icon_email.png'); ?>" alt="Email" >
                    <div class="where-we-are-subtitle ms-3">
                        <a class="nav-link" href="mailto:romanoivanpedro@gmail.com">romanoivanpedro@gmail.com</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- map section -->
    <div class="container product-box py-5">
        <div class="row">
            <div class="col text-center"><img class="img-fluid" src="<?php echo base_url('assets/images/map.jpg'); ?>" alt="Mapa"></div>
        </div>
    </div>
    <!-- social links -->
    <footer  class="container-fluid mt-5">
        <div class="row justify-content-center">
            <div class="col-6 d-flex flex-row justify-content-center">
                <div class="text-center mx-4">
                    <a href="#">
                        <img src="<?php echo base_url('assets/images/facebook.png'); ?>" alt="facebook">
                    </a>
                </div>
                <div class="text-center mx-4">
                    
                    <a href="#">
                        <img src="<?php echo base_url('assets/images/instagram.png'); ?>" alt="instagram">
                    </a>
                </div>
                    <div class="text-center mx-4">
                    <a href="#">
                        <img src="<?php echo base_url('assets/images/whatsapp.png'); ?>" alt="whatsapp">
                    </a>

                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col text-center">
                <h6>Todos os direitos reservados &copy; <?php echo date('Y'); ?></h6>
            </div>
        </div>

    </footer>
    
    <!-- BOOTSTRAP CSS -->
<script src="<?php echo base_url('assets/bootstrap/bootstrap.bundle.min.js'); ?>"></script>
</body>
</html>