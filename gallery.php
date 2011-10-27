<?php

/*
Template Name: Gallery
*/

?>
<?php /* Display navigation to next/previous pages when applicable */ ?>
<?php global $wp_query;
if ($wp_query->max_num_pages > 1) : ?>
    <nav id="nav-above">
        <?php core_functions::breadcrumbs(); ?>
<!--        <h1 class="section-heading"><?php _e('Post navigation', 'toolbox'); ?></h1>-->
<!--        <div class="nav-previous"><?php next_posts_link(__('<span class="meta-nav">&larr;</span> Older posts', 'toolbox')); ?></div>
        <div class="nav-next"><?php previous_posts_link(__('Newer posts <span class="meta-nav">&rarr;</span>', 'toolbox')); ?></div>-->
    </nav><!-- #nav-above -->
<?php endif; ?>

<?php /* Start the Loop */ ?>
<?php while (have_posts()) : the_post(); ?>

    <?php cwp_layout::tpl_part('base',(get_post_format() ? get_post_format() : 'general')) ?>

<?php endwhile; ?>

<?php /* Display navigation to next/previous pages when applicable */ ?>
<?php if ($wp_query->max_num_pages > 1) : ?>
    <nav id="nav-below">
<!--        <h1 class="section-heading"><?php _e('Post navigation', 'toolbox'); ?></h1>-->
<!--        <div class="nav-previous"><?php next_posts_link(__('<span class="meta-nav">&larr;</span> Older posts', 'toolbox')); ?></div>
        <div class="nav-next"><?php previous_posts_link(__('Newer posts <span class="meta-nav">&rarr;</span>', 'toolbox')); ?></div>-->
            <?php core_functions::pagination(); ?>
    </nav><!-- #nav-below -->
<?php endif; ?>