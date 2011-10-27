<?php

/**
 * PLEASE DO NOT EDIT THIS FUNCTIONS FILE >>> CREATE AND ADD FUNCTIONS TO A CUSTOM_FUNCTIONS.PHP FILE *********
 */

//if (!is_plugin_active('core-wp/corewp.php')):
//    require_once get_stylesheet_directory() . '/core-wp/cwp_theme_func.php';
//else :

    /**
     * ******************************************************************************
     * base kit functions
     */
    if (file_exists(TEMPLATEPATH . '/csf_functions.php')) {
        include_once TEMPLATEPATH . '/csf_functions.php';
    }

    /**
     * ******************************************************************************
     */
    /**
     * ******************************************************************************
     * custom functions create this file and add your own custom functions
     */
    if (file_exists(TEMPLATEPATH . '/custom_functions.php')) {
        include_once TEMPLATEPATH . '/custom_functions.php';
    }

    /**
     * ******************************************************************************
     */
    /**
     * ******************************************************************************
     * toolbox functions toolbox functions
     */
    include_once TEMPLATEPATH . '/toolbox/functions.php';

/**
 * ******************************************************************************
 */

//endif;
