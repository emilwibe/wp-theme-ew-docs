<?php get_header(); ?>

<?php if(have_posts()) : ?>

    <?php while(have_posts()) : the_post(); ?>

<header class="l-wrapper xl">
        <h1 id="top-anchor"><?php echo get_the_title(); ?></h1>

        <p class="sub-heading"><?php echo get_bloginfo('description'); ?></p>
    </header>

<main class="l-wrapper xl">

    <nav class="nav-primary">

    </nav>

    <div class="content">

    <?php get_template_part('tp/flex-entry'); ?>

    </div><!--/.content-->

</main>

<?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>