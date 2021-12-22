<?php 

require 'sidebars.php';
require 'post_news_views.php';
require 'post_tab_tags.php';


add_action('widgets_init', function() {
    register_widget('Wpc_Posts_List');
    register_widget('Wpc_Posts_Tab_Tags');

});


?>