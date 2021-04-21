<?php

/**
 * @package Knav777
 */

namespace Inc;

final class Init{

    /**
     * Code Author knav777 (kleinmanndiscipulo@gmail.com)
     * 
     * Returns all classes, for the functionality of the whole plugin
     *
     * @return array Full all clases
     */
    private static function getServices(){
        return [
            Pages\Admin::class,
            Base\Enqueue::class,
            Base\Activate::class,
            Base\Deactivate::class,
            Base\SettingLink::class,
            Custom\PostType::class
        ];
    }

    /**
     * Code Author knav777 (kleinmanndiscipulo@gmail.com)
     *
     * Instances the classes obtained from getServices () and 
     * starts them to become part of the plugin functionality
     * 
     * @return void
     */
    public static function registerServices(){

        foreach(self::getServices() as $class){
            $service = self::instantiate($class);

            if(method_exists($service, 'register')){
                $service->register();
            }
        }
    }

    /**
     * Code Author knav777 (kleinmanndiscipulo@gmail.com)
     * 
     * Instances the class passed by parameters and returns 
     *
     * @param class $class
     * @return class $class class instance
     */
    private static function instantiate($class){
        return new $class;
    }

}