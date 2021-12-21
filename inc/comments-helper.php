<?php 
 $base = get_template_directory_uri() . '/' ;

/// custome comment list 

if( ! function_exists( 'better_commets' ) ):
    function better_commets($comment, $args, $depth) {
        ?>

    </a>
    <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>" style="list-style: none;">
    <?php
            if (!is_single() ) {return;}
        $nonce = wp_create_nonce( 'pt_like_it_nonce' );
        $likes = get_post_meta( get_the_ID(), '_pt_likes', true );

        ?>
    <div class="media-body" data-post-id="<?php   echo get_the_ID()?>" data-nonce="<?php echo $nonce?>">
    <a href="#"><?php echo get_avatar($comment,$size='60',$default='http://0.gravatar.com/avatar/36c2a25e62935705c5565ec465c59a70?s=32&d=mm&r=g',null,array('class' => array('float-right', 'coment_user') )  ); ?>

    
                    <?php if ($comment->comment_approved == '0') : ?>
                        <em><?php esc_html_e('Your comment is awaiting moderation.','5balloons_theme') ?></em>
                        <br />
                    <?php endif; ?>
                    <h4 class="mt-0"><?php echo get_comment_author() ?></h4>

                    <h5><?php printf(/* translators: 1: date and time(s). */ esc_html__('%1$s at %2$s' , '5balloons_theme'), get_comment_date(),  get_comment_time()) ?></h5>


                <p style="color:#707070;"> <?php comment_text() ?> 
                نهاية، تبقى مساحة الطائرات المُسيَّرة لكتائب القسام مجهولة إلى حدٍّ كبير، وما خَفِيَ منها ربما يكون أكبر بكثير مما هو مُعلَن، لكن المؤكَّد أن المقاومة الفلسطينية باتت تمتلك سلاحا نوعيا



            
            
            </p>

                <ul class="coment_like_share">
                                    <li>
                                       <a href="#" id="lineComent" class="liked"  >
                                          <lord-icon src="<?php echo get_template_directory_uri()?>/assets/img/svg-ani/hhzgyzgg.json" trigger="hover" colors="primary:#000000,secondary:#000000" stroke="92" style="width:30px;height:30px">
                                          </lord-icon>
                                          <?php echo $likes?>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="#" id="dislikeComent" class="dislike" >
                                          <lord-icon src="<?php echo get_template_directory_uri()?>/assets/img/svg-ani/hrqwmuhr.json" trigger="hover" colors="primary:#000000,secondary:#000000" stroke="92" style="width:30px;height:30px">
                                          </lord-icon>
                                    </li>
                                    <li><a href="#" id="replayComent"><img src="<?php echo get_template_directory_uri()?>/assets/img/icons/reply.svg" alt=""> <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?> </a></li>
                                 </ul>

                    </li>

    <?php
            }
    endif;
