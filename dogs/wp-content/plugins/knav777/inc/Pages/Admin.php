<?php 

/**
 * @package Knav777
 */

namespace Inc\Pages;

class Admin{

    public function register(){
        add_action('admin_menu', [$this, 'addAdminPages']);
    }

    public function addAdminPages(){
        add_menu_page('Knav777 Plugin', 'Knav777', 'manage_options', 'knav777_plugin', [$this, 'adminIndex'], 'dashicons-store', 110);
    }

    public function adminIndex(){
        require_once PLUGIN_PATH . 'templates/admin.php';
    }

}