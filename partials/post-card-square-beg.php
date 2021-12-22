<?php $base = get_template_directory_uri() . '/' ?>


<div class="col-lg-4 col-md-4 col-sm-6 col-12">
            <div class="OrasVideosBox" data-aos="fade-up" data-aos-duration="1000">
               <div class="OrasVideosImage">
                  <a href="#">
                      
<?php the_post_thumbnail(array('340','184'));?>              
                
                </a>
                  <a href="#" class="playNeVid">
                     <lord-icon class="wSvg rot9"
                        src="<?php echo $base ?>assets/img/svg-ani/vwacmoen.json"
                        trigger="hover"
                        delay="3"
                        colors="primary:#ffffff,secondary:#ffffff"
                        stroke="30"
                        style="width:55px;height:55px">
                     </lord-icon>
                  </a>
               </div>
               <div class="OrasVideosContent">
                  <a href="#">
                     <h4   class="cb">
                     
                     <?php echo substr(get_the_title(), 0, 50); ?>...
                     </h4>
                  </a>
                  <p  >
                      
<?php the_excerpt()?>



                  </p>
               </div>
            </div>
         </div>