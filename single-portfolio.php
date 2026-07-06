<?php get_header(); ?>

<div class="home-spacer spacer--sma spacer--tab"></div>

<main class="grid grid--center">
  <div class="col-96 column-single-pj">

    <?php if(is_singular('portfolio')) : ?>

    <div class="back-to-portfolio-wrapper">
        
      <a href="<?php echo get_post_type_archive_link('portfolio'); ?>" class="back-link text-brown">
        <svg width="800px" height="800px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M4 12L10 6M4 12L10 18M4 12H14.5M20 12H17.5" stroke="#4B4237" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        <span>TUTTI I PROGETTI</span>
      </a>

    </div>

    <?php endif ?>


    <?php if (have_posts()) :?><?php while(have_posts()) : the_post(); ?>

    <!-- loop content -->

    <article id="post-<?php the_ID(); // display id of the post ?>" <?php post_class(); // display css automitic post classes ?>>

      <h1 class="text-center text-1-pj fade-in"><?php the_title(); ?></h1>

      <div class="container-img fade-in">
        <?php
        $image = get_field('hero_img');
        $size = 'full';

        if( $image ) { ?>

            <?php
              $image_attributes =  wp_get_attachment_image_src( $image, $size );
            ?>

            <img class="img-res" src="<?php echo $image_attributes[0]; ?>" alt="">

        <?php } ?>
      </div>


      <div class="container-info text-center fade-in">
        <div class="container-info__inner">

          <img class="img-res" src="<?php echo get_stylesheet_directory_uri(); ?>/icons/user-circle.svg" alt="">

          <p class="text-brown"><?php echo esc_html( get_field('soggetto') ); ?></p>

        </div>

        <div class="container-info__inner">

          <img class="img-res" src="<?php echo get_stylesheet_directory_uri(); ?>/icons/case.svg" alt="">

          <p class="text-brown"><?php echo esc_html( get_field('settore') ); ?></p>

        </div>

        <div class="container-info__inner">

          <img class="img-res" src="<?php echo get_stylesheet_directory_uri(); ?>/icons/calendar.svg" alt="">

          <p class="text-brown"><?php echo esc_html( get_field('anno') ); ?></p>

        </div>
      </div>
      
      <?php the_content(); ?>

    </article>

    <?php endwhile; ?>
    <?php endif; ?>


    <?php $current_project_id = get_the_ID(); 
    
    $related_args = array(
      'post_type'      =>  'portfolio',
      'posts_per_page'  =>  2,
      'post__not_in'   =>  array($current_project_id),
    );

    $related_query = new WP_Query($related_args);

    if ( $related_query->have_posts() ) : ?>
    
    <section class="next-pj-section mb-10">
      <h2 class="text-center mb-4">SCOPRI ALTRI LAVORI</h2>

      <div class="grid grid--center">
        <?php while ( $related_query->have_posts() ) : $related_query->the_post(); ?>

        <div class=".col-50 next-pj-card">
          <a href="<?php the_permalink(); ?>">

          <?php 
          if( has_post_thumbnail() ) {

            the_post_thumbnail('large', array('class' => 'img-res img-evi'));
          }
          ?>

          <h3 class=" text-white text-center"><?php the_title(); ?></h3>

          </a>
        </div>

        <?php endwhile; ?>

      </div>

    </section>

    <?php endif; wp_reset_postdata(); ?>

    <section class="cta-pj mb-4">
      <h2 class="text-center">COSTRUIAMO QUALCOSA INSIEME?</h2>
      <p class="text-center">Sarò felice di confrontarmi in una call conoscitiva. Rispondo sempre entro 24/48 ore.</p>

      <div class="container-button text-center">

        <a href="/#contattami" class="button">
          <span class="button__img">
            <svg width="800px" height="800px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M4 12H20M20 12L16 8M20 12L16 16" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
          </span>
          
          <span class="button__txt">CONTATTAMI</span>
        </a>

      </div>

    </section>

  </div>
  
</main>

<?php get_footer(); ?>