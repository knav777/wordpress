<?php

/**
 * @package Knav777
 */

namespace Inc\Base;

class Activate{

    const CLASS_NAME = 'Activate';

    public static function activate(){

        flush_rewrite_rules();
    }
    
}