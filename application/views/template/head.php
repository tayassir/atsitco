<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Atsico</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo base_url() ?>assets/temp/assets/img/atsico_icon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <?= link_tag("assets/temp/assets/vendor/bootstrap/css/bootstrap.min.css");?>
  <?= link_tag("assets/temp/assets/vendor/icofont/icofont.min.css");?>
  <?= link_tag("assets/temp/assets/vendor/aos/aos.css");?>
  <?= link_tag("assets/temp/assets/vendor/line-awesome/css/line-awesome.min.css");?>
  <?= link_tag("assets/temp/assets/vendor/owl.carousel/assets/owl.carousel.min.css");?>
<!--   <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/line-awesome/css/line-awesome.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet"> -->

  <!-- Template Main CSS File -->
  <?= link_tag("assets/temp/assets/css/style.css");?>
  <!-- <link href="assets/css/style.css" rel="stylesheet"> -->

  <!-- =======================================================
  * Template Name: SoftLand - v2.0.0
  * Template URL: https://bootstrapmade.com/softland-bootstrap-app-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5eb46468a1bad90e54a2b46f/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
  <script async data-id="42442" src="https://cdn.widgetwhats.com/script.min.js"></script>
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-164741720-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-164741720-1');
</script>
</head>
<body>

  <!-- ======= Mobile Menu ======= -->
  <div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
      <div class="site-mobile-menu-close mt-3">
        <span class="icofont-close js-menu-toggle"></span>
      </div>
    </div>
    <div class="site-mobile-menu-body"></div>
  </div>

  <!-- ======= Header ======= -->
  <header class="site-navbar js-sticky-header site-navbar-target" role="banner">

    <div class="container">
      <div class="row align-items-center">

        <div class="col-6 col-lg-2">
          <h1 class="mb-0 site-logo"><a href="<?php echo base_url() ?>index.php/template" class="mb-0"><?php echo $company_data->company_name ?></a></h1>
        </div>

        <div class="col-12 col-md-10 d-none d-lg-block">
          <nav class="site-navigation position-relative text-right" role="navigation">

            <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
              <li class=""><a href="<?php echo base_url() ?>index.php/template" class="nav-link">Home</a></li>
              <li><a href="<?php echo base_url() ?>index.php/template/about" class="nav-link">About Us</a></li>
              <li class="has-children">
                <a href="#" class="nav-link">Services</a>
                <ul class="dropdown">
                  <li><a  href="<?php echo base_url() ?>index.php/template/infra" class="nav-link">IT Infrastructure</a></li>
                  <li><a href="<?php echo base_url() ?>index.php/template/security" class="nav-link">IT Security</a></li>
                  <li><a href="<?php echo base_url() ?>index.php/template/network" class="nav-link">Networking Solutions</a></li>
                  <li><a href="<?php echo base_url() ?>index.php/template/hardware" class="nav-link">Hardware</a></li>
                  <li><a href="<?php echo base_url() ?>index.php/template/lowcurrent" class="nav-link">Low Current</a></li>
                </ul>
              </li>
              <li><a href="<?php echo base_url() ?>index.php/template/partners"  class="nav-link">Partners</a></li>
              <li><a href="<?php echo base_url() ?>index.php/template/contact" class="nav-link">Contact Us</a></li>
              <!-- <li><a href="pricing.html" class="nav-link"></a></li> -->

              <!-- <li class="has-children">
                <a href="blog.html" class="nav-link">Co</a>
                <ul class="dropdown">
                  <li><a href="blog.html" class="nav-link">Blog</a></li>
                  <li><a href="blog-single.html" class="nav-link">Blog Sigle</a></li>
                </ul>
              </li> -->
            </ul>
          </nav>
        </div>

        <div class="col-6 d-inline-block d-lg-none ml-md-0 py-3" style="position: relative; top: 3px;">

          <a href="#" class="burger site-menu-toggle js-menu-toggle" data-toggle="collapse" data-target="#main-navbar">
            <span></span>
          </a>
        </div>

      </div>
    </div>

  </header>