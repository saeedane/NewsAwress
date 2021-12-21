
<?php $base = get_template_directory_uri() . '/' ?>

<div class="col-lg-4 col-md-6 col-sm-6 mb-4 mb-md-4 ">
                        <div class="single_podcost_box aos-init" data-aos="fade-up" data-aos-duration="1000">
                           <div class="podcost_img">
                              <a href="#">
                                 <span class="mostReadeIcon">
                                    <lord-icon src="<?php echo $base ?>assets/img/svg-ani/fpipqhrr.json" trigger="loop" colors="primary:#ffffff,secondary:#ffffff" stroke="100" style="width:30px;height:30px">
                                    </lord-icon>
                                 </span>
                                <?php the_post_thumbnail(array('383','216'))?>
                              </a>
                           </div>
                           <div class="podcost_content">
                              <a href="#">
                                 <h3><?php the_title();?></h3>
                              </a>
                              <p><?php the_excerpt()?></p>
                              <a href="<?php the_permalink()?>" class="listenNow">استمع الآن</a>
                           </div>
                        </div>
                     </div>

         