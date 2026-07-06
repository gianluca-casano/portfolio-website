</div>

<footer class="footer mt-4">
  <div class="grid pt-3">

    <div class="col-50 text-center mt-3 mb-3">
      <p class="mb-2"><a class="footer__logo" href="<?php echo esc_url(home_url()); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/custom/img/logo-white.svg" alt="Logo"></a></p>
      <p class="text-beige text-3 font-medium">Web Designer</p>
    </div>

    <div class="col-50 text-center mt-3 mb-3">
      <h3 class="text-beige mb-3">CONTATTI</h3>
      <p class="mb-3"><a class="text-beige" href="mailto:webdesign.casano@gmail.com"><img class="social-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/icons/gmail-footer.svg" alt="Link a mail"></a></p>
      <p class="mb-3"><a href="https://www.linkedin.com/in/gianlucacasano/" target="_blank"><img class="social-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/icons/linkedin-footer.svg" alt="Link a LinkedIn"></a></p>
      <p class="mb-3"><a href="https://github.com/gianluca-casano" target="_blank"><img class="social-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/icons/github.svg" alt="Link a GitHub"></a></p>
    </div>
    
    <div class="col-50 text-center mb-4">
      <p class="text-beige mb-0">© Copyright <?php echo date("Y"); //display current year ?>
      <?php bloginfo('title'); // display wp blog title ?></p>
    </div>

    <div class="col-50 text-center mb-4">
      <a class="text-beige text-4" href="/privacy-policy" target="_blank"> Privacy Policy</a> <a class="text-beige text-4" href="/cookie-policy" target="_blank">- Cookie Policy</a>
    </div>

    <div class="col-100 text-center mb-4">
      <p class="text-beige">Designed & Developed by Gianluca Casano</p>
    </div>

  </div>
</footer>


<!-- Back to top -->
<div class="container-arrow-up">
  <svg class="arrow-up" width="800px" height="800px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M12 4L6 10M12 4L18 10M12 4L12 14.5M12 20V17.5" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
  </svg>
</div>


<?php wp_footer(); // insert scripts by WordPress at end of the page ?>

</body>
</html>
