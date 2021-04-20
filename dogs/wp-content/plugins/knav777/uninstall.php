<?php 

/**
 * @package Knav777
 */

defined('WP_UNINSTALL_PLUGIN') or die();

//delete all posts of the books (custom post type)
$books = get_posts(['post_type'=>'book', 'numbersposts' => -1]);

foreach($books as $book){
    wp_delete_post($book->ID, true);
}
