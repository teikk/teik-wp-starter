<?php
add_action( 'wp_enqueue_scripts','teik_styles' );
function teik_styles(){
  wp_enqueue_style( 'teik-main', CSS_PATH . '/main.css' );  
}
