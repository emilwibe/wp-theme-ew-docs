<?php if (!defined('ABSPATH')) { exit; } ?>

<section class="l-wrapper xl flex-img">

    <?php
        $imgID = get_sub_field('flex_img_img');
        echo wp_get_attachment_image( $imgID, 'full', false, ['class' => 'fade-in-on-load', 'onload' => 'loadMediaOnLoad(this)'] );
    ?>

</section><!--/.flex-img-->