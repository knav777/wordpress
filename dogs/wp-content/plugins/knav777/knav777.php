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

    public function __construct(){
        add_action('init', [$this, 'custom_post_type']);
    }

    public function activatePlugin(){

        $this->custom_post_type();
        flush_rewrite_rules();
    }

    public function deactivatePlugin(){

        flush_rewrite_rules();
    }

    public function custom_post_type(){
        register_post_type(Bootstrap::POST_TYPE_BOOK, ['public' => true, 'label' => 'Books']);
    }
}

if(!class_exists('Bootstrap')) die('Class Bootstrap not found');

$bootstrap = new Bootstrap();

register_activation_hook(__FILE__, [$bootstrap, 'activatePlugin']);
register_deactivation_hook(__FILE__, [$bootstrap, 'deactivatePlugin']);