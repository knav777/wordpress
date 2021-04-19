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

require_once 'inc/Bootstrap.php';
require_once 'inc/activatePlugin.php';
require_once 'inc/deactivatePlugin.php';

$bootstrap = new Bootstrap();
$bootstrap->registerJsCssBack();

register_activation_hook(__FILE__, [activatePlugin::CLASS_NAME, 'activate']);
register_deactivation_hook(__FILE__, [deactivatePlugin::CLASS_NAME, 'deactivate']);