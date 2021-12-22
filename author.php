<?php  get_header() ?>
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
                                 
                             مقالات كاتب    : <?php echo get_author_name()?>
                           
                           
                           </h2>
                              <div class="leftArrow"><img src="<?php echo $base?>assets/img/icons/Arrows-Left.svg" alt=""></div>
                           </div>
                           <ul class="archiveContList">
                
<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
<?php  get_template_part('partials/post-auther-card');?>
<?php endwhile;?>
<?php else:  ?>
<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
                    
               
               
                           </ul>
                           <!-- /.archiveContList -->
                        </div>
                      <?php get_template_part('partials/pagination')?>
                     </div>
                     <!-- /.archiveContainer -->
                  </div>
                  <!-- /.post_container -->
                  <div class="widgetColum">
                     <div class="returnTaboun_wid bg_white mb-5">
                        <ul class="nav nav-pills retureTaboList">
                           <li class="nav-item">
                              <a class="nav-link active" href="#">
                                 <span class="retureTabImg">
                                    <img src="assets/img/post-general/retureTabImg-1.png" alt="">
                                    <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" style="enable-background:new -580 439 577.9 194;" xml:space="preserve">
                                       <circle cx="50" cy="50" r="46"></circle>
                                    </svg>
                                 </span>
                              </a>
                              <h5 class="returtab-tabContents">عودة تبون.. أهم المحطات من الغياب إلى العودة </h5>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="#">
                                 <span class="retureTabImg">
                                    <img src="assets/img/post-general/retureTabImg-3.png" alt="">
                                    <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" style="enable-background:new -580 439 577.9 194;" xml:space="preserve">
                                       <circle cx="50" cy="50" r="46"></circle>
                                    </svg>
                                 </span>
                              </a>
                              <h5 class="returtab-tabContents">عودة تبون.. أهم المحطات من الغياب إلى العودة </h5>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="#">
                                 <span class="retureTabImg">
                                    <img src="assets/img/post-general/retureTabImg-3.png" alt="">
                                    <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" style="enable-background:new -580 439 577.9 194;" xml:space="preserve">
                                       <circle cx="50" cy="50" r="46"></circle>
                                    </svg>
                                 </span>
                              </a>
                              <h5 class="returtab-tabContents">عودة تبون.. أهم المحطات من الغياب إلى العودة </h5>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="#">
                                 <span class="retureTabImg">
                                    <img src="assets/img/post-general/retureTabImg-4.png" alt="">
                                    <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" style="enable-background:new -580 439 577.9 194;" xml:space="preserve">
                                       <circle cx="50" cy="50" r="46"></circle>
                                    </svg>
                                 </span>
                              </a>
                              <h5 class="returtab-tabContents">عودة تبون.. أهم المحطات من الغياب إلى العودة </h5>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="#">
                                 <span class="retureTabImg">
                                    <img src="assets/img/post-general/retureTabImg-1.png" alt="">
                                    <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" style="enable-background:new -580 439 577.9 194;" xml:space="preserve">
                                       <circle cx="50" cy="50" r="46"></circle>
                                    </svg>
                                 </span>
                              </a>
                              <h5 class="returtab-tabContents">عودة تبون.. أهم المحطات من الغياب إلى العودة </h5>
                           </li>
                        </ul>
                     </div>
                     <!-- /.returnTaboun_wid -->
           
                     <?php get_sidebar()?>
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


<?php  get_footer() ?>