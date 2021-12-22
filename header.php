<?php $base = get_template_directory_uri() . '/' ?>

<!doctype html>
<html lang="ar" dir="rtl">
   
<!-- Mirrored from mahabub.99webdesigns.net/arabicnews/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Oct 2021 15:04:39 GMT -->
<head>
      <title>Arabic Blog</title>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name=description content="Discription Here">
      <meta name=author content="Alpha-Design">
      <link rel="icon" href="#" type="image/png">
      <?php wp_head();?>
   </head>
   <body class="">
      <div class="wraper">
         <div class="mobile_newsBanar desktopNone">
            <div class="mobile_newsConten">
               <span class="close_news"><img src="<?php echo $base ?>assets/img/icons/close-white.svg" alt=""></span>
               <!-- <p>الحكومة تكشف شروط استيراد السيارات أقل منن 3 سنوات</p> -->
               <div class="mobileNewsSliderBox">
                  <div class="swiper-container mobileNewsSlider">
                     <div class="swiper-wrapper">
                        <div class="swiper-slide">
                           <a href="#">
                              <p>الحكومة تكشف شروط استيراد السيارات أقل منن 3 سنوات</p>
                           </a>
                        </div>
                        <div class="swiper-slide">
                           <a href="#">
                              <p>الحكومة تكشف شروط استيراد السيارات أقل منن 2 سنوات</p>
                           </a>
                        </div>
                        <div class="swiper-slide">
                           <a href="#">
                              <p>الحكومة تكشف شروط استيراد السيارات أقل منن 1 سنوات</p>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
               <h2>عاجل</h2>
            </div>
         </div>
         <header class="header_area">
            <div class="mobileMenu_area">
               <div class="mobile_menu_box">
                  <div class="container">
                     <span class="overlayMenu"></span>
                     <div class="mobile_content">
                        <span class="close_menu"><img src="<?php echo $base ?>assets/img/icons/close.svg" alt=""></span>
                        <div class="mobile_search">
                           <form action="<?php echo esc_url(home_url( '/' )); ?> " id="mobileSearch" name="mobile search" method="get">
                              <input type="search"  id="search" value="<?php the_search_query(); ?>" name="s" placeholder="اكتب كلمة البحث">
                              <button type="submit" id="searchsubmit"><img src="<?php echo $base ?>assets/img/icons/ios-search-gray.svg" alt=""></button>
                           </form>
                        </div>
                        <ul class="mobile_menu">
                    
                           <?php 
                        wp_nav_menu([
                            'theme_location' => 'top-menu',
                            'container' => 'mobile_menu',
                            'menu_class' => 'meniTitle',
                        ]);
                        ?>
                        </ul>
                        <div class="mobile_poster">
                           <a href="#"><img src="<?php echo $base ?>assets/img/newsBanar.png" alt=""></a>
                        </div>

                        <ul  class="social_links">

                      <?php get_template_part('partials/sociale-media-links'); ?>

                      </ul>
                     </div>
                     <!-- /.mobile_content -->
                  </div>
               </div>
               <!-- /.mobile_menu_box -->
            </div>
            <!-- /.mobileMenu_area -->
            <div class="header_top">
               <div class="container">
                  <div class="main_menu_area">
                     <div class="menu_box">
                        <a class="nav_brand" href="index.html"><img class="w-logo" src="<?php echo $base ?>assets/img/logoAwras.svg" alt="Logo"><img class="d-logo" src="<?php echo $base ?>assets/img/d-logoAwras.svg" alt="Logo"></a>
                  

                           <?php 
                        wp_nav_menu([
                            'theme_location' => 'top-menu',
                            'container' => 'mainMenu',
                            'menu_class' => 'mainMenu',
                            'walker' => new Wpc_Top_Menu_Walker
                        ]);
                        ?>
                        <div class="search_triger mobileOnly">
                           <img src="<?php echo $base ?>assets/img/icons/ios-search.svg" alt="" class="w-logo">
                           <img src="<?php echo $base ?>assets/img/icons/w-search.svg" alt="" class="d-logo">
                        </div>
                        <ul  class="social_links">
                           <li><a href="#"><img src="<?php echo $base ?>assets/img/social/youtube.svg" alt=""></a></li>
                           <li><a href="#"><img src="<?php echo $base ?>assets/img/social/twitter.svg" alt=""></a></li>
                           <li><a href="#"><img src="<?php echo $base ?>assets/img/social/instagram.svg" alt=""></a></li>
                           <li><a href="#"><img src="<?php echo $base ?>assets/img/social/facebook.svg" alt=""></a></li>
                        </ul>
                     </div>
                     <!-- /.menu_box -->
                     <div class="menuTrigerArea">
                        <span class="colorChange">
                           <lord-icon
                              class="w-logo"
                              src="<?php echo $base ?>assets/img/svg-ani/fkebkwvd.json"
                              trigger="hover"
                              colors="primary:#555555,secondary:#FB0B0B"
                              style="width:35px;height:35px">
                           </lord-icon>
                           <lord-icon
                              class="d-logo"
                              src="<?php echo $base ?>assets/img/svg-ani/lpvyjwmy.json"
                              trigger="hover"
                              colors="primary:#ffffff,secondary:#08a88a"
                              style="width:35px;height:35px">
                           </lord-icon>
                           <!-- <img class="w-logo" src="<?php echo $base ?>assets/img/icons/night.svg" alt=""> -->
                           <!-- <img class="d-logo" src="<?php echo $base ?>assets/img/icons/w-light-icon.svg" alt=""> -->
                        </span>
                        <div class="search_triger">
                           <lord-icon
                              class="w-logo"
                              src="<?php echo $base ?>assets/img/svg-ani/msoeawqm.json"
                              trigger="hover"
                              colors="primary:#555555,secondary:#FB0B0B"
                              stroke="50"
                              style="width:35px;height:35px">
                           </lord-icon>
                           <lord-icon
                              class="d-logo"
                              src="<?php echo $base ?>assets/img/svg-ani/msoeawqm.json"
                              trigger="hover"
                              colors="primary:#ffffff,secondary:#ffffff"
                              stroke="50"
                              style="width:35px;height:35px">
                           </lord-icon>
                        </div>
                        <span class="menu_bar">
                           <lord-icon  
                              class="w-logo"
                              stroke="50"
                              src="<?php echo $base ?>assets/img/svg-ani/oeylseaa.json"
                              colors="primary:#555555,secondary:#FB0B0B"
                              style="width:35px;height:35px">
                           </lord-icon>
                           <lord-icon  
                              class="d-logo"
                              stroke="50"
                              src="<?php echo $base ?>assets/img/svg-ani/oeylseaa.json"
                              colors="primary:#ffffff,secondary:#ffffff"
                              style="width:35px;height:35px">
                           </lord-icon>
                        </span>
                     </div>
                  </div>
               </div>
            </div>


      
            <!-- /.header_top -->
            <div class="header_bottom mobileNone" id="breaking-news">
               <div class="container">
               <?php

                     $query_news = new WP_Query( array(
                              'post_type' => 'post',
                              'posts_per_page' => 3,
                              'meta_key' => 'breaking_news_meta_key',
                              'order' => 'DESC',
                              ) );

                              ?>





                  <div class="newsTopBox cw" id="news">
                     <h3   class="urgetnTag cw">
                        عاجل
                     </h3>

                  
                     <div class="swiper-container newsTopSlider">
                        <ul  class="swiper-wrapper">
                 

                      <?php  if ( $query_news->have_posts() ) : ?>

                             
                              <?php while ( $query_news->have_posts() ) : $query_news->the_post();?>


        


                              <li class="sNewsSlide cw swiper-slide" data-status-news="<?php echo get_post_meta(get_the_ID(),'breaking_news_meta_key',true)?>">
                              <a href="<?php the_permalink()?>"><?php the_title() ?></a>
                              </li>





                  <?php endwhile;
                   endif;    

                  wp_reset_postdata(); ?>
          
                  




                        </ul>
                        <div class="swiper-button-next"><img src="<?php echo $base ?>assets/img/icons/chevron-left.svg" alt=""></div>
                        <div class="swiper-button-prev"><img src="<?php echo $base ?>assets/img/icons/chevron-right.svg" alt=""></div>
                     </div>

                  </div>
               </div>
            </div>



            <!-- /.header_bottom -->
         </header>

