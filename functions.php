<?php 

$base = get_template_directory_uri() . "/";
if (!function_exists('wpc_load_assets')) {

function wp_load_assets(){
    global $base;
    /*====================================== styled ===========================================*/
    /* Bootstrap CSS */
    wp_enqueue_style('wp-bootstrap', $base . 'assets/css/bootstrap.v4.5.3.min.css', [], null);
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
    /* Responsive CSS */
    wp_enqueue_style('wp-responsive', $base . 'assets/css/responsive.css', [], null);

    /*====================================== scripts ===========================================*/
    /* JQuery */
    wp_enqueue_script('wp_jquery_js', $base . 'assets/js/jquery-3.3.1.min.js', [], null, true);
    /* BootStart Poper */
    wp_enqueue_script('wp_bootstart_js', $base . 'assets/js/popper.min.js', [], null, true);
    /* Bootstrap Poper */
    wp_enqueue_script('wp_bootstrap_js', $base . 'assets/js/bootstrap.v4.5.3.min.js', [], null, true);
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
    /* Lord Icon Js  */
    wp_enqueue_script('wp_lord_icon_js', $base . 'assets/js/lord-icon-2.0.2.js', [], null, true);




}
add_action('wp_enqueue_scripts', 'wp_load_assets');
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

// register news menu admin 
if (!function_exists('wpc_News_init')) {

function wpc_News_init() {
    $labels = array(
        'name'                  => _x( 'News', 'News type general name', 'recipe' ),
        'singular_name'         => _x( 'News', 'Post type singular name', 'recipe' ),
        'menu_name'             => _x( 'News', 'Admin Menu text', 'recipe' ),
        'name_admin_bar'        => _x( 'News', 'Add New on Toolbar', 'recipe' ),
        'add_new'               => __( 'Add New', 'news' ),
        'add_new_item'          => __( 'Add New news', 'news' ),
        'new_item'              => __( 'New news', 'news' ),
        'edit_item'             => __( 'Edit news', 'news' ),
        'view_item'             => __( 'View news', 'news' ),
        'all_items'             => __( 'All news', 'news' ),
        'search_items'          => __( 'Search news', 'news' ),
        'parent_item_colon'     => __( 'Parent news:', 'news' ),
        'not_found'             => __( 'No recipes found.', 'news' ),
        'not_found_in_trash'    => __( 'No recipes found in Trash.', 'news' ),
        'featured_image'        => _x( 'news Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'recipe' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'recipe' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'recipe' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'recipe' ),
        'archives'              => _x( 'Recipe archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'recipe' ),
        'insert_into_item'      => _x( 'Insert into recipe', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'recipe' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this recipe', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'recipe' ),
        'filter_items_list'     => _x( 'Filter recipes list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'recipe' ),
        'items_list_navigation' => _x( 'Recipes list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'recipe' ),
        'items_list'            => _x( 'Recipes list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'recipe' ),
    );     
    $args = array(
        'labels'             => $labels,
        'description'        => 'Recipe custom post type.',
        'menu_icon' => 'dashicons-awards',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'recipe' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 20,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail' ),
        'taxonomies'         => array( 'category', 'post_tag' ),
        'show_in_rest'       => true
    );
      
    register_post_type( 'News', $args );
}
add_action( 'init', 'wpc_News_init' );

}

// register video menu admin 

if (!function_exists('wpc_News_Video_init')) {

    function wpc_News_Video_init() {
        $labels = array(
            'name'                  => _x( 'Video', 'News type general name', 'video' ),
            'singular_name'         => _x( 'Videos', 'Post type singular name', 'video' ),
            'menu_name'             => _x( 'Videos', 'Admin Menu text', 'video' ),
            'name_admin_bar'        => _x( 'Videos', 'Add New on Toolbar', 'video' ),
            'add_new'               => __( 'Add New', 'news' ),
            'add_new_item'          => __( 'Add New news', 'news' ),
            'new_item'              => __( 'New news', 'news' ),
            'edit_item'             => __( 'Edit news', 'news' ),
            'view_item'             => __( 'View news', 'news' ),
            'all_items'             => __( 'All news', 'news' ),
            'search_items'          => __( 'Search news', 'news' ),
            'parent_item_colon'     => __( 'Parent news:', 'news' ),
            'not_found'             => __( 'No recipes found.', 'news' ),
            'not_found_in_trash'    => __( 'No recipes found in Trash.', 'news' ),
            'featured_image'        => _x( 'news Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'recipe' ),
            'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'recipe' ),
            'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'recipe' ),
            'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'recipe' ),
            'archives'              => _x( 'Recipe archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'recipe' ),
            'insert_into_item'      => _x( 'Insert into recipe', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'recipe' ),
            'uploaded_to_this_item' => _x( 'Uploaded to this recipe', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'recipe' ),
            'filter_items_list'     => _x( 'Filter recipes list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'recipe' ),
            'items_list_navigation' => _x( 'Recipes list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'recipe' ),
            'items_list'            => _x( 'Recipes list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'recipe' ),
        );     
        $args = array(
            'labels'             => $labels,
            'description'        => 'Video custom post type.',
            'menu_icon' => 'dashicons-video-alt2',
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => array( 'slug' => 'recipe' ),
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_position'      => 21,
            'supports'           => array( 'title', 'editor', 'author', 'thumbnail' ),
            'taxonomies'         => array( 'category', 'post_tag' ),
            'show_in_rest'       => true
        );
          
        register_post_type( 'Videos', $args );
    }
    add_action( 'init', 'wpc_News_Video_init' );
    
    }


require get_template_directory() . '/walker/top-menu-walker.php';
