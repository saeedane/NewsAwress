
<?php $base = get_template_directory_uri() . '/' ?>

<footer class="footer_area"  data-aos="fade-up" data-aos-duration="1000">
            <div class="container">
               <div class="row">
                  <div class="col-xl-9 col-lg-8 col-md-12">
                     <div class="row">
                        <div class="col-12">
                           <div class="footer_logo">
                              <a href="#" class="footerLogo"><img class="w-logo" src="<?php echo $base ?>assets/img/logoAwras.svg" alt="Logo"><img class="d-logo" src="<?php echo $base ?>assets/img/d-logoAwras.svg" alt="Logo"></a>
                           </div>
                        </div>


                        <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
                           <div class="col-lg-4 col-md-4">
                           <?php dynamic_sidebar( 'footer-1' ); ?>

                        </div>


<?php endif; ?>



                        <div class="col-lg-4 col-md-4">
                           <div class="quickLinksWidget">
                              <h3  >شبكات التواصل</h3>
                              <ul  class="quickLinks">
                                 <li><a href="#"> فيسبوك</a></li>
                                 <li><a href="#">إنستغرام</a></li>
                                 <li><a href="#">تويتر</a></li>
                                 <li><a href="#">يوتيوب</a></li>
                                 <li><a href="#">شبكات أخرى</a></li>
                              </ul>
                           </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                           <div class="quickLinksWidget">
                              <h3  >خدماتنا</h3>
                              <ul  class="quickLinks">
                                 <li><a href="#">  برودكاست</a></li>
                                 <li><a href="#">WebStoriesالقصص المصورة </a></li>
                                 <li><a href="#">الفيديو الرقمي</a></li>
                                 <li><a href="#">النشرة الرقمية</a></li>
                                 <li><a href="#">خدمات أخرى</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- /.col-xl-9 col-lg-8 -->
                  <div class="col-xl-3 col-lg-4 col-md-12">
                     <div class="footer_logo_left cb">
                        تصميم وتطوير
                        <a href="#" class="FootLogLeft"> <img class="w-logo" src="<?php echo $base ?>assets/img/footerLogoLeft.svg" alt="صميم وتطوير"> <img class="d-logo" src="<?php echo $base ?>assets/img/d-footerLogoLeft.svg" alt="صميم وتطوير"></a>
                     </div>
                  </div>
               </div>
               <!-- /.row -->
            </div>
            <!-- /.container -->
         </footer>
      </div>
    <?php wp_footer();?>
   </body>

<!-- Mirrored from mahabub.99webdesigns.net/arabicnews/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Oct 2021 15:04:39 GMT -->
</html>