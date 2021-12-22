<?php get_header();?>




<div class="returnTaboun_wid returnTabounMobile bg_white desktopNone">
   <ul class="nav nav-pills retureTaboList">
      <li class="nav-item">
         <a class="nav-link active" href="#">
            <span class="retureTabImg">
               <img src="<?php echo $base ?>assets/img/post-general/retureTabImg-1.png" alt="">
               <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" style="enable-background:new -580 439 577.9 194;"
                  xml:space="preserve">
                  <circle cx="50" cy="50" r="46" />
               </svg>
            </span>
         </a>
         <h5 class="returtab-tabContents">عودة تبون.. أهم المحطات من الغياب إلى العودة </h5>
      </li>
      <li class="nav-item">
         <a class="nav-link" href="#">
            <span class="retureTabImg">
               <img src="<?php echo $base ?>assets/img/post-general/retureTabImg-3.png" alt="">
               <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" style="enable-background:new -580 439 577.9 194;"
                  xml:space="preserve">
                  <circle cx="50" cy="50" r="46" />
               </svg>
            </span>
         </a>
         <h5 class="returtab-tabContents">عودة تبون.. أهم المحطات من الغياب إلى العودة </h5>
      </li>
      <li class="nav-item">
         <a class="nav-link" href="#">
            <span class="retureTabImg">
               <img src="<?php echo $base ?>assets/img/post-general/retureTabImg-3.png" alt="">
               <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" style="enable-background:new -580 439 577.9 194;"
                  xml:space="preserve">
                  <circle cx="50" cy="50" r="46" />
               </svg>
            </span>
         </a>
         <h5 class="returtab-tabContents">عودة تبون.. أهم المحطات من الغياب إلى العودة </h5>
      </li>
      <li class="nav-item">
         <a class="nav-link"href="#">
            <span class="retureTabImg">
               <img src="<?php echo $base ?>assets/img/post-general/retureTabImg-4.png" alt="">
               <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" style="enable-background:new -580 439 577.9 194;"
                  xml:space="preserve">
                  <circle cx="50" cy="50" r="46" />
               </svg>
            </span>
         </a>
         <h5 class="returtab-tabContents">عودة تبون.. أهم المحطات من الغياب إلى العودة </h5>
      </li>
      <li class="nav-item">
         <a class="nav-link"href="#">
            <span class="retureTabImg">
               <img src="<?php echo $base ?>assets/img/post-general/retureTabImg-1.png" alt="">
               <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" style="enable-background:new -580 439 577.9 194;"
                  xml:space="preserve">
                  <circle cx="50" cy="50" r="46" />
               </svg>
            </span>
         </a>
         <h5 class="returtab-tabContents">عودة تبون.. أهم المحطات من الغياب إلى العودة </h5>
      </li>
   </ul>
</div>
<!-- /.returnTaboun_wid -->
<div class="addBoxContainer mobileNone">
   <div class="addBox bg_white"></div>
</div>
<section class="banarSection"  data-aos="fade-up" data-aos-duration="1000">
   <div class="container">
      <div class="row">
      <?php

$query_retangle_beg = new WP_Query( array(
                  'post_type' => 'post',
                  'posts_per_page' => 1,
                  'order' => 'ASC',

                 
                  ) );

               


                  ?>
                  <?php
                  if ( $query_retangle_beg->have_posts() ) : ?>
                  <?php while ( $query_retangle_beg->have_posts() ) : $query_retangle_beg->the_post();?>

                  <?php has_post_format(array('image','video','audio')) ?   get_template_part('partials/post-card-beg') : '' ?>



      <?php endwhile;
      wp_reset_postdata(); ?>
      <?php endif; ?>   
         <!-- /sideContainer -->
         <div class="widgetColum">
            <div class="sidebar_widget bg_white">

               <?php if ( is_active_sidebar( 'home-sidebar-1' ) ) : ?>
               <?php dynamic_sidebar( 'home-sidebar-1' ); ?>
               <?php endif; ?>



               
                  <!-- /.mostInportNewsList -->
                  <div class="newsBanar">
                     <a href="#"><img src="<?php echo $base ?>assets/img/newsBanar.png" alt=""></a>
                  </div>
               <!-- /.importantNewsBox -->
            </div>
            <!-- /.sidebar_widget -->
         </div>


         
         <!-- /.widgetColum-->
      </div>
      <!-- /.row -->
   </div>
   <!-- /.container -->
