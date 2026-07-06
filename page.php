<?php get_header(); // insert header.php inclusion  ?>

<div class="home-spacer"></div>

<main class="grid grid--center">
  <div class="col-96">

  <h1 class="none"><?php the_title(); ?></h1>

    <?php if (have_posts()) :?><?php while(have_posts()) : the_post(); // start of the loop ?>

      <!-- loop content -->
      <?php the_content(); ?>

    <?php endwhile;?>
    <?php endif; ?>

  </div>

</main>

<?php get_footer(); // insert footer.php inclusion  ?>
