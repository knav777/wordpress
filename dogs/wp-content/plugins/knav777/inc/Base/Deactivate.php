<?php

/**
 * @package Knav777
 */

namespace Inc\Base;

class Deactivate{

    const CLASS_NAME = 'Deactivate';
    
    public static function deactivate(){

        flush_rewrite_rules();
    }

}