</section>
<!-- /.banarSection -->
<section class="mostReadedContainer"  data-aos="fade-up" data-aos-duration="1000">
   <div class="container">
      <div class="mostReadeSlideBox" >
         <div class="dropdown mostReadeDrop" >
            <h3   class="mostReadeTitle dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               الأكثر قراءة اليوم <img src="<?php echo $base ?>assets/img/icons/feather-chevron-down.svg" alt="">
            </h3>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
               <a class="dropdown-item more-post" href="#">الأكثر قراءة هذا الشهر</a>
               <a class="dropdown-item" href="#">الأكثر قراءة هذا الأسبوع</a>
            </div>
         </div>
         <div class="mostReadeSliderWraper defArrowNone" >
            <div class="swiper-container mostReadeSlider" >
               <div class="swiper-wrapper" id="posts-area" >

               <?php 
               
$args = array( 'post_type' => 'post','meta_key' => 'wpb_post_views_count','orderby' => 'meta_value_num','order' => 'DESC');
$most_view_query = new WP_Query( $args); 
?>
               <?php if ( $most_view_query->have_posts() ) : ?>
<?php while ( $most_view_query->have_posts() ) : $most_view_query->the_post(); ?>

         <?php get_template_part('partials/post-most-view-card');?>


<?php endwhile;
wp_reset_postdata(); ?>
<?php else:  ?>
<p><?php _e( ' مقالات أكثر قرأة غير موجودة' ); ?></p>
<?php endif; 

?>   

                
               
               </div>
            </div>
            <!-- /swiper-container mostReadeSlider -->
            <div class="swiper-container mostReadeSlider swiperNav">
               <div class="swiper-button-next"><img src="<?php echo $base ?>assets/img/icons/red-chevron-left.svg" alt=""></div>
               <div class="swiper-button-prev"><img src="<?php echo $base ?>assets/img/icons/red-chevron-right.svg" alt=""></div>
            </div>
            <!-- /swiper-container mostReadeSlider -->
         </div>
         <!-- /.mostReadeSliderWraper -->
      </div>
      <!-- /.mostReadeSlideBox -->
   </div>
</section>
<!-- /.mostReadedContainer -->
<section class="newsBanarSection"  data-aos="fade-up" data-aos-duration="1000">
   <div class="container">
      <div class="newsBanarSec bg_white">
      <?php

$query_retangle_beg = new WP_Query( array(
                  'post_type' => 'post',
                  'posts_per_page' => 1,
                  'order' => 'DESC',

                 
                  ) );

               


                  ?>
                  <?php
                  if ( $query_retangle_beg->have_posts() ) : ?>
                  <?php while ( $query_retangle_beg->have_posts() ) : $query_retangle_beg->the_post();?>

                  <?php has_post_format(array('image','video','audio')) ?   get_template_part('partials/post-card-rectangle-beg') : '' ?>



      <?php endwhile;
      wp_reset_postdata(); ?>
      <?php endif; ?>   
       
         <div class="newsBanar_content dfp">
            <div class="row">
         
            <?php

$query_square_small = new WP_Query( array(
                  'post_type' => 'post',
                  'posts_per_page' => 3,
                  'order' => 'ASC',

                 
                  ) );

               


                  ?>
                  <?php
                  if ( $query_square_small->have_posts() ) : ?>
                  <?php while ( $query_square_small->have_posts() ) : $query_square_small->the_post();?>

                  <?php has_post_format(array('image','video','audio')) ?   get_template_part('partials/post-card-square-small') : '' ?>



      <?php endwhile;
      wp_reset_postdata(); ?>
      <?php endif; ?>   
            
            </div>
         </div>
         <!-- /.newsBanar_content -->
         <div class="innerBanarSec  mobileNone">
            <div class="addBox bg_white"></div>
         </div>
      </div>
   </div>
