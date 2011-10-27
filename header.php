<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8" />

	<!-- Set the viewport width to device width for mobile -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<title>
            <?php
            /*
             * Print the <title> tag based on what is being viewed.
             */
            global $page, $paged;

            wp_title('|', true, 'right');

            // Add the blog name.
            bloginfo('name');

            // Add the blog description for the home/front page.
            $site_description = get_bloginfo('description', 'display');
            if ($site_description && ( is_home() || is_front_page() ))
                echo " | $site_description";

            // Add a page number if necessary:
            if ($paged >= 2 || $page >= 2)
                echo ' | ' . sprintf(__('Page %s', 'toolbox'), max($paged, $page));
            ?>
        </title>
<!--        wp_head here will make sure plugins and stylesheets do not mess with the design-->
<?php wp_head(); ?>


	<!-- Included CSS Files -->
<!--        <link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri().'/library/css/post-style.css' ?>" />-->
<!--        <link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri().'/library/css/wp.css' ?>" />-->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/foundation/stylesheets/app.css"/>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/foundation/stylesheets/foundation.css"/>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/library/fonts/League-Gothic/stylesheet.css"/>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/library/fonts/bebas-neue/stylesheet.css"/>
<!--	<link rel="stylesheet" href="presentation.css">-->

	<!--[if lt IE 9]>
		<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/foundation/stylesheets/ie.css">
	<![endif]-->

	<!-- IE Fix for HTML5 Tags -->
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

         <!-- theme stylesheet last - cascading elements -->
        <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
</head>
<body <?php body_class() ?>>
