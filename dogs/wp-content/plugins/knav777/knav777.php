<?php 
/**
 * @package Knav777
 */
/** 
 * Plugin Name: Knav777
 * Plugin URI: Empty
 * Description: Plugin Customized (Only Testing by developer)
 * Version: 1.0.0
 * 
 * Requires PHP: 7.2.0
 * Requires at least: 7.0
 * 
 * WC tested up to: 5.7
 * WC requires at least: 5.7
 * 
 * Author: Knav777
 * Author URI: https://www.instagram.com/knav777
 * Text Domain: This is a plugin very nice (In Construccion, Not use in PROD) 
 */

defined('ABSPATH') or die();

if(!file_exists(__DIR__ . "/vendor/autoload.php")) die();
require_once __DIR__ . "/vendor/autoload.php";

define('PLUGIN_URL', plugin_dir_url(__FILE__));
define('PLUGIN_PATH', plugin_dir_path(__FILE__));
define('PLUGIN_NAME', plugin_basename(__FILE__));

if(!class_exists('Inc\\Init')) die();
Inc\Init::registerServices();