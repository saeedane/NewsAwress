<?php $base = get_template_directory_uri() . '/' ?>

<div class="sideContainer">
               <div class="banar_side bg_white">
                  <div class="newsBnaBox">
                     <div class="newsBanarImg">
                        <a href="#" class="newsBanar_Img">

                        <?php the_post_thumbnail()?>

                        </a>
                        <div class="newsbanar-play">
                           <a href="#" class="news_tag_item news_tag_single">
                              <lord-icon class="asrrowSvg"
                                 src="<?php echo $base ?>assets/img/svg-ani/onyplpvn.json"
                                 trigger="hover"
                                 stroke="100"
                                 colors="primary:#FB3B3C,secondary:#FB3B3C"
                                 style="width:32px;height:32px">
                              </lord-icon>
                
                              <span class="news_tag_text"> 

                              <?php
                                 $tag = get_the_tags(get_the_ID());
                                 if ($tag) {
                                 $tag = $tag[0]; echo $tag->name;
                                 }
?>
                              </span>
                           </a>
                           <a href="#" class="PlayNewsBanar">

                           <?php if(has_post_format('video')) : ?>
                              <lord-icon class="wSvg" src="<?php echo $base ?>assets/img/svg-ani/vwacmoen.json" trigger="hover"colors="primary:#121331,secondary:#121331"  delay="3"  stroke="100" >
                              </lord-icon>

                              <?php elseif(has_post_format('image')):?>
                
                                 <lord-icon class="wSvg" src="<?php echo $base ?>assets/img/svg-ani/fgkmrslx.json"  trigger="hover"colors="primary:#121331,secondary:#121331"  delay="3"  stroke="100">
                                 </lord-icon>

                              <?php else:?>
                                 <lord-icon class="wSvg" src="<?php echo $base ?>assets/img/svg-ani/fpipqhrr.json"  trigger="hover"colors="primary:#121331,secondary:#121331"  delay="3"  stroke="100">
                                 </lord-icon>
                              <?php endif ?>   
                           </a>
                        </div>
                     </div>
                     <div class="newsBnaContentBox">
                        <div class="newsBnaContent">
                           <a href="<?php the_permalink()?>">
                              <h3 ><?php the_title(); ?></h3>
                           </a>

                           <?php the_excerpt();?>



                        </div>
                     </div>
                  </div>
                  <!-- /.newsBnaBox -->
               </div>
               <!-- /.banar_side -->
            </div>

            <!-- /sideContainer -->