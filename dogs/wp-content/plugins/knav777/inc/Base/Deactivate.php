<?php

/**
 * @package Knav777
 */

namespace Inc\Base;

class Deactivate{

    const CLASS_NAME = 'Deactivate';

    public function register(){
        register_deactivation_hook(PLUGIN_PATH . PLUGIN_NAME, [$this, 'deactivate']);
    }
    
    public static function deactivate(){

        flush_rewrite_rules();
    }

}