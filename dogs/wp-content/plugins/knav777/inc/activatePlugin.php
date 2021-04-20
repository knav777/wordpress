<?php

namespace Inc;
class ActivatePlugin extends Knav777Plugin{

    const CLASS_NAME = 'activatePlugin';

    public function __construct(){
        parent::__construct();
    }

    public function addCustomPostType(){
        register_post_type(self::POST_TYPE_BOOK, ['public' => true, 'label' => 'Books']);
    }

    public function addScripts(){
        wp_enqueue_script(self::SCRIPTS_JS, plugins_url('/assets/js/main.js', __DIR__));
    }

    public function addSettingLinks($links){
        $settings_link = "<a href='admin.php?page=knav777_plugin' >Settings</a>";
        array_push($links, $settings_link);
        return $links;
    }

    public function adminIndex(){
        require_once plugin_dir_path(dirname(__FILE__)) . 'templates/admin.php';
    }

    public function addStyles(){
        wp_enqueue_style(self::STYLES_CSS, plugins_url('/assets/css/main.css', __DIR__));
    }

    public function addAdminPages(){
        add_menu_page('Knav777 Plugin', 'Knav777', 'manage_options', 'knav777_plugin', [$this, 'adminIndex'], 'dashicons-store', 110);
    }

    public static function activate(){

        flush_rewrite_rules();
    }
    
}