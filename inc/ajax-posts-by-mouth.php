<?php
add_action('wp_ajax_get_ajax_posts_view_by_mouth', 'get_ajax_posts_view_by_mouth');
add_action('wp_ajax_nopriv_get_ajax_posts_view_by_mouth', 'get_ajax_posts_view_by_mouth');
function get_ajax_posts_view_by_mouth() {

// Query Arguments
$args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'meta_key' => 'wpb_post_views_count',
    'orderby' => 'meta_value_num',
    'order' => 'DESC',

    // Using the date_query to filter posts from last week
    'date_query' => array(
        array(
            'after' => '-30 days '
        )
    )
     
   
    
);

// The Query
$ajaxposts = new WP_Query( $args );

// The Loop
if ( $ajaxposts->have_posts() ) {
    while ( $ajaxposts->have_posts() ) {
        $ajaxposts->the_post();
        ?>

         <?php get_template_part('partials/post-most-view-card');

             
     ?>
             

              
        <?php
    }
} else {
    get_template_part('none');

}
/* Restore original Post Data */


wp_die();

}



add_action('wp_ajax_save_post_meta', 'save_post_meta');

function save_post_meta(){

    $post_id = $_POST['post_id'];
    $status = $_POST['status'];
    if($status == 'on'){
        add_post_meta($post_id, 'breaking_news_meta_key', $status,true);

    }else{
        delete_post_meta(  $post_id, "breaking_news_meta_key" );

    }


    wp_die();

}
    
