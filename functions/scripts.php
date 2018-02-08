<?php
add_action( 'wp_enqueue_scripts','teik_scripts' );
/**
 * Ładuje potrzebne skrypty
 */
function teik_scripts(){
  wp_enqueue_script( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js',array( 'jquery' ), '1.0', true );
  wp_enqueue_script( 'teik-core', JS_PATH . '/teik-core.js',array( 'jquery' ), '1.0', true );
  wp_enqueue_script( 'teik-main', JS_PATH . '/main.js',array( 'jquery' ), '1.0', true );
}
