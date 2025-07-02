<?php
$hlm = "Home";
if(uri_string()!=""){
  $hlm = ucwords(uri_string());
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>- House - <?php echo $hlm ?></title>
  <link rel="icon" href="<?= base_url('img/logo.png') ?>" type="image/png">
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="<?= base_url()?>NiceRestaurant/assets/img/favicon.png" rel="icon">
  <link href="<?= base_url()?>NiceRestaurant/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url()?>NiceRestaurant/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url()?>NiceRestaurant/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= base_url()?>NiceRestaurant/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?= base_url()?>NiceRestaurant/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="<?= base_url()?>NiceRestaurant/assets/css/main.css" rel="stylesheet">

  <!-- DataTables CSS -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
  
  <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
  .navbar-brand { text-decoration: none !important; }
  </style>
  <style>
  .card {
    background-color:rgb(165, 196, 250); /* hijau lembut */
  }

  .card-title {
    color:rgb(0, 0, 0); /* warna hitam */
    font-weight: 600; /* lebih tebal */
  }
</style>



  <!-- =======================================================
  * Template Name: NiceRestaurant
  * Template URL: https://bootstrapmade.com/nice-restaurant-bootstrap-template/
  * Updated: Jun 06 2025 with Bootstrap v5.3.6
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<body class="index-page">
<?= $this->include('component/header') ?>

  <main class="main">
  <ol class="breadcrumb">
  <li class="breadcrumb-item">Home</li>
  <?php
	if($hlm!="Home"){
	  ?>
	  <li class="breadcrumb-item"><?php echo $hlm?></li> 
	  <?php
	}
  ?> 
</ol>
  <?= $this->renderSection('content') ?>
  </main>

<?= $this->include('component/footer') ?>
  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="<?= base_url()?>NiceRestaurant/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url()?>NiceRestaurant/assets/vendor/php-email-form/validate.js"></script>
  <script src="<?= base_url()?>NiceRestaurant/assets/vendor/aos/aos.js"></script>
  <script src="<?= base_url()?>NiceRestaurant/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?= base_url()?>NiceRestaurant/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="<?= base_url()?>NiceRestaurant/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="<?= base_url()?>NiceRestaurant/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="<?= base_url()?>NiceRestaurant/assets/js/main.js"></script>

  <!-- jQuery dan DataTables JS -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
  <script>
  $(document).ready(function() {
      $('.datatable').DataTable();
  });
  </script>

</body>

</html>