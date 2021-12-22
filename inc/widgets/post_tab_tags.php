<?php 
 $base = get_template_directory_uri() . '/' ;

class Wpc_Posts_Tab_Tags extends WP_Widget{

    function __construct() {
        parent::__construct(
            'Wpc_Posts_Tab_Tags',
            __('WPC Posts Tab Tags', 'wpc'), 
            [
                'description' => __('This widget creates a posts Tags', 'wpc'),
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



        ?>

<ul class="nav news_tagList grc mobileNone" id="news_tagList" role="tablist">

<?php

        for( $i = 1; $i <= 4; $i++ ) { 
            if($i == 1){
                $class = "active";
                $selected = "true";
            }else{
                $class = "";
                $selected = "false";

            }

    
        if(isset($instance['tab_'.$i.'_title'])){

             $instance['tab_'.$i.'_title'];
             echo ' <li class="nav-item" role="presentation">';
                 echo '<a class="nav-link show '.$class.'"  data-toggle="pill" href="#pills-tag-'.$i.'" role="tab" aria-controls="pills-tag-'.$i.'" aria-selected="'.$selected.'"><span>#</span>';  
        
                 echo  $instance['tab_'.$i.'_title'];

             echo '</a>';
             echo '</li>';

             



        }

    }
        ?>

 </ul>


 <div class="tab-content mobileNone" id="news_tagListContent">
 <?php 

  for( $i = 1; $i <= 4; $i++ ) { 

if($i == 1){
    $class = "active show";
}else{
    $class = "";

}

    

$posts_tags = get_posts('post_type=post&numberposts=2&orderby=name&tag='.$instance['tab_'.$i.'_title']);

 ?>

                              <div class="tab-pane fade <?php echo $class?>" id="pills-tag-<?php echo $i ?>" role="tabpanel" >
                        


                                 <ul class="mostInportNewsList">
                                     <?php 
                                     
                                     foreach($posts_tags as $post){


                                        echo '<li class="MostsingleNewsList">
                                        <div class="news_img"> 
                                        <img src="'.get_the_post_thumbnail($post).'" alt="News Image">
                                        </div>
                                        <a href="'.get_permalink($post).'" class="tc">
                                           <p>
                                              <lord-icon class="playSvg loadSvg rot9" src="'.get_template_directory_uri().'/assets/img/svg-ani/vwacmoen.json" trigger="hover" delay="3" colors="primary:#000000,secondary:#000000" stroke="100">
                                              </lord-icon>
                                              '.substr($post->post_title,0,80).'
                                           </p>
                                        </a>
                                     </li>';


                                     }
                                     

                                     ?>
                             
                      
                                 </ul>
                                 <!-- /.mostInportNewsList -->
                              </div>

                              <?php }?>
                     
                           </div>


                           
                           
                          

<?php



    
    
        echo $args['after_widget'];

    }

    


function form($instance) {
    if (isset($instance['title'])) {
        $title = $instance['title'];
    } else {
        $title = ' أخبار متفاعلة';
    }



    $tags = ['كورونا ',' رياضة ','فيديوهات ','منوعات '];
     for( $i = 1; $i <= 4; $i++ ) { 

    
        if(isset($instance['tab_'.$i.'_title'])){

             $instance['tab_'.$i.'_title'];
        }else{
            $instance['tab_'.$i.'_title'] = $tags[$i -1];
        }

}
   



    ?>


<p>
    <label for="<?php echo $this->get_field_id('title'); ?>">Title:</label>
    <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>">
</p> 

<?php for( $i = 1; $i <= 4; $i++ ) { ?>
	        <p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'tab_' . $i . '_title' ) ); ?>">
					<h3><b><?php echo __('Tab ' . $i . ' Tags', 'my-theme' ); ?></b></h3>
					<input type="text" id="<?php echo esc_attr( $this->get_field_id('tab_' . $i . '_title') ) ?>" name="<?php echo esc_attr( $this->get_field_name('tab_' . $i . '_title') ) ?>" class="widefat" value="<?php echo esc_attr( $instance['tab_'.$i.'_title']); ?>" />
				</label>
				
			
			</p>
        <?php
		}               
 

}



}



?>