</section>
<div class="innerBanarSec mobileAdd  desktopNone"  data-aos="fade-up" data-aos-duration="1000">
   <div class="addBox bg_white"></div>
</div>
<section class="sportsNewsContainer mt-5"  data-aos="fade-up" data-aos-duration="1000">
   <div class="container">
      <div class="widgetSideContainer bg_white">
         <div class="row">
            <div class="col-12">
               <div class="widgetSideTitle">


<h2  > 
   
رياضة 

</h2>

                  <ul class="widgetSideTags">

                  <?php   
                          
                          $post_tags = get_terms('post_tag');
 
 if ( $post_tags ) {
     foreach( $post_tags as $tag ) {

      ?>

<li>
                        <a href="#" class="news_tag_item long_tag">
                           <lord-icon class="asrrowSvg" src="http://localhost/wp-course/wp-content/themes/AwressNews/assets/img/svg-ani/onyplpvn.json" trigger="hover" stroke="100" colors="primary:#FB3B3C,secondary:#FB3B3C" style="width:32px;height:32px">
                           </lord-icon>
                           <span class="news_tag_text"> <?php echo $tag->name ?></span>
                        </a>
                     </li>

      <?php
     }
 }
 
 ?>
                
   
<li>
                        <a href="category/sport" class="news_tag_item active" >
                           <lord-icon class="asrrowSvg"
                              src="<?php echo $base ?>assets/img/svg-ani/onyplpvn.json"
                              trigger="hover"
                              stroke="100"
                              colors="primary:#FB3B3C,secondary:#FB3B3C"
                              style="width:32px;height:32px">
                           </lord-icon>
                           <span class="news_tag_text">المزيد ..</span>
                        </a>
                     </li>
                  </ul>
               </div>
            </div>
<?php

            $query_sport = new WP_Query( array(
                              'post_type' => 'post',
                              'posts_per_page' => 1,
                              'category_name' => "sport",
                              'order' => 'DESC',

                        
                              ) );

                           


                              ?>
                              <?php
                              if ( $query_sport->have_posts() ) : ?>
                              <?php while ( $query_sport->have_posts() ) : $query_sport->the_post();?>

                              <?php has_post_format(array('image','video','audio')) ?   get_template_part('partials/post-card-beg') : '' ?>



                  <?php endwhile;
                  wp_reset_postdata(); ?>
                  <?php else:  ?>
                  <p class="text-center py-4 w-100"><?php _e( 'عذرا لاتوجد مقالات في تصنيف رياضة' ); ?></p>
                  <?php endif; ?>   

     
            <div class="widgetColum">
               <div class="sidebar_widget bg_white">
                  <div class="importantNewsBox">
                     <ul  class="mostInportNewsList verticalList">

                        <?php 



 $query_sport = new WP_Query( array(
                              'post_type' => 'post',
                              'posts_per_page' => 3,
                              'category_name' => "sport",
                              'order' => 'DESC',

                              array(
                                 'taxonomy' => 'post_format',
                                 'field' => 'slug',
                                 )
                              ) );

                           


                              ?>
                              <?php
                              if ( $query_sport->have_posts() ) : ?>
                              <?php while ( $query_sport->have_posts() ) : $query_sport->the_post();?>

                              <?php has_post_format(array('image','video','audio')) ?   get_template_part('partials/post-card-square') : ""?>







                  <?php endwhile;
                  wp_reset_postdata(); ?>
                  <?php endif; ?>   

                     
                        <!-- /.MostsingleNewsList -->
                     </ul>
                     <!-- /.mostInportNewsList -->
                  </div>
                  <!-- /.importantNewsBox -->
               </div>
               <!-- /.sidebar_widget -->
            </div>
            <!-- /.widgetColum-->
         </div>
      </div>
   </div>
