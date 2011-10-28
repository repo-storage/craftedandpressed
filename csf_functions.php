<?php
/**
 * @package WordPress
 * @subpackage BaseJump5
 * @author shawnsandy
 * @version 0.2 bets
 * @deprecated moved to corewp_plugins
 */


/**
 * default base menu
 */

function theme_install_guide($templates) {
    $tpl = get_template_directory() . '/install-guide.php';
    load_template($tpl);
}


if(file_exists(PLUGINDIR.'/core-wp/themes/csf_functions.php')):
    include(PLUGINDIR.'/core-wp/themes/csf_functions.php');
    else:
    add_filter('template_include', 'theme_install_guide');
endif;