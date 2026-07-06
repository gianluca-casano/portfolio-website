<?php get_header(); ?>

<div class="home-spacer"></div>

<main class="grid grid--center">

  <div class="col-96 text-center mt-4 mb-4">
    <h1 style="font-size: 3rem; margin-bottom: 20px;">Pagina non trovata (Errore 404)</h1>
    <p style="font-size: 1.2rem; margin-bottom: 40px; color: #4B4237;">
      Spiacente, la pagina che stai cercando non esiste o è stata spostata.
    </p>
    <a href="<?php echo esc_url(home_url('/')); ?>" class="button" style="display: inline-block; padding: 14px 25px; background-color: var(--cta-bg-color); color: var(--cta-text-color); text-decoration: none; border-radius: 8px;">
      Torna alla Home Page
    </a>
  </div>

</main>

<?php get_footer(); ?>
