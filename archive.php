<?php get_header();?>
<?php $base = get_template_directory_uri() . '/' ?>

<section class="genera_container mt-md-5 mt-4 archiveArea mb-5 mb-md-0">
            <div class="postContainer container">
               <div class="row">
                  <div class="sideContainer ">
                     <div class="archiveContainer bg_white">
                        <div class="archiveContents">
                           <div class="widgetSideTitle">
                              <h2>
                                 
                              <?php get_template_part('partials/single/categories')?> 
                           
                           
                           </h2>
                              <div class="leftArrow"><img src="<?php echo $base?>assets/img/icons/Arrows-Left.svg" alt=""></div>
                           </div>
                           <?php if ( have_posts() ) : ?>

                           <ul class="archiveContList">

<?php while ( have_posts() ) : the_post(); ?>
<?php  get_template_part('partials/post-card-rectangle');?>
<?php endwhile;?>

                    
               
               
                           </ul>
                           <!-- /.archiveContList -->
                           <?php else:  ?>
<p><?php _e( 'لا توجد مقالات في هذا التصنيف ' ); ?></p>
<?php endif; ?>
                        </div>

                        <?php get_template_part('partials/pagination')?>


                        

                     </div>
                     <!-- /.archiveContainer -->
                  </div>
                  <!-- /.post_container -->
                  <div class="widgetColum">
             
                     <!-- /.returnTaboun_wid -->
                     <div class="sidebar_widget bg_white">
                     <?php get_sidebar()?>
                     </div>
                     <!-- /.sidebar_widget -->
                  </div>
                  <!-- /.post_side_wid -->
               </div>
               <!-- /.postRow -->
            </div>
            <!-- /.postContainer -->
         </section>
<?php

get_footer();?>