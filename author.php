<?php
/**
 * @package WordPress
 * @subpackage Toolbox-core
 */
?>
<?php the_post(); ?>

<header class="page-header">
    <h1 class="page-title author"><?php printf(__('Author Archives: <span class="vcard">%s</span>', 'toolbox'), "<a class='url fn n' href='" . get_author_posts_url(get_the_author_meta('ID')) . "' title='" . esc_attr(get_the_author()) . "' rel='me'>" . get_the_author() . "</a>"); ?></h1>
</header>

<?php rewind_posts(); ?>

<?php /* Display navigation to next/previous pages when applicable */ ?>
<?php if ($wp_query->max_num_pages > 1) : ?>
    <nav id="nav-above">
        <h1 class="section-heading"><?php _e('Post navigation', 'toolbox'); ?></h1>
        <div class="nav-previous"><?php next_posts_link(__('<span class="meta-nav">&larr;</span> Older posts', 'toolbox')); ?></div>
        <div class="nav-next"><?php previous_posts_link(__('Newer posts <span class="meta-nav">&rarr;</span>', 'toolbox')); ?></div>
    </nav><!-- #nav-above -->
<?php endif; ?>

<?php /* Start the Loop */ ?>
<?php while (have_posts()) : the_post(); ?>

    <?php //get_template_part('content', get_post_format()); ?>
   <?php cwp_layout::tpl_part('base',(get_post_format() ? get_post_format() : 'general')) ?>

<?php endwhile; ?>

<?php /* Display navigation to next/previous pages when applicable */ ?>
<?php if ($wp_query->max_num_pages > 1) : ?>
    <nav id="nav-below">
        <h1 class="section-heading"><?php _e('Post navigation', 'toolbox'); ?></h1>
        <div class="nav-previous"><?php next_posts_link(__('<span class="meta-nav">&larr;</span> Older posts', 'toolbox')); ?></div>
        <div class="nav-next"><?php previous_posts_link(__('Newer posts <span class="meta-nav">&rarr;</span>', 'toolbox')); ?></div>
    </nav><!-- #nav-below -->
<?php endif; ?>