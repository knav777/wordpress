<?php 

/**
 * @package Knav777
 */

use Inc\ActivatePlugin;
use Inc\DeactivatePlugin;

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

require_once __DIR__ . "/vendor/autoload.php";

$activate_plugin = new ActivatePlugin();

register_activation_hook(__FILE__, [ActivatePlugin::CLASS_NAME, 'activate']);
register_deactivation_hook(__FILE__, [DeactivatePlugin::CLASS_NAME, 'deactivate']);