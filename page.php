<?php
/**
 * @package WordPress
 * @subpackage Toolbox-Core
 *
 */

?>
<?php the_post(); ?>

<?php //get_template_part('content', 'page'); ?>
<section id="page-content">
 <?php cwp::get_tpl_content('page'); ?>
</section>


<?php comments_template('', true); ?>