</section>
<section class="IllusStorContainer mostReadedContainer mobileNone"  data-aos="fade-up" data-aos-duration="1000">
   <div class="container">
      <div class="mostReadeSlideBox IllusStorSlideBox ">
         <h3   class="IllusStorTitle text-center">قصص مصورة</h3>
         <div class="mostReadeSliderWraper IllusStorWraper defArrowNone">
            <div class="swiper-container IllusStorSlider">
               <div class="swiper-wrapper">
         

                  <?php
                     $query_storie = new WP_Query( array(
                              'post_type' => 'web-story',
                              'posts_per_page' => 11,
                              'order' => 'DESC',

                              ) );

                           


                              ?>
                              <?php
                              if ( $query_storie->have_posts() ) : ?>
                              <?php while ( $query_storie->have_posts() ) : $query_storie->the_post();?>


          
                  <!-- /.swiper-slide -->
                
                  <?php   get_template_part('partials/post-stories') ?>

                  <!-- /.swiper-slide -->




                  <?php endwhile;
                  wp_reset_postdata(); ?>
                  <?php else:  ?>
                  <p class="text-center py-4 w-100"><?php _e( '  لا توجد مقالات في قسم قصص المصورة' ); ?></p>
                  <?php endif; ?>   






               </div>
            </div>
            <!-- /swiper-container IllusStorSlider -->
            <div class="swiper-container IllusStorSlider swiperNav">
               <div class="swiper-button-next"><img src="<?php echo $base ?>assets/img/icons/red-chevron-left.svg" alt=""></div>
               <div class="swiper-button-prev"><img src="<?php echo $base ?>assets/img/icons/red-chevron-right.svg" alt=""></div>
            </div>
            <!-- /swiper-container IllusStorSlider -->
         </div>
         <!-- /.mostReadeSliderWraper -->
      </div>
      <!-- /.mostReadeSlideBox -->
   </div>
</section>
<!-- /.mostReadedContainer -->
<section class="OrasVideosContainer bg_white"  data-aos="fade-up" data-aos-duration="1000">
   <div class="container">
      <div class="widgetSideTitle">
         <h2  >فيديوهات أوراس</h2>
         <ul class="widgetSideTags">
            <li>
               <a href="category/video" class="news_tag_item active">
                  <lord-icon class="asrrowSvg"
                     src="<?php echo $base ?>assets/img/svg-ani/onyplpvn.json"
                     trigger="hover"
                     stroke="100"
                     colors="primary:#FB3B3C,secondary:#FB3B3C"
                     style="width:32px;height:32px">
                  </lord-icon>
                  <span class="news_tag_text">المزيد ..</span>
               </a>
            </li>
         </ul>
      </div>
      <!-- /.widgetSideTitle -->
      <div class="row OrasVideosRow">
    
      <?php 


$query_video = new WP_Query( array(
'post_type' => 'post',
'posts_per_page' => 6,
'category_name' => 'video',
) );

?>
<?php

if ( $query_video->have_posts() ) : ?>
<?php while ( $query_video->have_posts() ) : $query_video->the_post();?>

<?php  has_post_format('video') ?  get_template_part('partials/post-card-square') : ''?>







<?php endwhile;
wp_reset_postdata(); ?>
<?php else:  ?>
<p class="text-center py-4 w-100"><?php _e( 'لا توجد فيديوهات في هذا القسم ' ); ?></p>
<?php endif; ?>   
        

      </div>
      <!-- /.OrasVideosRow -->
   </div>
</section>
<section class="OpinArtiContainer mt-5"  data-aos="fade-up" data-aos-duration="1000">
   <div class="container">
      <div class="OpinArtiBox bg_white">
         <div class="widgetSideTitle">
            <h2  >مقالات الرأي  </h2>
            <ul  class="widgetSideTags">
               <li>
                  <a href="#" class="news_tag_item active">
                     <lord-icon class="asrrowSvg"
                        src="<?php echo $base ?>assets/img/svg-ani/onyplpvn.json"
                        trigger="hover"
                        stroke="100"
                        colors="primary:#FB3B3C,secondary:#FB3B3C"
                        style="width:32px;height:32px">
                     </lord-icon>
                     <span class="news_tag_text">المزيد ..</span>
                  </a>
               </li>
            </ul>
         </div>
         <!-- /.widgetSideTitle -->
         <div class="row OpinArtiRow mobileNone">

         <?php
