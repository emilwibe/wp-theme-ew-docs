<?php
add_theme_support('title-tag');

function ew_enqueues() {
    wp_enqueue_style( 'ew-core-styles', get_stylesheet_uri() . "?time=" . time());
    wp_enqueue_script('ew-core-scripts', get_template_directory_uri() . '/scripts-footer.js', [], false, true);
}

add_action( 'wp_enqueue_scripts', 'ew_enqueues' );