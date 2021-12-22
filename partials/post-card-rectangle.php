<?php $base = get_template_directory_uri() . '/' ?>

<li class="singleArchiveCont aos-init" data-aos="fade-up" data-aos-duration="1000">
                                 <div class="archive_post_img pr">

                                 <?php get_template_part('partials/single/post-thumbnail')?>

                                 <a href="#" class="playNeVid">




                                       <?php if(has_post_format('video')) : ?>
                              <lord-icon class="wSvg" src="<?php echo $base ?>assets/img/svg-ani/vwacmoen.json" trigger="hover" colors="primary:#ffffff,secondary:#ffffff" stroke="80"  style="width:55px;height:55px">
                              </lord-icon>

                              <?php elseif(has_post_format('image')):?>
                
                                 <lord-icon class="wSvg" src="<?php echo $base ?>assets/img/svg-ani/fgkmrslx.json" trigger="hover" colors="primary:#ffffff,secondary:#ffffff" stroke="80"  style="width:55px;height:55px">
                                 </lord-icon>

                              <?php else:?>
                                 <lord-icon class="wSvg" src="<?php echo $base ?>assets/img/svg-ani/fpipqhrr.json" trigger="hover" colors="primary:#ffffff,secondary:#ffffff" stroke="80"  style="width:55px;height:55px">
                                 </lord-icon>
                              <?php endif ?>   


                                    </a>
                                 </div>
                                 <div class="Archive-body">
                                    <a href="<?php the_permalink()?>">
                                    <?php echo substr(get_the_title(), 0, 100); ?>
                                 
                                 </a>
                                    <ul class="genPostag">
                                       <li>
                                          <span>
                                             <lord-icon class="wSvg" src="assets/img/svg-ani/zmenvmel.json" trigger="hover" delay="3" colors="primary:#A5A5A5,secondary:#A5A5A5" stroke="90" style="width:28px;height:28px">
                                             </lord-icon>
                                             <lord-icon class="dSvg" src="assets/img/svg-ani/zmenvmel.json" trigger="hover" delay="3" colors="primary:#FB0B0B,secondary:#FB0B0B" stroke="90" style="width:28px;height:28px">
                                             </lord-icon>
                                             مارس 2014 
                                          </span>
                                       </li>
                                       <li>
                                          <a href="#">
                                             <lord-icon class="wSvg" src="assets/img/svg-ani/unvvkseg.json" trigger="hover" colors="primary:#A5A5A5,secondary:#A5A5A5" style="width:25px;height:25px">
                                             </lord-icon>
                                             <lord-icon class="dSvg" src="assets/img/svg-ani/unvvkseg.json" trigger="hover" colors="primary:#FB0B0B,secondary:#FB0B0B" style="width:25px;height:25px">
                                             </lord-icon>
                                             <?php the_author(); ?>
                                          
                                          </a>
                                       </li>
                                    </ul>
                                 </div>
                              </li>