$query_post_auther = new WP_Query( array(
                              'post_type' => 'post',
                              'posts_per_page' => 6,
                              'meta_key' => 'aw_post_meta_view',
                              'orderby' => 'aw_post_meta_view',
                              'order' => 'DESC',
                              'category_name' => "posts-auther",

                              ) );

                           


                              ?>
                              <?php
                              if ( $query_post_auther->have_posts() ) : ?>
                              <?php while ( $query_post_auther->have_posts() ) : $query_post_auther->the_post();?>


                                                <div class="col-md-3 OpinArtiCol mb-5">
                                 <div class="OpinArtiSingle">
                                    <?php  the_post_thumbnail(array('','120') ,array('class' => 'articale_topImg')) ?>
                                    <div class="OpinArtiSingleCont text-center">
                                       <a href="#">
                                          
                                       <img src="<?php echo esc_url( get_avatar_url("ID")); ?>" alt="Articale Profile" class="articaleProfileImg"></a>
                                       <a href="<?php the_permalink()?>">
                                          <h4  ><?php the_title() ?></h4>
                                       </a>
                                    </div>

                                    <?php the_author_posts_link(); ?>
                                    
                                 
                                 
                                 </div>
                              </div>







                  <?php endwhile;
                  wp_reset_postdata(); ?>
                  <?php else:  ?>
                  <p class="text-center py-4 w-100"><?php _e( 'لا توجد مقالات في القسم ' ); ?></p>
                  <?php endif; ?>   


      
         </div>
         <!-- /.row OpinArtiRow -->
         <ul class="mobile_opnion desktopNone">
            <li class="single_opnion media">
               <a href="#" class="opinion_img"><img src="<?php echo $base ?>assets/img/articale_topImg-1.png" alt="Articale Img" class="articale_topImg"></a>
               <div class="media-body">
                  <a href="#" class="authoName">محمد علي الريسوني  </a>
                  <a href="#">
                     <h4 class="autTitle">يا لحلاوة السكر! </h4>
                  </a>
               </div>
            </li>
            <!-- /.single_opnion -->
            <li class="single_opnion media">
               <a href="#" class="opinion_img"><img src="<?php echo $base ?>assets/img/articale_topImg-2.png" alt="Articale Img" class="articale_topImg"></a>
               <div class="media-body">
                  <a href="#" class="authoName">محمد علي الريسوني  </a>
                  <a href="#">
                     <h4 class="autTitle">تقرير بنيامين ستورا.. وجهة نظر قد لا تحوز على الإجماع</h4>
                  </a>
               </div>
            </li>
            <!-- /.single_opnion -->
            <li class="single_opnion media">
               <a href="#" class="opinion_img"><img src="<?php echo $base ?>assets/img/articale_topImg-3.png" alt="Articale Img" class="articale_topImg"></a>
               <div class="media-body">
                  <a href="#" class="authoName"> حمد علي الريسوني    </a>
                  <a href="#">
                     <h4 class="autTitle"> جزائر 22 فبراير.. ثورة لم تكتمل؟  </h4>
                  </a>
               </div>
            </li>
            <!-- /.single_opnion -->
            <li class="single_opnion media">
               <a href="#" class="opinion_img"><img src="<?php echo $base ?>assets/img/articale_topImg-4.png" alt="Articale Img" class="articale_topImg"></a>
               <div class="media-body">
                  <a href="#" class="authoName"> حمد علي الريسوني    </a>
                  <a href="#">
                     <h4 class="autTitle"> أزمة تونس وخطر الانزلاقات   </h4>
                  </a>
               </div>
            </li>
            <!-- /.single_opnion -->
         </ul>
         <!-- /.mobile_opnion -->
      </div>
   </div>
