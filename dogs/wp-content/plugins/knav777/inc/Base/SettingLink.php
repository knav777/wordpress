<?php 

/**
 * @package Knav777
 */

namespace Inc\Base;

class SettingLink{

    public function register(){
        add_filter("plugin_action_links_" . PLUGIN_NAME, [$this, 'addSettingLinks']);
    }

    public function addSettingLinks($links){
        
        $settings_link = "<a href='admin.php?page=knav777_plugin' >Settings</a>";
        array_push($links, $settings_link);
        
        return $links;
    }

}