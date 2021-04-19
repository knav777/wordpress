<?php

class activatePlugin{

    const CLASS_NAME = 'activatePlugin';

    public static function activate(){

        flush_rewrite_rules();
    }
    
}