</section>
<!-- /.OpinArtiContainer -->

<section class="listenToContainer mt-5"  data-aos="fade-up" data-aos-duration="1000">
   <div class="container">
      <div class="listenToContain">
         <h2   class="border_title">
            استمع إلينا  
            <ul class="widgetSideTags desktopNone">
               <li>
                  <a href="" class="news_tag_item active">
                     <lord-icon class="asrrowSvg"
                        src="<?php echo $base ?>assets/img/svg-ani/onyplpvn.json"
                        trigger="hover"
                        stroke="100"
                        colors="primary:#FB3B3C,secondary:#FB3B3C"
                        style="width:32px;height:32px">
                     </lord-icon>
                     <span class="news_tag_text">المزيد ..</span>
                  </a>
               </li>
            </ul>
         </h2>
         <div class="row listenToRow">


         
         <?php 


         $query_audio = new WP_Query( array(
         'post_type' => 'post',
         'posts_per_page' => 4,
         'category_name' => 'audio',
         array(
               'taxonomy' => 'post_format',
               'field' => 'slug',
               'terms' => array('post-format-audio'),
               )
         ) );

         ?>
<?php

if ( $query_audio->have_posts() ) : ?>
<?php while ( $query_audio->have_posts() ) : $query_audio->the_post();?>

            <?php has_post_format("audio") ?   get_template_part('partials/post-card-square-beg') : ""?>







<?php endwhile;
wp_reset_postdata(); ?>
<?php else:  ?>
<p class="text-center py-4 w-100"><?php _e( 'لا توجد مقالات في قسم استمع' ); ?></p>
<?php endif; ?>   
         </div>
         <!-- /.listenToRow -->
      </div>
      <!-- /.listenToContain -->
      <div class="listenVia">
         <div class="podcastLogo">
            <p  >يمكنك أن تستمع إلينا عبر:</p>
            <a href="#" class="podCastLogo" data-toggle="tooltip" data-placement="top" title="آبل بودكاست">
               <lord-icon
                  src="<?php echo $base ?>assets/img/svg-ani/lsodnvvi.json"
                  trigger="hover"
                  colors="primary:#707070,secondary:#707070"
                  stroke="83"
                  style="width:40px;height:40px">
               </lord-icon>
            </a>
            <a href="#" class="podCastLogo" data-toggle="tooltip" data-placement="top" title="غوغل بودكاست ">
               <lord-icon
                  src="<?php echo $base ?>assets/img/svg-ani/eqlquayh.json"
                  trigger="hover"
                  colors="primary:#707070,secondary:#707070"
                  stroke="81"
                  style="width:40px;height:40px">
               </lord-icon>
            </a>
         </div>
         <ul  class="widgetSideTags">
            <li>
               <a href="category/audio" class="news_tag_item active">
                  <lord-icon class="asrrowSvg"
                     src="<?php echo $base ?>assets/img/svg-ani/onyplpvn.json"
                     trigger="hover"
                     stroke="100"
                     colors="primary:#FB3B3C,secondary:#FB3B3C"
                     style="width:32px;height:32px">
                  </lord-icon>
                  <span class="news_tag_text">المزيد ..</span>
               </a>
            </li>
         </ul>
      </div>
   </div>
   <!-- /.container -->
</section>


<!-- /.listenToContainer -->
<div class="addBoxContainer mobileNone">
   <div class="addBox bg_white"></div>
</div>
<div class="innerBanarSec mobileAdd  desktopNone pt-0">
   <div class="addBox bg_white"></div>
