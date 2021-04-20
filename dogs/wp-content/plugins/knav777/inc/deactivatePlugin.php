<?php

namespace Inc;
class DeactivatePlugin extends Knav777Plugin{

    const CLASS_NAME = 'deactivatePlugin';
    
    public static function deactivate(){

        flush_rewrite_rules();
    }

}