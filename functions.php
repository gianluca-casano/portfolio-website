<?php
function nextframe_setup() {

  // Enable custom header
  add_theme_support( "custom-header" );

  // Enable title in header
  add_theme_support( "title-tag" ); // permette a WP di aggiungere tag <title> all'HTML in automatico selezionando "title" in Gutemberg

  // Enable feed link
  add_theme_support( 'automatic-feed-links' );  // permette lettura testi dei blog a software esterni (app ecc...)

  // Enable align wide & full
  add_theme_support( 'align-wide' );  // abilita allineamenti wide e full tramite la classe CSS

  // Enable featured image
  add_theme_support( 'post-thumbnails' ); // permette l'inserimento di immagini in Gutemberg

  // Image size
  add_image_size('image-small', 350, 270, true);  // nome per identificare (a scelta) + larghezza in px, altezza in px + true ritaglia (crop forzato) l'immagine con diversa size
  add_image_size('image-big', 1400, 900, true);

  // Page excerpt
  add_post_type_support( 'page', 'excerpt' );

  // Custom menu areas
  register_nav_menus( array(
    'header' => esc_html__( 'Header', 'nextframe' ) // permette di personalizzare l'header da interfaccia WP (ASPETTO -> MENU)
  ));

  /* Form di contatto - Contact Form 7 */
  add_filter('wpcf7_autop_or_not', '__return_false');
  /* rimuove i tag <br> dalla struttura HTML del Form */

}

add_action( 'after_setup_theme', 'nextframe_setup' ); // hook : "dopo aver caricato il tema, esegui funzione nextframe_setup"


/*  Enqueue css
/* ------------------------------------ */

function nextframe_styles() {

	wp_enqueue_style( 'nextframe-style', get_template_directory_uri().'/style.css');

}

add_action( 'wp_enqueue_scripts', 'nextframe_styles' );

/* richiedi una sola volta il file */
require_once('custom/custom-functions.php');

?>
