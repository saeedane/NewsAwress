
<?php
$related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 3, 'post__not_in' => array($post->ID) ) );

?>


<?php

if( $related ): 

?>
<div class="relatedPost aos-init aos-animate " data-aos="fade-up" data-aos-duration="1000">
                                 <h4 class="relatedTitle">طالع أيضا</h4>
<?php foreach( $related as $post ) {
setup_postdata($post); ?>


    <ul class="mostInportNewsList">
                                  
                             
 <li class="MostsingleNewsList">
                                       <div class="news_img">
                                          <?php the_post_thumbnail()?>
                                       </div>
                                       <a href="#" class="tc">
                                          <p><?php the_title(); ?></p>
                                       </a>
                                    </li>


                                    </ul> 
<?php }?>
</div>

<?php else:
?>


<?php endif;
wp_reset_postdata();

?>




