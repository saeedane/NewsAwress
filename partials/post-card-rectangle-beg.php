<div class="newsbanarTop">
            <div class="newsbanarright pr">
               <a href="#" class="newsBanar_Img">
               <?php the_post_thumbnail() ?>
                  <span class="playNeVid">
                     <lord-icon class="rot9"
                        src="<?php echo $base ?>assets/img/svg-ani/vwacmoen.json"
                        trigger="hover"
                        delay="3"
                        colors="primary:#ffffff,secondary:#ffffff"
                        stroke="83"
                        style="width:55px;height:55px">
                     </lord-icon>
                  </span>
               </a>
            </div>
            <div class="newsbanarLeft">
               <a href="#">
                  <h3   class="cb"><?php the_title() ?></h3>
               </a>
               <p class="mobileNone" ><?php the_excerpt() ?> </p>
               <div class="shareNews mobileNone">
                  <ul  class="shareThis">
                     <li><a href="#"><img src="<?php echo $base ?>assets/img/social/gray-facebook.svg" alt=""></a></li>
                     <li><a href="#"><img src="<?php echo $base ?>assets/img/social/gray-twitter.svg" alt=""></a></li>
                  </ul>
                  <div class="publistDate" >نُشر يوم الجمعة 22 مارس 2020 </div>
               </div>
            </div>
         </div>