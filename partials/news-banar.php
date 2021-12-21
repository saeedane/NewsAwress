
                <?php
                   $post_id = get_the_ID();
                   $post_link = get_permalink($post_id);
                   
                   ?>
                    
                    <div class="banar_side bg_white">

                        <div class="newsBnaBox">
                           <div class="newsBanarImg">
                              <a href="#" class="newsBanar_Img">
                                 
                             <?php  the_post_thumbnail( array(930, 521));  ?>
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
                                    <span class="news_tag_text">كورونا </span>
                                 </a>
                                 <a href="#" class="PlayNewsBanar">
                                    <lord-icon class="wSvg rot9"
                                       src="<?php echo $base ?>assets/img/svg-ani/vwacmoen.json"
                                       trigger="hover"
                                       delay="3"
                                       colors="primary:#000,secondary:#000"
                                       stroke="100"
                                       style="width:35px;height:35px">
                                    </lord-icon>
                                    <lord-icon class="dSvg rot9"
                                       src="<?php echo $base ?>assets/img/svg-ani/vwacmoen.json"
                                       trigger="hover"
                                       delay="3"
                                       colors="primary:#000,secondary:#000"
                                       stroke="100"
                                       style="width:35px;height:35px">
                                    </lord-icon>
                                 </a>
                              </div>
                           </div>
                           <div class="newsBnaContentBox">
                              <div class="newsBnaContent">
                                 <a href="<?php echo $post_link?>">
                                    <h3  ><?php the_title();?></h3>
                                 </a>
                                 <p  class="mobileNone">
                                 <?php the_content();?>
                                 </p>
                              </div>
                              <div class="shareNewsBox mobileNone" >
                                 <div class="publistDate" >

                                 نُشر يوم  <?php the_time('l, F jS, Y')?>
                                 
                                 </div>
                                 <ul  class="shareThis">
                                    <li><a href="#"><img src="<?php echo $base ?>assets/img/social/gray-facebook.svg" alt=""></a></li>
                                    <li><a href="#"><img src="<?php echo $base ?>assets/img/social/gray-twitter.svg" alt=""></a></li>
                                 </ul>
                              </div>
                           </div>
                        </div>



                        <!-- /.newsBnaBox -->
                     </div>