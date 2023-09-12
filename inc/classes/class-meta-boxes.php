<?php
/**
 *  Register Meta Boxes
 * 
 * @package Aquila
 */

 namespace AQUILA_THEME\Inc;

 use AQUILA_THEME\Inc\Traits\Singleton;


 class Meta_Boxes{
    use Singleton;

    protected function __construct(){
        // load class.
        $this->setup_hooks();
    }

    protected function setup_hooks(){
        add_action('add_meta_boxes', [ $this, 'add_custom_meta_box']);
    }

    public function add_custom_meta_box($post){
        add_meta_box(
            'hide-page-title',              // Unique ID
            'Hide page title',              // Box title
            [$this, 'custom_meta_box_html'], // Content callback
            'post',                         // Post type
            'side'
        );
    }
        

    public function custom_meta_box_html($post){
        $value = get_post_meta( $post->ID, '_hide_page_title' , true );
        ?>
        <label for="aquila-field">Hide the page title</label>
        <select name="aquila-field" id="aquila-field" class="postbox">
            <option value="">Select something...</option>
            <option value="yes" <?php selected( $value, 'yes' ); ?>>Yes</option>
            <option value="no" <?php selected( $value, 'no' ); ?>>No</option>
        </select>
        <?php
    }
 }