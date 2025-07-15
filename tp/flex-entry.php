<?php
if (!defined('ABSPATH')) { exit; }

if(have_rows('global_flex')) {
    while(have_rows('global_flex')) {
        the_row();

        if(get_row_layout() == 'flex_heading') {
            get_template_part('tp/flex/heading');
        } elseif ( get_row_layout() == 'flex_sub_heading' ) {
            get_template_part('tp/flex/sub_heading');
        } elseif ( get_row_layout() == 'flex_wysiwyg' ) {
            get_template_part('tp/flex/wysiwyg');
        } elseif ( get_row_layout() == 'flex_img' ) {
            get_template_part('tp/flex/img');
        }
    }
}