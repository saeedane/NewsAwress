
<?php $base = get_template_directory_uri() . '/' ?>

<li class="MostsingleNewsList aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000">
                                    <a href="#" class="blc">
                                       <p>
                          
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

                                          <?php the_title();?>

                                       </p>
                                    </a>
                                    <div class="news_img">
                                       <a href="#">

                                       <?php the_post_thumbnail();?>
                                       </a>  
                                    </div>
                                 </li>