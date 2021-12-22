<?php 

//Register Meta Box
function rm_register_meta_box() {
    add_meta_box( 'rm-meta-box-id', esc_html__( 'Breaking News
    ', 'text-domain' ), 'rm_meta_box_callback', 'post', 'side', 'high' );
}
add_action( 'add_meta_boxes', 'rm_register_meta_box');
 
//Add field
function rm_meta_box_callback( $post ) {

    $meta_post = get_post_meta($post->ID,'breaking_news_meta_key');

    
 ?>

    <p> 
        
    <div class="form-check ">

    <input id="postId" name="post_id" type="hidden" data-post-id="<?php echo $post->ID?>">

    <input type="checkbox" class="form-check-input text-right" id="exampleCheck1" name="awress-meta-posts-news" 
    
    <?php if( $meta_post == true  ) { ?>checked="checked"<?php }else{?><?php  } ?> 
    >
    <label class="form-check-label" for="exampleCheck1"> checked of news  </label>

</br>



  </div>
              
            </p>

           
            

    <?php
}




