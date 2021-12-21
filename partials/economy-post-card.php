
<?php $base = get_template_directory_uri() . '/' ?>

<li class="MostsingleNewsList" data-aos="fade-up" data-aos-duration="1000">
                           <a href="#" class="blc">
                              <p  >
                                 <lord-icon class="playSvg loadSvg wSvg rot9"
                                    src="<?php echo $base ?>assets/img/svg-ani/vwacmoen.json"
                                    trigger="hover"
                                    delay="3"
                                    colors="primary:#121331,secondary:#121331"
                                    stroke="100">
                                 </lord-icon>
                                 <lord-icon class="playSvg loadSvg dSvg rot9"
                                    src="<?php echo $base ?>assets/img/svg-ani/vwacmoen.json"
                                    trigger="hover"
                                    delay="3"
                                    colors="primary:#a5a5a5,secondary:#a5a5a5"
                                    stroke="100">
                                 </lord-icon>

<?php the_title()?>
                                </p>
                           </a>
                           <div class="news_img">
                              <a href="#">
                                  <?php the_post_thumbnail();?>
                                  
                              </a>                        
                           </div>
                        </li>