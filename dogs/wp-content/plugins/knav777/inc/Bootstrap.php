<?php

class Bootstrap{

    const POST_TYPE_BOOK = 'book';
    const SCRIPTS_JS = 'knav777-scripts-js';
    const STYLES_CSS = 'knav777-styles-css';

    public function __construct(){
        $this->registerCustomPostType();
    }

    public function registerJsCssBack(){
        add_action('admin_enqueue_scripts', [$this, 'registerStyles']);
        add_action('admin_enqueue_scripts', [$this, 'registerScripts']);
    }

    public function registerJsCssFront(){
        add_action('wp_enqueue_scripts', [$this, 'registerStyles']);
        add_action('wp_enqueue_scripts', [$this, 'registerScripts']);
    }

    protected function registerCustomPostType(){
        add_action('init', [$this, 'custom_post_type']);
    }

    public function custom_post_type(){
        register_post_type(self::POST_TYPE_BOOK, ['public' => true, 'label' => 'Books']);
    }

    public function registerScripts(){
        wp_enqueue_script(self::SCRIPTS_JS, plugins_url('/assets/js/main.js', __DIR__));
    }

    public function registerStyles(){
        wp_enqueue_style(self::STYLES_CSS, plugins_url('/assets/css/main.css', __DIR__));
    }
}
