<?php  get_header();?>
<?php wpb_set_post_views(get_the_ID());?>



        <section class="genera_container mt-5">
            <div class="postContainer container">
               <div class="row">
                  <div class="sideContainer aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000">
                     <div class="generalpostDetails">
                        <div class="newsBanarImg">
                           <span class="newsBanar_Img ovelayBlack">
                              
                           <?php  the_post_thumbnail();  ?>

                        
                        
                        </span>
                           <div class="newsbanar-play posterDetails">
                              <span><?php the_title(); ?></span>
                              <span>

                                 <?php the_author(); ?>

                              </span>
                           </div>
                        </div>
                        <div class="genPostConten bg_white">
                           <div class="genPosttitle">
                              <h1> <?php the_title(); ?> </h1>
                              <ul class="genPostag">
                                 <li>
                                    <span>
                                       <lord-icon class="wSvg" src="<?php echo $base ?>assets/img/svg-ani/gphxrzct.json" trigger="hover" colors="primary:#A5A5A5,secondary:#A5A5A5" stroke="77" style="width:25px;height:25px">
                                       </lord-icon>
                                       <lord-icon class="dSvg" src="<?php echo $base ?>assets/img/svg-ani/gphxrzct.json" trigger="hover" colors="primary:#FB0B0B,secondary:#FB0B0B" stroke="77" style="width:25px;height:25px">
                                       </lord-icon>
                                       ارس 2014 
                                    </span>
                                 </li>
                                 <li>
                                    <a href="#">
                                       <lord-icon class="wSvg" src="<?php echo $base ?>assets/img/svg-ani/unvvkseg.json" trigger="hover" colors="primary:#A5A5A5,secondary:#A5A5A5" style="width:25px;height:25px">
                                       </lord-icon>
                                       <lord-icon class="dSvg" src="<?php echo $base ?>assets/img/svg-ani/unvvkseg.json" trigger="hover" colors="primary:#FB0B0B,secondary:#FB0B0B" style="width:25px;height:25px">
                                       </lord-icon>

                                       <?php the_author_meta( 'user_nicename' , $post->post_author ); ?> 

                                    </a>
                                 </li>
                                 <li>
                                    <a href="#">
                                       <?php get_template_part('partials/single/post-format')?> 
                                       <?php get_template_part('partials/single/categories')?> 

                                    </a>
                                 </li>
                              </ul>
                              <div class="singleShareIcons">
                                 <lord-icon class="shareIoc" src="<?php echo $base ?>assets/img/svg-ani/itfliaju.json" trigger="hover" colors="primary:#A5A5A5,secondary:#A5A5A5" style="width:35px;height:35px">
                                 </lord-icon>
                                 <ul class="shareLInks">
                                    <li><a href="#"><img src="assets/img/social/twitter.svg" alt=""></a></li>
                                    <li><a href="#"><img src="assets/img/social/instagram.svg" alt=""></a></li>
                                    <li><a href="#"><img src="assets/img/social/facebook.svg" alt=""></a></li>
                                 </ul>
                              </div>
                           </div>
                           <!-- /.genPosttitle -->
                           <?php get_template_part('partials/single/post-content');?>

             
                             <?php get_template_part('partials/single/related-post.card');?>
                           <!-- /.genPostPara -->

                        </div>
               
                     </div>
                     <!-- /.generalpostDetails -->
                     <div class="readAlsoBox whiteBoxConten bg_white mt-5 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000">
                        <div class="whiteBoxTitle">
                           <h2>اقرأ أيضا  </h2>
                        </div>
                        <div class="row readAlsoRow"  id="ajax-posts">
                                          <?php
                        $recent_posts = wp_get_recent_posts(array(
                           'numberposts' => 6, // Number of recent posts thumbnails to display
                           'post_status' => 'publish' // Show only the published posts
                        ));
                        foreach( $recent_posts as $post_item ) : ?>

                           <div class="col-lg-4 col-md-6 col-dm-6 col-6 mb-4 pb-1">
                                 <a href="#">
                                    <div class="single_alsoRead">
                                       <div class="alsoRead_img">
                                       <?php echo get_the_post_thumbnail($post_item['ID'], array('243','137')); ?>
                                       </div>
                                       <p><?php echo $post_item['post_title'] ?></p>
                                    </div>
                                 </a>
                        </div>
                        <?php endforeach; ?>


                  
                      
                        </div>
                       
                     </div>

                     <!-- /.whiteBoxConten -->

                     <div class="comentsArea mt-5 bg_white aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000">





                     <?php comments_template()?>


                       
                    
                        <!-- /.colent_list -->
                     </div>





                  </div>
                  <!-- /.post_container -->
                  <div class="widgetColum aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000">
                     <!-- /.returnTaboun_wid -->
                  <?php  get_sidebar()?>
                     <!-- /.sidebar_widget -->
                  </div>
                  <!-- /.post_side_wid -->
               </div>
               <!-- /.postRow -->
            </div>
            <!-- /.postContainer -->
         </section>
<?php  get_footer();?>