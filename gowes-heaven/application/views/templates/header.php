<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>

  <link rel="shortcut icon" href="<?= base_url('assets/') ?>img/fav.png">
  <title><?= $title ?></title>
  <!--
		CSS
		============================================= -->
  <link rel="stylesheet" href="<?= base_url('assets/') ?>css/linearicons.css">
  <link rel="stylesheet" href="<?= base_url('assets/') ?>css/font-awesome.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/') ?>css/themify-icons.css">
  <link rel="stylesheet" href="<?= base_url('assets/') ?>css/bootstrap.css">
  <link rel="stylesheet" href="<?= base_url('assets/') ?>css/owl.carousel.css">
  <link rel="stylesheet" href="<?= base_url('assets/') ?>css/nice-select.css">
  <link rel="stylesheet" href="<?= base_url('assets/') ?>css/nouislider.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/') ?>css/ion.rangeSlider.css" />
  <link rel="stylesheet" href="<?= base_url('assets/') ?>css/ion.rangeSlider.skinFlat.css" />
  <link rel="stylesheet" href="<?= base_url('assets/') ?>css/magnific-popup.css">
  <link rel="stylesheet" href="<?= base_url('assets/') ?>css/main.css">
  <link rel="stylesheet" href="<?= base_url('assets/') ?>css/slick.css" />
  <link rel="stylesheet" href="<?= base_url('assets/') ?>css/slick-theme.css" />
  <link rel="stylesheet" href="<?= base_url('assets/') ?>css/style1.css" />
</head>

<body>

  <!-- Start Header Area -->
  <header class="header_area sticky-header">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light main_box">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <a class="navbar-brand logo_h" href="home"><img src="<?= base_url('assets/') ?>img/logo.png" alt=""></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>x
          </button>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav ml-auto">
              <li class="nav-item active"><a class="nav-link" href="home">Home</a></li>
              <li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Shop</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="nav-link" href="#">Shop Category</a></li>
                  <li class="nav-item"><a class="nav-link" href="#">Product Details</a></li>
                  <li class="nav-item"><a class="nav-link" href="#">Product Checkout</a></li>
                  <li class="nav-item"><a class="nav-link" href="#">Shopping Cart</a></li>
                  <li class="nav-item"><a class="nav-link" href="#">Confirmation</a></li>
                </ul>
              </li>

              <li class="nav-item"><a class="nav-link" href="<?=base_url('home/contact')?>">Contact</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li class="nav-item"><a href="#" class="cart"><span class="ti-bag"></span></a></li>
              <li class="nav-item">
                <button class="search"><span class="lnr lnr-magnifier" id="search"></span></button>
              </li>
              <li class="nav-item"><span><a class="nav-link lnr lnr-user" href="<?= base_url('auth') ?>"></a></span></li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
    <div class="search_input" id="search_input_box">
      <div class="container">
        <form class="d-flex justify-content-between">
          <input type="text" class="form-control" id="search_input" placeholder="Search Here">
          <button type="submit" class="btn"></button>
          <span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
        </form>
      </div>
    </div>
  </header>
  <!-- End Header Area -->