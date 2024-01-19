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
    <!--  main -->
    <section class="container">
        <div class="col">
            <!-- burger 01 -->
            <div class="row mb-5 product-box" >
                <div class="col-5 text-center">
                    <img class="img-fluid" src="<?php echo base_url('assets/images/burger_01.png'); ?>" alt="Burger 1">
                </div>
                <div class="col-7 p-5">
                    <h1 class="mb-3 product-text-color">
                        Burger 1
                    </h1>
                    <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, cum. Alias optio soluta cum suscipit consequatur velit, veniam unde nobis corrupti eum fugiat repudiandae odit, voluptatum minus impedit consectetur perferendis.
                    Corporis explicabo rem voluptatibus quae animi eum deserunt nihil, dolores nemo excepturi assumenda nobis amet laborum quos veritatis. Obcaecati ad harum fugiat nesciunt dicta expedita debitis cum dolor ipsam quasi.</p>
                <h2 class="mt-3 product-text-color">280,00<sup class="sup-text">MZN</sup></h2>
                </div>
            </div>
            <!-- burger 02 -->
            <div class="row mb-5 product-box" >
                
                <div class="col-7 p-5">
                    <h1 class="mb-3 product-text-color">
                        Burger 2
                    </h1>
                    <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, cum. Alias optio soluta cum suscipit consequatur velit, veniam unde nobis corrupti eum fugiat repudiandae odit, voluptatum minus impedit consectetur perferendis.
                    Corporis explicabo rem voluptatibus quae animi eum deserunt nihil, dolores nemo excepturi assumenda nobis amet laborum quos veritatis. Obcaecati ad harum fugiat nesciunt dicta expedita debitis cum dolor ipsam quasi.</p>
                <h2 class="mt-3 product-text-color">230,00<sup class="sup-text">MZN</sup></h2>
                </div>
                <div class="col-5 text-center">
                    <img class="img-fluid" src="<?php echo base_url('assets/images/burger_02.png'); ?>" alt="Burger 2">
                </div>
            </div>
            <!-- burger 03 -->
            <div class="row mb-5 product-box" >
                <div class="col-5 text-center">
                    <img class="img-fluid" src="<?php echo base_url('assets/images/burger_03.png'); ?>" alt="Burger 3">
                </div>
                <div class="col-7 p-5">
                    <h1 class="mb-3 product-text-color">
                        Burger 3
                    </h1>
                    <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, cum. Alias optio soluta cum suscipit consequatur velit, veniam unde nobis corrupti eum fugiat repudiandae odit, voluptatum minus impedit consectetur perferendis.
                    Corporis explicabo rem voluptatibus quae animi eum deserunt nihil, dolores nemo excepturi assumenda nobis amet laborum quos veritatis. Obcaecati ad harum fugiat nesciunt dicta expedita debitis cum dolor ipsam quasi.</p>
                <h2 class="mt-3 product-text-color">180,00<sup class="sup-text">MZN</sup></h2>
                </div>
                
            </div>
            <!-- burger 04 -->
            <div class="row mb-5 product-box" >
                
                <div class="col-7 p-5">
                    <h1 class="mb-3 product-text-color">
                        Burger 4
                    </h1>
                    <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, cum. Alias optio soluta cum suscipit consequatur velit, veniam unde nobis corrupti eum fugiat repudiandae odit, voluptatum minus impedit consectetur perferendis.
                    Corporis explicabo rem voluptatibus quae animi eum deserunt nihil, dolores nemo excepturi assumenda nobis amet laborum quos veritatis. Obcaecati ad harum fugiat nesciunt dicta expedita debitis cum dolor ipsam quasi.</p>
                <h2 class="mt-3 product-text-color">130,00<sup class="sup-text">MZN</sup></h2>
                </div>
                <div class="col-5 text-center">
                    <img class="img-fluid" src="<?php echo base_url('assets/images/burger_04.png'); ?>" alt="Burger 4">
                </div>
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