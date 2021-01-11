<?php
   
function ttone_styles() {
	wp_enqueue_style( 'ttone-child-style', get_stylesheet_uri(),
	array( 'twenty-twenty-one-style' ), wp_get_theme()->get('Version') );
}
add_action( 'wp_enqueue_scripts', 'ttone_styles');

function ttone_editor_styles() {
    add_editor_style( 'editor-styles.css' );
}
add_action( 'admin_init', 'ttone_editor_styles' );