<?php

namespace knav777;

class Knav777Plugin{

    const POST_TYPE_BOOK = 'book';
    const PLUGIN_BASENAME = 'knav777/knav777.php';
    const SCRIPTS_JS = 'knav777-scripts-js';
    const STYLES_CSS = 'knav777-styles-css';

    private $plugin_name;

    public function __construct(){
        $this->plugin_name = self::PLUGIN_BASENAME;

        $this->registerAdminMenu();
        $this->registerJsCssBack();
        $this->registerLinksPlugin();
        $this->registerCustomPostType();
    }

    private function registerAdminMenu(){
        add_action('admin_menu', [$this, 'addAdminPages']);
    }

    private function registerCustomPostType(){
        add_action('init', [$this, 'addCustomPostType']);
    }

    private function registerLinksPlugin(){
        add_filter("plugin_action_links_$this->plugin_name", [$this, 'addSettingLinks']);
    }

    private function registerJsCssBack(){
        add_action('admin_enqueue_scripts', [$this, 'addStyles']);
        add_action('admin_enqueue_scripts', [$this, 'addScripts']);
    }

    private function registerJsCssFront(){
        add_action('wp_enqueue_scripts', [$this, 'addStyles']);
        add_action('wp_enqueue_scripts', [$this, 'addScripts']);
    }

}
