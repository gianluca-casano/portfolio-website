<!DOCTYPE html>
<html <?php language_attributes(); // display the html language tag ?>>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="description" content="<?php bloginfo('description'); // description in WP --> Impostazioni > Generali > Motto ?>">

  <link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/custom/img/favicon.svg" type="image/svg">

  <?php wp_head(); // insert all the styles of WordPress ?>

</head>

<body <?php body_class(); // add automic css classes based on the page ?>>

<?php wp_body_open(); // insert script right after the body if needed ?>

<div class="overflow">

<header class="header-container">

  <div class="header">

    <a href="<?php echo esc_url(home_url()); ?>" class="header__logo">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/custom/img/logo.svg" alt="<?php bloginfo('title'); ?>">
    </a>

    <?php
    if ( is_post_type_archive('portfolio') ) {
      // 2. HEADER ARCHIVIO - PORTFOLIO
      // Se sono nell'archivio, stampo un menu minimale a mano
      echo '<ul class="header__menu header__menu--portfolio">';
        echo '<li><a class="back-to" href="' . esc_url( home_url( '/' ) ) . '">TORNA ALLA HOME</a></li>';
        echo '<li>PORTFOLIO</li>';
      echo '</ul>';
    } elseif (is_singular('portfolio')) {
    
      // 3. HEADER SINGOLO PROGETTO
      echo '<ul class="header__menu header__menu--single-project">';
        echo '<li><a class="back-to" href="' . esc_url( home_url( '/' ) ) . '">TORNA ALLA HOME</a></li>';
        echo '<li><a class="back-to" href="' . esc_url( get_post_type_archive_link( 'portfolio' ) ) . '">PORTFOLIO</a></li>';
        echo '<li>PROGETTO</li>';
      echo '</ul>';

    } elseif ( is_page(array('privacy-policy', 'cookie-policy')) ) {
    
      // 4. HEADER PAGINE LEGALI (Privacy & Cookie)
      echo '<ul class="header__menu header__menu--legal">';
        echo '<li><a class="back-to" href="' . esc_url( home_url( '/' ) ) . '">TORNA ALLA HOME</a></li>';
        echo '<li>NOTE LEGALI</li>';
      echo '</ul>';

    } else {

      // 1. HEADER PRINCIPALE - HOME
      wp_nav_menu(array(
        'theme_location' => 'header',
        'container' => false,
        'items_wrap' => '<ul class="header__menu">%3$s</ul>'
      ));

    } ?>

    <div class="header__hamburger">
      <span></span>
      <span></span>
      <span></span>
    </div>
    
  </div>

</header>
  