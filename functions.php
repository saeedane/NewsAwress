<?php 

$base = get_template_directory_uri() . "/";
if (!function_exists('wpc_load_assets')) {

function wp_load_assets(){
    global $base;
    /*====================================== styled ===========================================*/
    /* Bootstrap CSS */
    wp_enqueue_style('wp-bootstrap', $base . 'assets/css/bootstrap.min.css', [], null);
    /* OwlCarosel CSS */
    wp_enqueue_style('wp-carousel', $base . 'assets/css/owl.carousel.css', [], null);
    wp_enqueue_style('wp-carousel-default', $base . 'assets/css/owl.theme.default.css', [], null);
    /* Animated CSS */
    wp_enqueue_style('wp-animate', $base . 'assets/css/animate.css', [], null);
    wp_enqueue_style('wp-swiper', $base . 'assets/css/swiper.min.css', [], null);
    wp_enqueue_style('wp-fancybox', $base . 'assets/css/jquery.fancybox.min.css', [], null);
    wp_enqueue_style('wp-webfont', $base . 'assets/css/webfont.css', [], null);
    wp_enqueue_style('wp-audioplayer', $base . 'assets/css/audioplayer.css', [], null);
    wp_enqueue_style('wp-aos', $base . 'assets/css/aos.css', [], null);
    /* Main CSS */
    wp_enqueue_style('wp-style', get_stylesheet_directory_uri() . '/style.css', [], null);
    wp_enqueue_style('wp-style-dark-mode', get_stylesheet_directory_uri() . '/assets/css/darkMode.css', [], null);

    /* Responsive CSS */
    wp_enqueue_style('wp-responsive', $base . 'assets/css/responsive.css', [], null);

    /*====================================== scripts ===========================================*/
    /* JQuery */
    wp_enqueue_script('wp_jquery_js', $base . 'assets/js/jquery-3.3.1.min.js', [], null, true);
    /* BootStart Poper */
    wp_enqueue_script('wp_bootstart_js', $base . 'assets/js/popper.min.js', [], null, true);
    /* Bootstrap Poper */
    wp_enqueue_script('wp_bootstrap_js', $base . 'assets/js/bootstrap.min.js', [], null, true);
    /* Swiper  */
    wp_enqueue_script('wp_swiper_js', $base . 'assets/js/swiper.min.js', [], null, true);
    /* Jquery Fancybox  */
    wp_enqueue_script('wp_jquery_fancybox', $base . 'assets/js/jquery.fancybox.min.js', [], null, true);
    /* Audio Player  */
    wp_enqueue_script('wp_audioplayer_js', $base . 'assets/js/audioplayer.js', [], null, true);
    /* Aos  Js  */
    wp_enqueue_script('wp_aos_js', $base . 'assets/js/aos.js', [], null, true);
    /* Active  Js  */
    wp_enqueue_script('wp_active_js', $base . 'assets/js/active.js', [], null, true);
    wp_enqueue_script('wp_darkMode_js', $base . 'assets/js/darkmode.js', [], null, true);

    /* Ajax code  */
    wp_enqueue_script('wpc_custom', $base . 'assets/js/custom.js', [], null, true);
    wp_localize_script('wpc_custom', 'wpc_vars', [
        'ajax_url' => admin_url('admin-ajax.php'),
    ]);
    /* Lord Icon Js  */
    wp_enqueue_script('wp_lord_icon_js', $base . 'assets/js/lord-icon-2.0.2.js', [], null, true);




}

function wp_load_assets_dashboard(){
    wp_enqueue_script('wp_jquery_js_dashboard', get_template_directory_uri() . '/assets/js/jquery-3.3.1.min.js', [], null, true);
    wp_enqueue_script('wpc_custom_dashboard', get_template_directory_uri() . '/assets/js/dashboard/custom.js', [], null, true);
  
}

add_action('wp_enqueue_scripts', 'wp_load_assets');
add_action('admin_enqueue_scripts', 'wp_load_assets_dashboard');

}


// add setup 

if (!function_exists('wpc_setup')) {
    function wpc_setup()
    {
        add_theme_support('post-thumbnails');
        register_nav_menus([
            'top-menu' => __('Top Menu', 'wpc'),
            'main-menu' => __('Main Menu', 'wpc'),
        ]);
        add_theme_support('custom-logo', [
            'width' => 300,
            'height' => 100,
        ]);
        add_theme_support('customize-selective-refresh-widgets');
        add_image_size('horizontal', 800, 460, true);
        add_image_size('534x468', 534, 468, true);
        add_image_size('533x261', 533, 261, true);
        add_image_size('400x299', 400, 299, true);
        add_image_size('1024x550', 1024, 550, true);
        add_image_size('345x512', 345, 512, true);
        add_image_size('square', 450, 450, true);
        add_theme_support('html5', [
            'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script'
        ]);
        add_theme_support('post-formats', [
            'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'
        ]);
        add_theme_support('title-tag');
        add_theme_support('automatic-feed-links');
        add_theme_support('block-templates');
        remove_theme_support( 'widgets-block-editor' );
    }
    add_action('after_setup_theme', 'wpc_setup');
}


/// add function post format 
add_post_type_support( 'post', 'post-formats' );

/**
 * Add the 'blog-link' class to the output of the_author_posts_link()
 */
add_filter( 'the_author_posts_link', function( $link )
{
    return str_replace( 'rel="author"', 'rel="author" class="authoName"', $link );
});

// add filter edit placeholder fields comment  

// define the comment_form_submit_button callback
function filter_comment_form_submit_button( $submit_button, $args ) {
    // make filter magic happen here...
    $submit_before = '<ul class="coment_options"><li class="col">';
    $submit_after = '</li></ul>';
    return $submit_before . $submit_button . $submit_after;
};
 
// add the filter
add_filter( 'comment_form_submit_button', 'filter_comment_form_submit_button', 10, 2 );


// add filter pagination 
add_filter('next_posts_link_attributes', 'posts_link_attributes');
add_filter('previous_posts_link_attributes', 'posts_link_attributes');

function posts_link_attributes() {
  return 'class="page-link"';
}

// get views posts 



function wpb_set_post_views($postID) {
    global $wpdb;
    $count_key = 'wpb_post_views_count';

    $count = get_post_meta($postID, $count_key, true);

    if($count==''){
        $count = 0;

        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
     

   
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count); 

    }
}

require get_template_directory() . '/walker/top-menu-walker.php';
require get_template_directory() . '/inc/widgets/widgets.php';
require get_template_directory() . '/inc/ajax-posts-by-mouth.php';
require get_template_directory() . '/inc/meta-box.php';
require get_template_directory() . '/inc/comments-helper.php';
require get_template_directory() . '/inc/pt_like_it.php';
