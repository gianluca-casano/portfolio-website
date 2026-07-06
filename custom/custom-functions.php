<?php

/*  Enqueue javascript - Messa in coda degli script Javascript nel footer tramite wp_footer()
/* ------------------------------------------------------------------------------------------- */

function nextframe_scripts() {

    wp_enqueue_script( 'nextframe-bundle', get_template_directory_uri().'/custom/bundle.min.js','','', true );

    // nome per identificare script aggiunto (a scelta) + funzione completa l'URL + concatenazione con "." + stringa per arrivare al file JS + True aggiunge script alla fine in wp_footer()
    wp_enqueue_script( 'nextframe-scripts', get_template_directory_uri().'/custom/custom-scripts.js','','', true );

}

//hook (gancio)
add_action( 'wp_enqueue_scripts', 'nextframe_scripts' );    // 1 nome hook, 2 funzione che mette in coda lo script


/*  Enqueue CSS - Messa in coda del file custom di stile nella head tramite wp_head()
/* ------------------------------------------------------------------------------------------- */

function portfolio_custom_styles() {

	wp_enqueue_style( 'nextframe-custom-styles', get_template_directory_uri().'/custom/custom-style.css');

}

add_action( 'wp_enqueue_scripts', 'portfolio_custom_styles' );

?>


