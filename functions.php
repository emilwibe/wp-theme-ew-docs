<?php
add_theme_support('title-tag');

function ew_enqueues() {
    wp_enqueue_style( 'ew-core-styles', get_stylesheet_uri() . "?time=" . time());
    wp_enqueue_script('ew-core-scripts', get_template_directory_uri() . '/scripts-footer.js?time=' . time(), [], false, true);
}

add_action( 'wp_enqueue_scripts', 'ew_enqueues' );

// TinyMCE
add_filter('tiny_mce_before_init', function ($settings) {

    $settings['block_formats'] = 'Tekst=p;Overskrift 3=h3;Overskrift 4=h4;Overskrift 5=h5;Overskrift 6=h6';

    return $settings;
});