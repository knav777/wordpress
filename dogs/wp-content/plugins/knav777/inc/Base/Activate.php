<?php

/**
 * @package Knav777
 */

namespace Inc\Base;

class Activate{

    const CLASS_NAME = 'Activate';

    public function register(){
        register_activation_hook(PLUGIN_PATH . PLUGIN_NAME, [$this, 'activate']);
    }

    public function activate(){

        flush_rewrite_rules();
    }
    
}