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

add_filter('mce_css', 't5_fresh_editor_style');

/**
 * Adds a parameter of the last modified time to all editor stylesheets.
 *
 * @wp-hook mce_css
 * @param  string $css Comma separated stylesheet URIs
 * @return string
 */
function t5_fresh_editor_style($css) {
    global $editor_styles;

    if (empty($css) or empty($editor_styles)) {
        return $css;
    }

    // Modified copy of _WP_Editors::editor_settings()
    $mce_css   = array();
    $style_uri = get_stylesheet_directory_uri();
    $style_dir = get_stylesheet_directory();

    if (is_child_theme()) {
        $template_uri = get_template_directory_uri();
        $template_dir = get_template_directory();

        foreach ($editor_styles as $key => $file) {
            if ($file && file_exists("$template_dir/$file")) {
                $mce_css[] = add_query_arg(
                    'version',
                    filemtime("$template_dir/$file"),
                    "$template_uri/$file"
                );
            }
        }
    }

    foreach ($editor_styles as $file) {
        if ($file && file_exists("$style_dir/$file")) {
            $mce_css[] = add_query_arg(
                'version',
                filemtime("$style_dir/$file"),
                "$style_uri/$file"
            );
        }
    }

    return implode(',', $mce_css);
}