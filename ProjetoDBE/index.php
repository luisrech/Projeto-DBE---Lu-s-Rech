<?php
session_start();
if (!isset($_SESSION["usuario"])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Restaurif</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Delicious
  * Updated: Jul 27 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center fixed-top topbar-transparent">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-center justify-content-lg-start">
      <i class="bi bi-phone d-flex align-items-center"><span>+55 (11)98805-6061</span></i>
      <i class="bi bi-clock ms-4 d-none d-lg-flex align-items-center"><span>Seg-Sex: 7:30 - 18:50</span></i>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <div class="logo me-auto">
        <h1><a href="index.html">RESTAURIF</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">Sobre nós</a></li>
          <li><a class="nav-link scrollto" href="#menu">Menu</a></li>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url(assets/img/polvilho.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Restaur<span>IF</span></h2>
                <p class="animate__animated animate__fadeInUp">Um projeto por Luís Rech</p>
                <div>
                  <a href="#menu" class="btn-menu animate__animated animate__fadeInUp scrollto">Nosso Menu</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background-image: url(assets/img/batata-doce.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Venha ver nossas delicias</h2>
                <p class="animate__animated animate__fadeInUp">Conheça um pouco mais sobre nós</p>
                <div>
                  <a href="#menu" class="btn-menu animate__animated animate__fadeInUp scrollto">Nosso Menu</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style="background-image: url(assets/img/barrinha.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Salgados, Doces e Bebidas!</h2>
                <p class="animate__animated animate__fadeInUp">Uma variedade de opcões!</p>
                <div>
                  <a href="#menu" class="btn-menu animate__animated animate__fadeInUp scrollto">Nosso Menu</a>
                </div>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row">

          <div class="col-lg-5 align-items-stretch video-box" style='background-image: url("assets/img/sobre.png");'>
          </div>

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch">

            <div class="content">
              <h3>O que é o <strong>RestaurIF?</strong></h3>
              <p>
                RestaurIF é um projeto que visa informar sobre o cardápio oferecido pelo IF nos horários de intervalo!
              </p>
              <p class="fst-italic">
                Assim, aqueles que não são acostumados com os lanches do IFSP poderão ter uma noção da qualidade dos mesmos!
              </p>
              <ul>
                <li><i class="bx bx-check-double"></i> Lanches saudáveis!</li>
                <li><i class="bx bx-check-double"></i> Variedade diária!</li>
                <li><i class="bx bx-check-double"></i> Opções deliciosas!</li>
              </ul>
              <p>
                Confira abaixo o nosso menu!
              </p>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu">
      <div class="container">

        <div class="section-title">
          <h2>Descubra nosso menu <span>Delicioso</span></h2>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters">
              <li data-filter="*" class="filter-active">Mostrar todos</li>
              <li data-filter=".filter-salgados">Salgados</li>
              <li data-filter=".filter-doces">Doces</li>
              <li data-filter=".filter-bebidas">Bebidas</li>
            </ul>
          </div>
        </div>

        <div class="row menu-container">

          <div class="col-lg-6 menu-item filter-salgados">
            <div class="menu-content">
          <a href="#">Biscoito de polvilho</a><span></span>
          </div>
            <div class="menu-ingredients">
              Deliciosos biscoitos de polvilhos assados.
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salgados">
            <div class="menu-content">
              <a href="#">Chips de batata-doce</a><span></span>
            </div>
            <div class="menu-ingredients">
              Chips deliciosos de batata-doce crocantes.
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salgados">
            <div class="menu-content">
              <a href="#">Chips de Mandioca</a><span></span>
            </div>
            <div class="menu-ingredients">
              Chips deliciosos de mandioca 100% saudáveis.
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salgados">
            <div class="menu-content">
              <a href="#">Amendoim</a><span></span>
            </div>
            <div class="menu-ingredients">
              Amendoins torrados saborosos.
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-doces">
            <div class="menu-content">
              <a href="#">Biscoitos de Chocolate</a><span></span>
            </div>
            <div class="menu-ingredients">
              Biscoitos assados de chocolate.
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-doces">
            <div class="menu-content">
              <a href="#">Maçã Desidratada</a><span></span>
            </div>
            <div class="menu-ingredients">
              Chips de maçã desidratada com canela.
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-bebidas">
            <div class="menu-content">
              <a href="#">Suco de Laranja</a><span></span>
            </div>
            <div class="menu-ingredients">
              200ml de suco de laranja.
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-bebidas">
            <div class="menu-content">
              <a href="#">Suco de Uva</a><span></span>
            </div>
            <div class="menu-ingredients">
              200ml de suco de uva
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-bebidas">
            <div class="menu-content">
              <a href="#">Achocolatado</a><span></span>
            </div>
            <div class="menu-ingredients">
              200ml de achocolatado
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Menu Section -->


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>Restaurif</h3>
      <p>Snacks Deliciosos de altíssima qualidade</p>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>Restaurif</span></strong>. Todos os direitos reservados.
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/ -->
          Um projeto por: Luís Rech
          <br>
          <br>
          Créditos ao: <a href="https://bootstrapmade.com/">BootstrapMade</a> pelo template.
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>