</div>
<section class="sportsNewsContainer econoMyContainer "  data-aos="fade-up" data-aos-duration="1000">
   <div class="container">
      <div class="widgetSideContainer bg_white">
         <div class="row">
            <div class="col-12">
               <div class="widgetSideTitle">
                  <h2  >اقتصاد </h2>
                  <ul class="widgetSideTags">
                     <li>
                        <a href="#" class="news_tag_item ">
                           <lord-icon class="asrrowSvg"
                              src="<?php echo $base ?>assets/img/svg-ani/onyplpvn.json"
                              trigger="hover"
                              stroke="100"
                              colors="primary:#FB3B3C,secondary:#FB3B3C"
                              style="width:32px;height:32px">
                           </lord-icon>
                           <span class="news_tag_text">كورونا </span>
                        </a>
                     </li>
                     <li>
                        <a href="#" class="news_tag_item long_tag">
                           <lord-icon class="asrrowSvg"
                              src="<?php echo $base ?>assets/img/svg-ani/onyplpvn.json"
                              trigger="hover"
                              stroke="100"
                              colors="primary:#FB3B3C,secondary:#FB3B3C"
                              style="width:32px;height:32px">
                           </lord-icon>
                           <span class="news_tag_text">استيراد السيارات</span>
                        </a>
                     </li>
                     <li>
                        <a href="#" class="news_tag_item">
                           <lord-icon class="asrrowSvg"
                              src="<?php echo $base ?>assets/img/svg-ani/onyplpvn.json"
                              trigger="hover"
                              stroke="100"
                              colors="primary:#FB3B3C,secondary:#FB3B3C"
                              style="width:32px;height:32px">
                           </lord-icon>
                           <span class="news_tag_text">التسلح </span>
                        </a>
                     </li>
                     <li>
                        <a href="#" class="news_tag_item active">
                           <lord-icon class="asrrowSvg"
                              src="<?php echo $base ?>assets/img/svg-ani/onyplpvn.json"
                              trigger="hover"
                              stroke="100"
                              colors="primary:#FB3B3C,secondary:#FB3B3C"
                              style="width:32px;height:32px">
                           </lord-icon>
                           <span class="news_tag_text">المزيد ..</span>
                        </a>
                     </li>
                  </ul>
               </div>
            </div>
            


            <?php
                     $query_economy = new WP_Query( array(
                              'post_type' => 'post',
                              'posts_per_page' => 1,
                              'category_name' => "economy",
                              'order' => 'ASC',

                              array(
                                 'taxonomy' => 'post_format',
                                 'field' => 'slug',
                                 )
                              ) );

                           


                              ?>
                              <?php
                              if ( $query_economy->have_posts() ) : ?>
                              <?php while ( $query_economy->have_posts() ) : $query_economy->the_post();?>

                              <?php has_post_format(array('image','video','audio')) ?   get_template_part('partials/post-card-beg') : ""?>







                  <?php endwhile;
                  wp_reset_postdata(); ?>
                  <?php endif; ?>   
                  


            <!-- /sideContainer -->
            <div class="widgetColum">
               <div class="sidebar_widget bg_white">
                  <div class="importantNewsBox">
                     <ul  class="mostInportNewsList verticalList">

                     <?php
                     $query_economy = new WP_Query( array(
                              'post_type' => 'post',
                              'posts_per_page' => 3,
                              'category_name' => "economy",
                              'order' => 'DESC',

                              array(
                                 'taxonomy' => 'post_format',
                                 'field' => 'slug',
                                 )
                              ) );

                           


                              ?>
                              <?php
                              if ( $query_economy->have_posts() ) : ?>
                              <?php while ( $query_economy->have_posts() ) : $query_economy->the_post();?>

                              <?php has_post_format(array('image','video','audio')) ?   get_template_part('partials/post-card-square') : ""?>







                  <?php endwhile;
                  wp_reset_postdata(); ?>
                  <?php else:  ?>
                  <p class="text-center py-4 w-100"><?php _e( ' لا توجد مقالات في قسم ' ); ?></p>
                  <?php endif; ?>   
                  
                  
                     </ul>
                     <!-- /.mostInportNewsList -->
                  </div>
                  <!-- /.importantNewsBox -->
               </div>
               <!-- /.sidebar_widget -->
            </div>
            <!-- /.widgetColum-->
         </div>
      </div>
   </div>
