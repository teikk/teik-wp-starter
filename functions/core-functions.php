<?php

/**
 * Plik zawiera podstawowe funkcje, które będą używane w każdym naszym motywie
 */

/**
 * Wyświetla logo ustawione w Wygląd > Nagłówek
 * @param  string $class Klasy dodane do znacznika <a>
 * @return void          Wyświetla logo lub nazwę bloga jeżeli nie jest ustawione
 */
function teik_logo($class = ''){
	$header_image = get_header_image();
	if ( ! empty( $header_image ) ) { ?>
		<a class="<?php echo $class; ?>" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
			<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="">
		</a>
	<?php } else {
    ?>
    <a class="<?php echo $class; ?>" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
      <?php echo get_bloginfo('name'); ?>
		</a>
    <?php
  }
}
