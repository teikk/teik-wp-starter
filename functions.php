<?php
/**
 * Core setup
 * Ustawia stałe dla motywu.
 * żeby nie trzeba było wkółko pisać get_template_directory()
 */
define( 'TEIK_THEME_DIR', get_template_directory() );
define( 'TEIK_THEME_URI', get_template_directory_uri() );

/**
 * Ustawia stałe do załączania plików *.js i *.css
 *
 * Przykład:
 * wp_enqueue_script( 'teik-main', JS_PATH .'/nazwa.pliku.min.js', array( 'jquery' ),'1.0',true );
 */
define( 'JS_PATH', TEIK_THEME_URI . '/assets/js/');
define( 'CSS_PATH', TEIK_THEME_URI . '/assets/css/');

/**
 * Załaduj domyślne ustawienia motywu
 */
require_once( TEIK_THEME_DIR .'/functions/setup-theme.php' );

/**
 * Dołącza *.css i *.js
 */
require_once( TEIK_THEME_DIR .'/functions/scripts.php' );
require_once( TEIK_THEME_DIR .'/functions/styles.php' );