</section>
<section class="sportsNewsContainer ReportsContainer mt-5"  data-aos="fade-up" data-aos-duration="1000">
   <div class="container">
      <div class="widgetSideContainer bg_white">
         <div class="row">
            <div class="col-12 ">
               <div class="widgetSideTitle">
                  <h2  >تقارير </h2>
                  <ul class="widgetSideTags">
                     <li>
                        <a href="#" class="news_tag_item ">
                           <lord-icon class="asrrowSvg"
                              src="<?php echo $base ?>assets/img/svg-ani/onyplpvn.json"
                              trigger="hover"
                              stroke="100"
                              colors="primary:#FB3B3C,secondary:#FB3B3C"
                              style="width:32px;height:32px">
                           </lord-icon>
                           <span class="news_tag_text">كورونا </span>
                        </a>
                     </li>
                     <li>
                        <a href="#" class="news_tag_item long_tag">
                           <lord-icon class="asrrowSvg"
                              src="<?php echo $base ?>assets/img/svg-ani/onyplpvn.json"
                              trigger="hover"
                              stroke="100"
                              colors="primary:#FB3B3C,secondary:#FB3B3C"
                              style="width:32px;height:32px">
                           </lord-icon>
                           <span class="news_tag_text">استيراد السيارات</span>
                        </a>
                     </li>
                     <li>
                        <a href="#" class="news_tag_item">
                           <lord-icon class="asrrowSvg"
                              src="<?php echo $base ?>assets/img/svg-ani/onyplpvn.json"
                              trigger="hover"
                              stroke="100"
                              colors="primary:#FB3B3C,secondary:#FB3B3C"
                              style="width:32px;height:32px">
                           </lord-icon>
                           <span class="news_tag_text">التسلح </span>
                        </a>
                     </li>
                     <li>
                        <a href="#" class="news_tag_item active">
                           <lord-icon class="asrrowSvg"
                              src="<?php echo $base ?>assets/img/svg-ani/onyplpvn.json"
                              trigger="hover"
                              stroke="100"
                              colors="primary:#FB3B3C,secondary:#FB3B3C"
                              style="width:32px;height:32px">
                           </lord-icon>
                           <span class="news_tag_text">المزيد ..</span>
                        </a>
                     </li>
                  </ul>
               </div>
            </div>
            <?php

$query_report = new WP_Query( array(
                  'post_type' => 'post',
                  'posts_per_page' => 1,
                  'category_name' => "report",
                  'orderby' => 'date',
                  'order' => 'ASC',

      
                  ) );

               


                  ?>
                  <?php
                  if ( $query_report->have_posts() ) : ?>
                  <?php while ( $query_report->have_posts() ) : $query_report->the_post();?>

                  <?php has_post_format(array('image','video','audio')) ?   get_template_part('partials/post-card-beg') : '' ?>



      <?php endwhile;
      wp_reset_postdata(); ?>
      <?php endif; ?>   



            <!-- /sideContainer -->
            <div class="widgetColum">
               <div class="sidebar_widget bg_white">
                  <div class="importantNewsBox">
                     <ul  class="mostInportNewsList verticalList">
                     <?php
                     $query_report_colum = new WP_Query( array(
                  'post_type' => 'post',
                  'posts_per_page' => 3,
                  'category_name' => "report",
                  'orderby' => 'date',
                  'order' => 'DESC',
                  ) );

               


                  ?>
                  <?php
                  if ( $query_report_colum->have_posts() ) : ?>
                  <?php while ( $query_report_colum->have_posts() ) : $query_report_colum->the_post();?>

                  <?php has_post_format(array('image','video','audio')) ?   get_template_part('partials/post-card-square') : '' ?>



      <?php endwhile;
      wp_reset_postdata(); ?>
      <?php endif; ?>   
                     </ul>
                     <!-- /.mostInportNewsList -->
                  </div>
                  <!-- /.importantNewsBox -->
               </div>
               <!-- /.sidebar_widget -->
            </div>
            <!-- /.widgetColum-->
         </div>
      </div>
   </div>
</section>
<?php get_footer()?>