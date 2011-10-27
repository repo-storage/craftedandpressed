<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of theme_options
 *
 * @author Studio365
 */
class cp_theme_options {

    private $group, $name, $theme = 'basejump';

    public function get_theme() {
        return $this->theme;
    }

    public function set_theme($theme) {
        $this->theme = $theme;
    }

    public function get_group() {
        return $this->group;
    }

    public function set_group($group) {
        $this->group = $group . '_opt';
    }

    public function get_name() {
        return $this->name;
    }

    public function set_name($name) {
        $this->name = $name . '_opt';
    }

    public function __construct($group, $name) {
        $this->set_group($group);
        $this->set_name($name);
        add_action('admin_init', array(&$this, 'init'));
        add_action('admin_menu', array(&$this, 'menu'));
    }

    public function init() {
        register_setting($this->get_group(), $this->get_name(), array('cwp_validate_theme','validate'));
    }

    public function menu() {
        add_theme_page(ucfirst($this->theme) . 'Options', ucfirst($this->theme) . ' Options', 'manage_options', 'cwp_theme_options', array(&$this, 'options'));
    }

    public function options() {
        $settings = $this->get_group();
        $opt_name = $this->get_name();
        $options = get_option($opt_name);
        //cwp_layout::tpl_part('base', 'theme_options');
        include_once get_stylesheet_directory().'/tpl/base/theme_options.php';
    }

    public function validate($input) {
        return $input;
    }

}