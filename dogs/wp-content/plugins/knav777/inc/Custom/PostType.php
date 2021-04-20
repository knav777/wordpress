<?php 

/**
 * @package Knav777
 */

namespace Inc\Custom;

class PostType{

    const POST_TYPE_BOOK = 'book';

    public function register(){
        add_action('init', [$this, 'addCustomPostType']);
    }

    public function addCustomPostType(){
        register_post_type(self::POST_TYPE_BOOK, ['public' => true, 'label' => 'Books']);
    }

}