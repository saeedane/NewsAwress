<?php $base = get_template_directory_uri() . '/' ?>

<?php get_header();?>
<section class="archive_podcast_banar aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000">
            <div class="container">
               <div class="archive_banar bg_white">
                  <div class="archive_banar_img">
                     <img src="<?php echo $base?>assets/img/Archive/podcasting.jpg" alt="">
                  </div>
                  <div class="archive_banar_title">
                     <div class="archive_banar_title_cont">
                        <h2>بودكاست أوراس</h2>
                        <p>هنا تجد كل البرامج الصوتية التي ننتجها في منصة أوراس والمواسم التي قدمت فيها</p>
                     </div>
                     <div class="podcastLogo">
                        <p>يمكنك أن تستمع إلينا عبر:</p>
                        <a href="#" class="podCastLogo" data-toggle="tooltip" data-placement="top" title="" data-original-title="آبل بودكاست">
                           <lord-icon src="assets/img/svg-ani/lsodnvvi.json" trigger="hover" colors="primary:#707070,secondary:#707070" stroke="83" style="width:40px;height:40px">
                           </lord-icon>
                        </a>
                        <a href="#" class="podCastLogo" data-toggle="tooltip" data-placement="top" title="" data-original-title="غوغل بودكاست ">
                           <lord-icon src="assets/img/svg-ani/eqlquayh.json" trigger="hover" colors="primary:#707070,secondary:#707070" stroke="81" style="width:40px;height:40px">
                           </lord-icon>
                        </a>
                     </div>
                  </div>
                  <!-- /.archive_banar_title -->
               </div>
               <!-- /.archive_banar -->
            </div>
            <!-- /.container -->
         </section>


         <section class="archive_podcast_area ">
            <div class="container">
               <div class="archive_podcast_container bg_white">
                  <div class="row">
            
                  <?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
<?php   has_post_format("audio") ?   get_template_part('partials/post-small-card') : ""?>       

<?php endwhile;?>
<?php else:  ?>
<p><?php _e( ' لايحتوي على مقال صوتي' ); ?></p>
<?php endif; ?>
                    
              
                    
                  </div>
                  <!-- /.row -->
               </div>
               <!-- /.archive_podcast_container -->
            </div>
            <!-- /.container -->
            <div class="container ">
            <?php get_template_part('partials/pagination')?>

               <!-- /.archivePagination -->
            </div>
            <!-- /.container -->
         </section>

         <?php get_footer();?>
