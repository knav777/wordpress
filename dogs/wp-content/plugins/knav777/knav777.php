<?php 

/**
 * 
 * @package Knav777
 */
/**
 * Plugin Name: Knav777
 * Plugin URI: Empty
 * Description: Plugin Customized (Only Testing by developer)
 * Version: 1.0.0
 * Author: Knav777
 * Author URI: https://www.instagram.com/knav777
 * Text Domain: This is a plugin very nice (In Construccion, Not use in PROD) 
 */

defined('ABSPATH') or die();

class Bootstrap{

    const POST_TYPE_BOOK = 'book';
    const SCRIPTS_JS = 'knav777-scripts-js';
    const STYLES_CSS = 'knav777-styles-css';

    public function __construct(){
        add_action('init', [$this, 'custom_post_type']);

        add_action('admin_enqueue_scripts', [$this, 'registerStyles']);
        add_action('admin_enqueue_scripts', [$this, 'registerScripts']);

        add_action('wp_enqueue_scripts', [$this, 'registerStyles']);
        add_action('wp_enqueue_scripts', [$this, 'registerScripts']);
    }

    public function activatePlugin(){

        $this->custom_post_type();
        flush_rewrite_rules();
    }

    public function deactivatePlugin(){

        flush_rewrite_rules();
    }

    public function custom_post_type(){
        register_post_type(self::POST_TYPE_BOOK, ['public' => true, 'label' => 'Books']);
    }

    public function registerScripts(){
        wp_enqueue_script(self::SCRIPTS_JS, plugins_url('/assets/js/main.js', __FILE__));
    }

    public function registerStyles(){
        wp_enqueue_style(self::STYLES_CSS, plugins_url('/assets/css/main.css', __FILE__));
    }
}

if(!class_exists('Bootstrap')) die('Class Bootstrap not found');

$bootstrap = new Bootstrap();

register_activation_hook(__FILE__, [$bootstrap, 'activatePlugin']);
register_deactivation_hook(__FILE__, [$bootstrap, 'deactivatePlugin']);