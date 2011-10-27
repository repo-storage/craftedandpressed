<?php
/**
 *
 * @package WordPress
 * @subpackage BaseJump5
 */
/*
  Template Name: Home Page
 */
?>

<div class="container">
    <!-- class content -->
    <div class="row"><!-- container -->
            <?php //masonry::tpl('post_type=page&showposts=4&order=ASC&orderby=menu_order'); ?>
            <?php
            $m_q = new WP_Query('post_type=page&showposts=4&order=ASC&orderby=menu_order');
            if ($m_q->have_posts()):
                while ($m_q->have_posts()) :
                    $m_q->the_post();
                    ?>
                    <div class="three columns">
                        <div <?php post_class(); ?>>
                        <!-- container -->
                        <?php $masonry_tpl = (get_post_format() ? get_post_format() : 'grid'); ?>
                        <?php cwp_layout::tpl_part('masonry', "masonry-{$masonry_tpl}"); ?>
                        <div class="clear">Cleared</div>
                        </div>
                    </div>
                <?php endwhile;
            endif; ?>
    </div>
</div>
