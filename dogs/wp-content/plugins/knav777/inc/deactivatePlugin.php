<?php

class deactivatePlugin{

    const CLASS_NAME = 'deactivatePlugin';
    
    public static function deactivate(){

        flush_rewrite_rules();
    }

}