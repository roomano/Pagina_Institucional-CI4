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
    <section class="container-fluid bg-color-02">
    <div class="row">
        <div class="col text-center p-5">
            <div class="mb-5">
                <img class="img-fluid" src="<?php echo base_url('assets/images/main_burger_01.png'); ?>" alt="O melhor burger do mundo">
            </div>
            <div class="text-center">
                <h3 class="mb-3">Deliciosos e com grandes descontos!</h3>
                <a class="btn-products" href="<?php echo site_url('products'); ?>">Produtos</a>
            </div>

            
        </div>
        <div class="col text-center p-5">
            <img src="<?php echo base_url('assets/images/main_burger_02.png'); ?>" alt="Burger">

        </div>
    </div>
    </section>
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