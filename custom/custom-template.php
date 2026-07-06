<?php /*
  
  Template Name: Block Template

*/ ?>

<?php get_header(); ?>

<div class="home-spacer spacer--sma spacer--tab"></div>

<main class="grid grid--center">
  <div class="col-96">

    <?php if (have_posts()) :?><?php while(have_posts()) : the_post(); ?>

      <div class="hero_section mb-10">

        <div class="grid">
          <div class="col-50">
            <p class="text-reveal mb-1">WEB DESIGN • FRONT-END DEVELOPMENT • WORDPRESS</p>
            <h1 class="mb-1 text-reveal">Progetto e sviluppo soluzioni digitali per il web moderno</h1>
            <p class="mb-2 text-3 text-reveal">Mi chiamo Gianluca Casano e sono un Web Designer. Credo che un sito efficace debba essere intuitivo, funzionale e capace di comunicare in modo chiaro e immediato.</p>
            
            <div class="container-btn text-reveal">

              <a href="/portfolio" class="btn">
                <span class="btn__img btn__img--1"><img src="<?php echo get_stylesheet_directory_uri(); ?>/icons/arrow-right.svg" alt=""></span>
                <span class="btn__text">VISUALIZZA PORTFOLIO</span>
                <span class="btn__img btn__img--2"><img src="<?php echo get_stylesheet_directory_uri(); ?>/icons/arrow-right.svg" alt=""></span>
              </a>

            </div>

          </div>

          <div class="col-50 text-center enter-right">

            <img class="hero_section__img" src="<?php echo get_stylesheet_directory_uri(); ?>/custom/img/hero_img.png" alt="Foto in primo piano del web designer Gianluca Casano">
            
            <img class="available rotate" src="<?php echo get_stylesheet_directory_uri(); ?>/custom/img/available.svg" alt="Available for work">

          </div>
        </div>

      </div>

      <?php the_content(); ?>

    <?php endwhile; ?>
    <?php endif; ?>

  </div>

</main>

<?php get_footer(); ?>