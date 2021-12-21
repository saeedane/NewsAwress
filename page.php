<?php  get_header()?>
<section class="postPromotedcontainer mt-md-5 mt-0 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000">
            <div class="container">
               <div class="postPromotedbanar">

               <?php get_template_part('partials/single/post-thumbnail')?>

            </div>
            </div>
         </section>

         <section class="genera_container postpageSection aos-init" data-aos="fade-up" data-aos-duration="1000">
            <div class="postpageContainer container">
               <div class="row">
                  <div class="sideContainer">
                     <div class="generalpostDetails">
                        <div class="genPostConten bg_white">
                           <div class="genPosttitle">
                              <h1><?php the_title()?></h1>
                              <div class="singleShareIcons">
                                 <lord-icon class="shareIoc" src="assets/img/svg-ani/itfliaju.json" trigger="hover" colors="primary:#A5A5A5,secondary:#A5A5A5" style="width:35px;height:35px">
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
                       
                           <!-- /.genPostPara -->
                        </div>
                   
                     </div>
                     <!-- /.generalpostDetails -->
                     <?php comments_template(); ?>

                  </div>
                  <!-- /.post_container -->
               </div>
               <!-- /.postRow -->
            </div>
            <!-- /.postpageContainer container -->
         </section>

<?php  get_footer()?>