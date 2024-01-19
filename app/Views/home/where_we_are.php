<?= $this->extend('layouts/_layout') ?>

<?= $this->section('content') ?>
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

<?= $this->endSection() ?>