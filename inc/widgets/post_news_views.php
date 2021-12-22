<?php 

class Wpc_Posts_List extends WP_Widget{

    function __construct() {
        parent::__construct(
            'wpc_posts_list',
            __('WPC Posts List', 'wpc'), 
            [
                'description' => __('This widget creates a posts list', 'wpc'),
                'customize_selective_refresh' => true,
            ]
        );
    }

    function widget($args, $instance) {
        echo $args['before_widget'];
        $title = apply_filters('widget_title', $instance['title']);
        if (!empty($title)) {
            echo $args['before_title'] . $title . $args['after_title'];
        }
        $options = [];

        if(isset($instance['orderby']) && $instance['orderby'] == 'post_views'){

            $options['meta_key'] = 'wpb_post_views_count';
            $options['orderby'] = 'meta_value_num';


        } elseif (isset($instance['orderby']) && $instance['orderby'] == 'post_date') {
            $options['orderby'] = 'date';

        }

        if (isset($instance['posts_count'])) {
                $options['numberposts'] = $instance['posts_count'];
            }
    
        $views_posts = get_posts($options);
?>
    
<div class="mostReadedSide  aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000">
                              <ul class="mostInportNewsList">

                              <?php

if (count($views_posts)) {
    foreach($views_posts as $post) {
        ?>

                                 <li class="MostsingleNewsList">
                                    <div class="news_img">
                                       <?php echo get_the_post_thumbnail($post, 'thumbnail', ['class' => 'img-fluid float-left']) ?>

                                    </div>
                                    <a href="<?php echo get_permalink($post)?>" class="tc">
                                       <p>
                                    
                                       <?php echo substr($post->post_title, 0, 80); ?>

                                    
                                    </p>
                                    </a>
                                 </li>

                                 <?php }?>
                            
                               
                              </ul>
                           </div>

<?php

        echo $args['after_widget'];

    }



 

}


function form($instance) {
    if (isset($instance['title'])) {
        $title = $instance['title'];
    } else {
        $title = 'Popular Posts';
    }

    if(isset($instance['posts_count'])){

        $posts_count = $instance['posts_count'];
    }else{
        $posts_count = '5';

    }


    if(isset($instance['orderby'])){

        $orderby = $instance['orderby'];

    }else{
        $orderby = "post_views";
    }

    if(isset($instance['order'])){
        $order = $instance['order'];


    }else{
        $order = 'desc';

    }



    ?>

    <p>
    <label for="<?php echo $this->get_field_id('title'); ?>">Title:</label>
    <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>">
</p> 

<p>
			<label for="<?php echo $this->get_field_id('posts_count'); ?>">Number of posts to show:</label>
			<input class="tiny-text" id="<?php echo $this->get_field_id('posts_count'); ?>" name="<?php echo $this->get_field_name('posts_count'); ?>" type="number" step="1" min="1" value="<?php echo $posts_count; ?>" size="3">
		</p>


        <p>
                <label for="<?php echo $this->get_field_id('orderby'); ?>"><?php _e('Order By', 'wpc'); ?></label>
                <select name="<?php echo $this->get_field_name('orderby') ?>" id="<?php echo $this->get_field_id('orderby'); ?>">
                    <option value="post_date" <?php echo ($orderby == 'post_date') ? 'selected' : ''; ?>><?php _e('Post date', 'wpc'); ?></option>
                    <option value="post_views" <?php echo ($orderby == 'post_views') ? 'selected' : ''; ?>><?php _e('Post views', 'wpc'); ?></option>
                </select>
            </p>
            <p>
                <label for="<?php echo $this->get_field_id('order'); ?>"><?php _e('Order', 'wpc'); ?></label>
                <select name="<?php echo $this->get_field_name('order') ?>" id="<?php echo $this->get_field_id('order'); ?>">
                    <option value="desc" <?php echo ($order == 'desc') ? 'selected' : ''; ?>><?php _e('DESC', 'wpc'); ?></option>
                    <option value="asc" <?php echo ($order == 'asc') ? 'selected' : ''; ?>><?php _e('ASC', 'wpc'); ?></option>
                </select>
            </p>
  
 <?php
 

}


function update($new_instance, $old_instance) {
    $new_data = [];
    $new_data['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : $old_instance['title'];
    $new_data['posts_count'] = (isset($new_instance['posts_count']) && is_numeric($new_instance['posts_count'])
        && $new_instance['posts_count'] > 0) ? ((int)($new_instance['posts_count'])) : $old_instance['posts_count'];

        $new_data['orderby'] = (in_array($new_instance['orderby'], ['post_views', 'post_date'])) ? $new_instance['orderby'] : $old_instance['orderby'];
        $new_data['order'] = (in_array($new_instance['order'], ['desc', 'asc'])) ? $new_instance['order'] : $old_instance['order'];
    return $new_data;                
}

}

?>