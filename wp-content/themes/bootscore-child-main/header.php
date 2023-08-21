<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootscore
 *
 * @version 5.3.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="180x180" href="<?= get_stylesheet_directory_uri(); ?>/img/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?= get_stylesheet_directory_uri(); ?>/img/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?= get_stylesheet_directory_uri(); ?>/img/favicon/favicon-16x16.png">
  <link rel="manifest" href="<?= get_stylesheet_directory_uri(); ?>/img/favicon/site.webmanifest">
  <link rel="mask-icon" href="<?= get_stylesheet_directory_uri(); ?>/img/favicon/safari-pinned-tab.svg" color="#0d6efd">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="theme-color" content="#ffffff">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <!-- font -->
  <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Text:ital@0;1&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <!-- fontawesome -->
  <!-- <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v6.4.2/css/all.css"/> -->
  <!-- animation link -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  <!-- animation script -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<div id="page" class="site">

  <header id="masthead" class="site-header test">
    <div class="pf-top-wrapper">
        <div class="container-fluid">
          <div class="topnav-inner">
            <div class="cart-det">
              <ul>
                <li>
		<?php $upload_dir   = wp_upload_dir();?>
                  <a href="#" data-bs-toggle="collapse" data-bs-target="#collapse-search" aria-expanded="false" aria-controls="collapse-search"><img src="<?= home_url();?>/wp-content/uploads/2023/08/search.png" alt="search"></a>
                </li>
                <li>
                  <a href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-cart" aria-controls="offcanvas-cart"><img src="<?= home_url();?>/wp-content/uploads/2023/08/shopping-cart.png" alt="shopping-cart"></a>
                </li>
              </ul>
            </div>
            <div class="login-det">
              <ul>
                <li><a href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-user" aria-controls="offcanvas-user">login</a></li>
                <li><a href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-user" aria-controls="offcanvas-user">register</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <nav id="nav-main" class="nav-wrapper navbar navbar-expand-lg">
      <div class="container-fluid">
	<?php $logo_img= get_field( 'pf_gen_header_logo','option' );?>
  <?php if(!empty($logo_img)){?>
        <a class="navbar-brand" href="<?= esc_url(home_url()); ?>"><img src="<?= esc_url( $logo_img['url']); ?>" alt="pauseforwardss"></a><?php }?>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="nav-inner collapse navbar-collapse" id="navbarTogglerDemo02">
           <!-- Bootstrap 5 Nav Walker Main Menu -->
              <?php
              wp_nav_menu(array(
                'theme_location' => 'main-menu',
                'container'      => false,
                'menu_class'     => '',
                'fallback_cb'    => '__return_false',
                'items_wrap'     => '<ul id="bootscore-navbar" class="navbar-nav mx-auto mb-2 mb-lg-0">%3$s</ul>',
                'depth'          => 2,
                'walker'         => new bootstrap_5_wp_nav_menu_walker()
              ));
              ?>
          <div class="d-flex" role="search">
          <?php $book_button_link = get_field('book_consultant_link','option');  if($book_button_link) {?>
            <a href="<?= $book_button_link; ?>"><button class="btn btn-outline-success">Book a consult</button></a>
            <?php }?>
          </div>
        </div>
      </div>
    </nav>

      <?php
    if (class_exists('WooCommerce')) :
      get_template_part('template-parts/header/top-nav-search-collapse', 'woocommerce');
    endif;
    ?>

    <!-- Offcanvas User and Cart -->
    <?php
    if (class_exists('WooCommerce')) :
      get_template_part('template-parts/header/offcanvas', 'woocommerce');
    endif;
    ?>

  </header><!-- #masthead -->