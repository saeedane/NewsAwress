<?php 

// register sidebar 

function wpb_widgets_init() {
 
    register_sidebar( array(
        'name' => __( 'Main Sidebar', 'wpb' ),
        'id' => 'sidebar-1',
        'description' => __( 'The main sidebar appears on the right on each page except the front page template', 'wpb' ),
        'before_widget' => ' <div class=" pt-3 aos-init aos-animate   %2$s"  id="%1$s" data-aos="fade-up" data-aos-duration="1000">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="blc">',
        'after_title' => '</h4>',
    ) );

    register_sidebar( array(
        'name' => __( 'Home Sidebar', 'wpb' ),
        'id' => 'home-sidebar-1',
        'description' => __( 'The Home sidebar appears on the right on each page except the front page template', 'wpb' ),
        'before_widget' => '<div class="importantNewsBox home_sidebar  ">        ',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="titleMobile">',
        'after_title' => '</h4>',
    ) );
 
    register_sidebar( array(
        'name' =>__( 'Footer Awress News who are we', 'wpb'),
        'id' => 'footer-1',
        'description' => __( 'Appears on the static front page template', 'wpb' ),
        'before_widget' => '<div id="%1$s" class="quickLinksWidget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ) );


    register_sidebar( array(
        'name' =>__( 'Footer Social Media ', 'wpb'),
        'id' => 'footer-2',
        'description' => __( 'Appears on the static front page template', 'wpb' ),
        'before_widget' => '<div id="%1$s" class="quickLinksWidget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ) );


    
    register_sidebar( array(
        'name' =>__( 'Footer khadamat Awress News ', 'wpb'),
        'id' => 'footer-3',
        'description' => __( 'Appears on the static front page template', 'wpb' ),
        'before_widget' => '<div id="%1$s" class="quickLinksWidget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ) );

    }
 
add_action( 'widgets_init', 'wpb_widgets_init' );