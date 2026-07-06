<?php get_header(); ?>

<div class="portfolio-spacer spacer--sma spacer--tab"></div>

<main class="grid grid--medium grid--center grid-archive">

  <div class="col-100 intro-column">

    <p class="text-center mb-1">WEB DESIGN & SVILUPPO</p>
    <h1 class="text-center text-reveal">PORTFOLIO</h1>
    <p class="text-center">I progetti web che ho realizzato.</p>
  
  </div>

  <div class="col-100 project-column">

    <?php if (have_posts()) : ?><?php while(have_posts()) : the_post(); ?>

      <article class="col-50 fade-up">

        <a class="p-3" href="<?php the_permalink(); ?>">

          <?php the_post_thumbnail('image-big', array('class' => 'img-res','alt' => get_the_title())); ?>

          <h2 class="text-center text-white p-3"><?php the_title(); ?></h2>

        </a>

      </article>

    <?php endwhile; ?>
    <?php endif; ?>

  </div>

  <div class="col-100 text-center o-center mb-4">

    <div class="container-contact-portfolio fade-up">

      <h2>CONTATTI</h2>
      <p>Sono disponibile per una call conoscitiva. Rispondo entro 24/48 ore.</p>

      <div class="container-icon">

        <a href="mailto:webdesign.casano@gmail.com" target="_blank">
          <img class="email-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/icons/gmail.svg" alt="">
        </a>

        <a href="https://www.linkedin.com/in/gianlucacasano/" target="_blank">
          <img class="linkedin-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/icons/linkedin.svg" alt="">
        </a>

      </div>

      <div class="container-button-archive text-center">
        <a href="/#contattami" class="button">
          <span class="button__img">
            <svg width="800px" height="800px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M4 12H20M20 12L16 8M20 12L16 16" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
          </span>
          
          <span class="button__txt">CONTATTAMI</span>
        </a>
      </div>

    </div>

  </div>
  
</main>


<?php get_footer(); ?>

