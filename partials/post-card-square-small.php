<div class="col-xl-4 col-lg-6 col-md-6 col-12">
                  <li class="MostsingleNewsList" data-aos="fade-up" data-aos-duration="1000">
                     <div class="news_img">
                        <a href="<?php the_permalink()?>"> 
<?php the_post_thumbnail()?>                        
                        </a>
                     </div>
                     <a href="#" class="blc">
                        <p  >
                           <lord-icon class="wSvg"
                              src="<?php echo $base ?>assets/img/svg-ani/fgkmrslx.json"
                              trigger="loop"
                              stroke="100"
                              colors="primary:#000,secondary:#000"
                              style="width:25px;height:25px">
                           </lord-icon>
                           <lord-icon class="dSvg"
                              src="<?php echo $base ?>assets/img/svg-ani/fgkmrslx.json"
                              trigger="loop"
                              stroke="100"
                              colors="primary:#A5A5A5,secondary:#A5A5A5"
                              style="width:25px;height:25px">
                           </lord-icon>

                           <?php echo substr(get_the_title(), 0, 50); ?>...
                        </p>
                        <span >22 مارس 2020 </span>
                     </a>
                  </li>
               </div>