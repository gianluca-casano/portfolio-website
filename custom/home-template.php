<?php /*
  
  Template Name: Home Template

*/ ?>

<?php get_header(); ?>

<?php if (have_posts()) :?><?php while(have_posts()) : the_post(); ?>

<?php 
  /* Image Url */
  $image_attributes =  wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' );
?>

<div class="cover text-white">
  <div class="cover__bg" style="background: url(<?php echo $image_attributes[0]; ?>) center center; background-size: cover"></div>
  
  <div class="cover__content">
    <h1 class="text-reveal"><?php the_title(); ?></h1>
    <h2 class="text-reveal"><?php echo get_the_excerpt();?></h2>
    <a href="" class="button fade-in"><?php esc_html_e( 'Scopri i vantaggi', 'nextframe'); ?></a>
  </div>

</div>

<main class="grid">
  <div class="col-100">
    
    <?php the_content(); ?>

  </div>

</main>

<?php endwhile; else : // if no result dispaly message ?>

  <p><?php esc_html_e('Sorry, no posts matched your criteria.', 'nextframe'); // dispaly no result message ?></p>

<?php endif; ?>

<?php get_footer(); ?>
