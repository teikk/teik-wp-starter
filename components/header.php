<div class="container">
  <nav class="nav">
    <?php teik_logo('nav__logo'); ?>
    <button type="button" class="nav__toggle teik-menuToggle">
      <span class="nav__toggle-bar"></span>
      <span class="nav__toggle-bar"></span>
      <span class="nav__toggle-bar"></span>
    </button>
    <?php
    wp_nav_menu(
      array(
        'theme_location' 	=> 'main',
        'depth'             => 2,
        'menu_class' 		=> 'nav__menu teik-menu',
        'fallback_cb' 		=> 'teik_menu_walker::fallback',
        'menu_id'			=> 'header-menu',
        'walker' 			=> new teik_menu_walker()
      )
    );
    ?>
  </nav>
</div>
