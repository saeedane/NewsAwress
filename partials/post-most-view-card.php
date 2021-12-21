
<?php $base = get_template_directory_uri() . '/' ?>


<div class="swiper-slide singleMostReaded "  style="width: 216px; margin-left: 50px;">
                     <div class="mostReaderImg">
                     <?php get_template_part('partials/single/post-thumbnail')?>
                        <a href="#" >
                           <span class="mostReadeIcon">
                           <?php if(has_post_format('video')) : ?>
                              <lord-icon class="rot9" src="<?php echo $base ?>assets/img/svg-ani/vwacmoen.json" trigger="loop" colors="primary:#ffffff,secondary:#ffffff" stroke="100" style="width:30px;height:30px">
                              </lord-icon>

                              <?php elseif(has_post_format('image')):?>
                
                                 <lord-icon class="rot9" src="<?php echo $base ?>assets/img/svg-ani/fgkmrslx.json" trigger="loop" colors="primary:#ffffff,secondary:#ffffff" stroke="100" style="width:30px;height:30px">
                                 </lord-icon>

                              <?php else:?>
                                 <lord-icon src="<?php echo $base ?>assets/img/svg-ani/fpipqhrr.json" trigger="loop" colors="primary:#ffffff,secondary:#ffffff" stroke="100" style="width:30px;height:30px">
                                 </lord-icon>
                              <?php endif ?>   

                           </span>
                        </a>
                        <div class="readeNumber"> <?php 
                        
                        
                         echo get_post_meta( get_the_ID(), 'wpb_post_views_count', true );
                        
                        
                        ?> </div>
                     </div>
                     <div class="mostReaderContent">
                        <h4  ><a href="<?php the_permalink() ?>" class="cw">

                        <?php echo substr(get_the_title(), 0, 80); ?>
                        </a></h4>
                     </div>
                  </div>