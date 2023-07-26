<?php
if ( ! function_exists( 'grsblogtheme_setup' ) ) :
  
  function grsblogtheme_setup() {
    add_theme_support( 'wp_block_styles' );
  }
  
endif;
add_action( 'after_theme_setup', 'grsblogtheme_setup' );
?>