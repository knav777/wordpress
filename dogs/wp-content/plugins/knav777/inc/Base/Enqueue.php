<?php 

/**
 * @package Knav777
 */

namespace Inc\Base;

class Enqueue{

    const SCRIPTS_JS = 'knav777-scripts-js';
    const STYLES_CSS = 'knav777-styles-css';

    public function register(){
        add_action('admin_enqueue_scripts', [$this, 'addStyles']);
        add_action('admin_enqueue_scripts', [$this, 'addScripts']);
    }

    public function addStyles(){
        wp_enqueue_style(self::STYLES_CSS, PLUGIN_URL . "assets/css/main.css");
    }

    public function addScripts(){
        wp_enqueue_script(self::SCRIPTS_JS, PLUGIN_URL . "assets/js/main.js");
    }

}