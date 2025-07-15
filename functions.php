<?php
aadd_theme_support('title-tag');

function ew_enqueues() {
    wp_enqueue_style( 'ew-cores-styles', get_stylesheet_uri() . "?time=" . time());
}

add_action( 'wp_enqueue_scripts', 'ew_enqueues' );