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
    <!-- Nav -->
    <?= $this->include('layouts/nav')?>

    <?= $this->renderSection('content')?>

    <!-- Footer -->
    <?= $this->include('layouts/footer')?>
    <!-- BOOTSTRAP CSS -->
<script src="<?php echo base_url('assets/bootstrap/bootstrap.bundle.min.js'); ?>"></script>
</body>
</html>