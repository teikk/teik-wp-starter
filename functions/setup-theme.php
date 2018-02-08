<?php
add_action( 'after_setup_theme','teik_core' );
function teik_core(){
  add_theme_support( 'title-tag' );
  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'custom-header' );
}

/**
 * Podstawowe funkcje motywu
 */
require_once( teik_THEME_DIR .'/functions/core-functions.php' );
require_once( teik_THEME_DIR .'/functions/nav-walker.php' );
require_once( teik_THEME_DIR .'/functions/pagination.php' );

/**
 * Zarejestruj miejsce na dodawanie menu
 */
function teik_register_menus(){
	register_nav_menus( array(
		'main'  => __( 'Main menu', '_teik' ),
	) );
}
add_action( 'after_setup_theme', 'teik_register_menus' );

/**
 * Zmień ilość słów the_excerpt()
 *
 * @param int $length Długość excerptu
 * @return int        Zmieniona długość
 */
function teik_excerpt_words( $length ) {
    /**
     * 20 - ilość słów the_excerpt()
     */
    return 20;
}
add_filter( 'excerpt_length', 'teik_excerpt_words', 999 );
