<?php get_header(); ?>

<div class="spacer"></div>

<main class="grid grid--center">
  <div class="col-70">

    <?php if (have_posts()) :?><?php while(have_posts()) : the_post(); ?>

    <!-- loop content -->

    <article id="post-<?php the_ID(); // display id of the post ?>" <?php post_class(); // display css automitic post classes ?>>

      <h1><?php the_title(); ?></h1>

      <p><?php the_time('j M Y '); ?> - <?php the_category(', '); ?>  <?php the_tags('(', ', ', ')'); ?></p>

      <?php the_post_thumbnail('image-big', array('class' => 'img-res mb-2','alt' => get_the_title())); ?>

      <?php the_content(); ?>

      <?php wp_link_pages(); // display pagination link of the post if active ?>

    </article>

    <?php endwhile; else : // if no result dispaly message ?>

    <p><?php esc_html_e('Sorry, no posts matched your criteria.', 'nextframe'); ?></p>

    <?php endif; ?>

  </div>

</main>

<?php get_footer(); ?>
