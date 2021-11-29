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
                  <div class="sideContainer">
                  <?php 
$args = array( 'post_type' => 'news', 'posts_per_page' => 1 );
$the_query = new WP_Query( $args ); 
?>
<?php if ( $the_query->have_posts() ) : ?>
<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                     <div class="banar_side bg_white">

                        <div class="newsBnaBox">
                           <div class="newsBanarImg">
                              <a href="#" class="newsBanar_Img"><img src="<?php echo $base ?>assets/img/covid-vaccine-04.jpg" alt="News Banar"></a>
                              <div class="newsbanar-play">
                                 <a href="#" class="news_tag_item news_tag_single">
                                    <lord-icon class="asrrowSvg"
                                       src="<?php echo $base ?>assets/img/svg-ani/onyplpvn.json"
                                       trigger="hover"
                                       stroke="100"
                                       colors="primary:#FB3B3C,secondary:#FB3B3C"
                                       style="width:32px;height:32px">
                                    </lord-icon>
                                    <span class="news_tag_text">كورونا </span>
                                 </a>
                                 <a href="#" class="PlayNewsBanar">
                                    <lord-icon class="wSvg rot9"
                                       src="<?php echo $base ?>assets/img/svg-ani/vwacmoen.json"
                                       trigger="hover"
                                       delay="3"
                                       colors="primary:#000,secondary:#000"
                                       stroke="100"
                                       style="width:35px;height:35px">
                                    </lord-icon>
                                    <lord-icon class="dSvg rot9"
                                       src="<?php echo $base ?>assets/img/svg-ani/vwacmoen.json"
                                       trigger="hover"
                                       delay="3"
                                       colors="primary:#000,secondary:#000"
                                       stroke="100"
                                       style="width:35px;height:35px">
                                    </lord-icon>
                                 </a>
                              </div>
                           </div>
                           <div class="newsBnaContentBox">
                              <div class="newsBnaContent">
                                 <a href="#">
                                    <h3  ><?php the_title();?></h3>
                                 </a>
                                 <p  class="mobileNone">
                                 <?php the_content();?>
                                 </p>
                              </div>
                              <div class="shareNewsBox mobileNone" >
                                 <div class="publistDate" >

                                 نُشر يوم  <?php the_time('l, F jS, Y')?>
                                 
                                 </div>
                                 <ul  class="shareThis">
                                    <li><a href="#"><img src="<?php echo $base ?>assets/img/social/gray-facebook.svg" alt=""></a></li>
                                    <li><a href="#"><img src="<?php echo $base ?>assets/img/social/gray-twitter.svg" alt=""></a></li>
                                 </ul>
                              </div>
                           </div>
                        </div>

                        <?php endwhile;
wp_reset_postdata(); ?>
<?php else:  ?>
<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

                        <!-- /.newsBnaBox -->
                     </div>
                     <!-- /.banar_side -->
                  </div>
                  <!-- /sideContainer -->
                  <div class="widgetColum">
                     <div class="sidebar_widget bg_white">
                        <div class="importantNewsBox home_sidebar  ">
                           <h4 class="titleMobile blc">أخبار متفاعلة  </h4>
                           <ul class="nav news_tagList grc mobileNone" id="news_tagList" role="tablist">
                              <li class="nav-item" role="presentation">
                                 <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-tag-1" role="tab" aria-controls="pills-tag-1" aria-selected="true"><span>#</span>كورونا  </a>
                              </li>
                              <li class="nav-item" role="presentation">
                                 <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-tag-2" role="tab" aria-controls="pills-tag-2" aria-selected="false"><span>#</span>كورونا</a>
                              </li>
                              <li class="nav-item" role="presentation">
                                 <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-tag-3" role="tab" aria-controls="pills-tag-3" aria-selected="false"><span>#</span>كورونا</a>
                              </li>
                              <li class="nav-item" role="presentation">
                                 <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-tag-4" role="tab" aria-controls="pills-tag-4" aria-selected="false"><span>#</span>كورونا</a>
                              </li>
                           </ul>
                           <div class="tab-content mobileNone" id="news_tagListContent">
                              <div class="tab-pane fade show active" id="pills-tag-1" role="tabpanel" aria-labelledby="pills-home-tab">
                                 <ul  class="mostInportNewsList">
                                    <li class="MostsingleNewsList">
                                       <div class="news_img">
                                          <a href="#"> <img src="<?php echo $base ?>assets/img/index/most_inport_1.png" alt="News Image"></a>
                                       </div>
                                       <a href="#" class="tc">
                                          <p  >
                                             <lord-icon class="playSvg loadSvg rot9"
                                                src="<?php echo $base ?>assets/img/svg-ani/vwacmoen.json"
                                                trigger="hover"
                                                delay="3"
                                                colors="primary:#000000,secondary:#000000"
                                                stroke="100">
                                             </lord-icon>
                                             منظمة الصحة العالمية تعقد اجتماعا طارئا بسبب السلالات الجديدة لكورونا 
                                          </p>
                                       </a>
                                    </li>
                                    <!-- /.MostsingleNewsList -->
                                    <li class="MostsingleNewsList">
                                       <div class="news_img">
                                          <a href="#"> <img src="<?php echo $base ?>assets/img/index/most_inport_2.png" alt="News Image"></a>
                                       </div>
                                       <a href="#" class="tc">
                                          <p  >منظمة الصحة العالمية تعقد اجتماعا طارئا بسبب السلالات الجديدة لكورونا </p>
                                       </a>
                                    </li>
                                    <!-- /.MostsingleNewsList -->
                                    <li class="MostsingleNewsList">
                                       <div class="news_img">
                                          <a href="#"> <img src="<?php echo $base ?>assets/img/index/most_inport_3.png" alt="News Image"></a>
                                       </div>
                                       <a href="#" class="tc">
                                          <p  >منظمة الصحة العالمية تعقد اجتماعا طارئا بسبب السلالات الجديدة لكورونا ...</p>
                                       </a>
                                    </li>
                                    <!-- /.MostsingleNewsList -->
                                 </ul>
                                 <!-- /.mostInportNewsList -->
                              </div>
                              <div class="tab-pane fade" id="pills-tag-2" role="tabpanel" aria-labelledby="pills-profile-tab">
                                 <ul  class="mostInportNewsList">
                                    <li class="MostsingleNewsList">
                                       <div class="news_img">
                                          <a href="#"> <img src="<?php echo $base ?>assets/img/index/most_inport_1.png" alt="News Image"></a>
                                       </div>
                                       <a href="#" class="tc">
                                          <p  >
                                             <lord-icon class="wSvg rot9"
                                                src="<?php echo $base ?>assets/img/svg-ani/vwacmoen.json"
                                                trigger="hover"
                                                delay="3"
                                                colors="primary:#000000,secondary:#000000"
                                                stroke="100"
                                                style="width:25px;height:25px">
                                             </lord-icon>
                                             منظمة الصحة العالمية تعقد اجتماعا طارئا بسبب السلالات الجديدة لكورونا 
                                          </p>
                                       </a>
                                    </li>
                                    <!-- /.MostsingleNewsList -->
                                    <li class="MostsingleNewsList">
                                       <div class="news_img">
                                          <a href="#"> <img src="<?php echo $base ?>assets/img/index/most_inport_2.png" alt="News Image"></a>
                                       </div>
                                       <a href="#" class="tc">
                                          <p  >منظمة الصحة العالمية تعقد اجتماعا طارئا بسبب السلالات الجديدة لكورونا </p>
                                       </a>
                                    </li>
                                    <!-- /.MostsingleNewsList -->
                                    <li class="MostsingleNewsList">
                                       <div class="news_img">
                                          <a href="#"> <img src="<?php echo $base ?>assets/img/index/most_inport_3.png" alt="News Image"></a>
                                       </div>
                                       <a href="#" class="tc">
                                          <p  >منظمة الصحة العالمية تعقد اجتماعا طارئا بسبب السلالات الجديدة لكورونا ...</p>
                                       </a>
                                    </li>
                                    <!-- /.MostsingleNewsList -->
                                 </ul>
                                 <!-- /.mostInportNewsList -->
                              </div>
                              <div class="tab-pane fade" id="pills-tag-3" role="tabpanel" aria-labelledby="pills-contact-tab">
                                 <ul  class="mostInportNewsList">
                                    <li class="MostsingleNewsList">
                                       <div class="news_img">
                                          <a href="#"> <img src="<?php echo $base ?>assets/img/index/most_inport_1.png" alt="News Image"></a>
                                       </div>
                                       <a href="#" class="tc">
                                          <p  >
                                             <lord-icon class="wSvg rot9"
                                                src="<?php echo $base ?>assets/img/svg-ani/vwacmoen.json"
                                                trigger="hover"
                                                delay="3"
                                                colors="primary:#000000,secondary:#000000"
                                                stroke="100"
                                                style="width:25px;height:25px">
                                             </lord-icon>
                                             منظمة الصحة العالمية تعقد اجتماعا طارئا بسبب السلالات الجديدة لكورونا 
                                          </p>
                                       </a>
                                    </li>
                                    <!-- /.MostsingleNewsList -->
                                    <li class="MostsingleNewsList">
                                       <div class="news_img">
                                          <a href="#"> <img src="<?php echo $base ?>assets/img/index/most_inport_2.png" alt="News Image"></a>
                                       </div>
                                       <a href="#" class="tc">
                                          <p  >منظمة الصحة العالمية تعقد اجتماعا طارئا بسبب السلالات الجديدة لكورونا </p>
                                       </a>
                                    </li>
                                    <!-- /.MostsingleNewsList -->
                                    <li class="MostsingleNewsList">
                                       <div class="news_img">
                                          <a href="#"> <img src="<?php echo $base ?>assets/img/index/most_inport_3.png" alt="News Image"></a>
                                       </div>
                                       <a href="#" class="tc">
                                          <p  >منظمة الصحة العالمية تعقد اجتماعا طارئا بسبب السلالات الجديدة لكورونا ...</p>
                                       </a>
                                    </li>
                                    <!-- /.MostsingleNewsList -->
                                 </ul>
                                 <!-- /.mostInportNewsList -->
                              </div>
                              <div class="tab-pane fade" id="pills-tag-4" role="tabpanel" aria-labelledby="pills-contact-tab">
                                 <ul  class="mostInportNewsList">
                                    <li class="MostsingleNewsList">
                                       <div class="news_img">
                                          <a href="#"> <img src="<?php echo $base ?>assets/img/index/most_inport_1.png" alt="News Image"></a>
                                       </div>
                                       <a href="#" class="tc">
                                          <p  >
                                             <lord-icon class="wSvg rot9"
                                                src="<?php echo $base ?>assets/img/svg-ani/vwacmoen.json"
                                                trigger="hover"
                                                delay="3"
                                                colors="primary:#000,secondary:#000"
                                                stroke="100"
                                                style="width:25px;height:25px">
                                             </lord-icon>
                                             منظمة الصحة العالمية تعقد اجتماعا طارئا بسبب السلالات الجديدة لكورونا 
                                          </p>
                                       </a>
                                    </li>
                                    <!-- /.MostsingleNewsList -->
                                    <li class="MostsingleNewsList">
                                       <div class="news_img">
                                          <a href="#"> <img src="<?php echo $base ?>assets/img/index/most_inport_2.png" alt="News Image"></a>
                                       </div>
                                       <a href="#" class="tc">
                                          <p  >منظمة الصحة العالمية تعقد اجتماعا طارئا بسبب السلالات الجديدة لكورونا </p>
                                       </a>
                                    </li>
                                    <!-- /.MostsingleNewsList -->
                                    <li class="MostsingleNewsList">
                                       <div class="news_img">
                                          <a href="#"> <img src="<?php echo $base ?>assets/img/index/most_inport_3.png" alt="News Image"></a>
                                       </div>
                                       <a href="#" class="tc">
                                          <p  >منظمة الصحة العالمية تعقد اجتماعا طارئا بسبب السلالات الجديدة لكورونا ...</p>
                                       </a>
                                    </li>
                                    <!-- /.MostsingleNewsList -->
                                 </ul>
                                 <!-- /.mostInportNewsList -->
                              </div>
                           </div>
                           <ul  class="mostInportNewsList desktopNone">
                              <li class="MostsingleNewsList">
                                 <div class="news_img">
                                    <a href="#"><img src="<?php echo $base ?>assets/img/index/most_inport_1.png" alt="News Image"></a>
                                 </div>
                                 <a href="#" class="tc">
                                    <p  >
                                       <lord-icon class="wSvg rot9"
                                          src="<?php echo $base ?>assets/img/svg-ani/vwacmoen.json"
                                          trigger="hover"
                                          delay="3"
                                          colors="primary:#000000,secondary:#000000"
                                          stroke="100"
                                          style="width:25px;height:25px">
                                       </lord-icon>
                                       منظمة الصحة العالمية تعقد اجتماعا طارئا بسبب السلالات الجديدة لكورونا 
                                    </p>
                                 </a>
                              </li>
                              <!-- /.MostsingleNewsList -->
                              <li class="MostsingleNewsList">
                                 <div class="news_img">
                                    <a href="#"><img src="<?php echo $base ?>assets/img/index/most_inport_2.png" alt="News Image"></a>
                                 </div>
                                 <a href="#" class="tc">
                                    <p  >منظمة الصحة العالمية تعقد اجتماعا طارئا بسبب السلالات الجديدة لكورونا </p>
                                 </a>
                              </li>
                              <!-- /.MostsingleNewsList -->
                              <li class="MostsingleNewsList">
                                 <div class="news_img">
                                    <a href="#"><img src="<?php echo $base ?>assets/img/index/most_inport_3.png" alt="News Image"></a>
                                 </div>
                                 <a href="#" class="tc">
                                    <p  >منظمة الصحة العالمية تعقد اجتماعا طارئا بسبب السلالات الجديدة لكورونا ...</p>
                                 </a>
                              </li>
                              <!-- /.MostsingleNewsList -->
                              <li class="MostsingleNewsList">
                                 <div class="news_img">
                                    <a href="#"><img src="<?php echo $base ?>assets/img/index/most_inport_4.png" alt="News Image"></a>
                                 </div>
                                 <a href="#" class="tc">
                                    <p  >منظمة الصحة العالمية تعقد اجتماعا طارئا بسبب السلالات الجديدة لكورونا </p>
                                 </a>
                              </li>
                              <!-- /.MostsingleNewsList -->
                           </ul>
                           <!-- /.mostInportNewsList -->
                           <div class="newsBanar">
                              <a href="#"><img src="<?php echo $base ?>assets/img/newsBanar.png" alt=""></a>
                           </div>
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
               <div class="mostReadeSlideBox">
                  <div class="dropdown mostReadeDrop" >
                     <h3   class="mostReadeTitle dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        الأكثر قراءة اليوم <img src="<?php echo $base ?>assets/img/icons/feather-chevron-down.svg" alt="">
                     </h3>
                     <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">الأكثر قراءة هذا الشهر</a>
                        <a class="dropdown-item" href="#">الأكثر قراءة هذا الأسبوع</a>
                     </div>
                  </div>
                  <div class="mostReadeSliderWraper defArrowNone">
                     <div class="swiper-container mostReadeSlider">
                        <div class="swiper-wrapper">
                           <div class="swiper-slide singleMostReaded">
                              <div class="mostReaderImg">
                                 <img src="<?php echo $base ?>assets/img/most-reader-1.png" alt="">
                                 <a href="#" >
                                    <span class="mostReadeIcon">
                                       <lord-icon
                                          src="<?php echo $base ?>assets/img/svg-ani/fpipqhrr.json"
                                          trigger="loop"
                                          colors="primary:#ffffff,secondary:#ffffff"
                                          stroke="100"
                                          style="width:30px;height:30px">
                                       </lord-icon>
                                    </span>
                                 </a>
                                 <div class="readeNumber">4</div>
                              </div>
                              <div class="mostReaderContent">
                                 <h4  ><a href="#" class="cw">على خلفية جدل حرمة اللقاح من عدمه.. مطالب بالكشف عن مكوناته!</a></h4>
                              </div>
                           </div>
                           <!-- /.swiper-slide -->
                           <div class="swiper-slide singleMostReaded">
                              <div class="mostReaderImg">
                                 <img src="<?php echo $base ?>assets/img/most-reader-2.png" alt="">
                                 <a href="#" >
                                    <span class="mostReadeIcon">
                                       <lord-icon
                                          src="<?php echo $base ?>assets/img/svg-ani/fpipqhrr.json"
                                          trigger="loop"
                                          colors="primary:#ffffff,secondary:#ffffff"
                                          stroke="100"
                                          style="width:30px;height:30px">
                                       </lord-icon>
                                    </span>
                                 </a>
                                 <div class="readeNumber">3</div>
                              </div>
                              <div class="mostReaderContent">
                                 <h4  ><a href="#" class="cw">على خلفية جدل حرمة اللقاح من عدمه.. مطالب بالكشف عن مكوناته!</a></h4>
                              </div>
                           </div>
                           <!-- /.swiper-slide -->
                           <div class="swiper-slide singleMostReaded">
                              <div class="mostReaderImg">
                                 <img src="<?php echo $base ?>assets/img/most-reader-3.png" alt="">
                                 <a href="#" >
                                    <span class="mostReadeIcon">
                                       <lord-icon
                                          src="<?php echo $base ?>assets/img/svg-ani/fpipqhrr.json"
                                          trigger="loop"
                                          colors="primary:#ffffff,secondary:#ffffff"
                                          stroke="100"
                                          style="width:30px;height:30px">
                                       </lord-icon>
                                    </span>
                                 </a>
                                 <div class="readeNumber">2</div>
                              </div>
                              <div class="mostReaderContent">
                                 <h4  ><a href="#" class="cw">على خلفية جدل حرمة اللقاح من عدمه.. مطالب بالكشف عن مكوناته!</a></h4>
                              </div>
                           </div>
                           <!-- /.swiper-slide -->
                           <div class="swiper-slide singleMostReaded">
                              <div class="mostReaderImg">
                                 <img src="<?php echo $base ?>assets/img/most-reader-4.png" alt="">
                                 <a href="#" >
                                    <span class="mostReadeIcon">
                                       <lord-icon
                                          src="<?php echo $base ?>assets/img/svg-ani/fpipqhrr.json"
                                          trigger="loop"
                                          colors="primary:#ffffff,secondary:#ffffff"
                                          stroke="100"
                                          style="width:30px;height:30px">
                                       </lord-icon>
                                    </span>
                                 </a>
                                 <div class="readeNumber">1</div>
                              </div>
                              <div class="mostReaderContent">
                                 <h4  ><a href="#" class="cw">على خلفية جدل حرمة اللقاح من عدمه.. مطالب بالكشف عن مكوناته!</a></h4>
                              </div>
                           </div>
                           <!-- /.swiper-slide -->
                           <div class="swiper-slide singleMostReaded">
                              <div class="mostReaderImg">
                                 <img src="<?php echo $base ?>assets/img/most-reader-1.png" alt="">
                                 <a href="#" >
                                    <span class="mostReadeIcon">
                                       <lord-icon
                                          src="<?php echo $base ?>assets/img/svg-ani/fpipqhrr.json"
                                          trigger="loop"
                                          colors="primary:#ffffff,secondary:#ffffff"
                                          stroke="100"
                                          style="width:30px;height:30px">
                                       </lord-icon>
                                    </span>
                                 </a>
                                 <div class="readeNumber">4</div>
                              </div>
                              <div class="mostReaderContent">
                                 <h4  ><a href="#" class="cw">على خلفية جدل حرمة اللقاح من عدمه.. مطالب بالكشف عن مكوناته!</a></h4>
                              </div>
                           </div>
                           <!-- /.swiper-slide -->
                           <div class="swiper-slide singleMostReaded">
                              <div class="mostReaderImg">
                                 <img src="<?php echo $base ?>assets/img/most-reader-2.png" alt="">
                                 <a href="#" >
                                    <span class="mostReadeIcon">
                                       <lord-icon
                                          src="<?php echo $base ?>assets/img/svg-ani/fpipqhrr.json"
                                          trigger="loop"
                                          colors="primary:#ffffff,secondary:#ffffff"
                                          stroke="100"
                                          style="width:30px;height:30px">
                                       </lord-icon>
                                    </span>
                                 </a>
                                 <div class="readeNumber">3</div>
                              </div>
                              <div class="mostReaderContent">
                                 <h4  ><a href="#" class="cw">على خلفية جدل حرمة اللقاح من عدمه.. مطالب بالكشف عن مكوناته!</a></h4>
                              </div>
                           </div>
                           <!-- /.swiper-slide -->
                           <div class="swiper-slide singleMostReaded">
                              <div class="mostReaderImg">
                                 <img src="<?php echo $base ?>assets/img/most-reader-3.png" alt="">
                                 <a href="#" >
                                    <span class="mostReadeIcon">
                                       <lord-icon
                                          src="<?php echo $base ?>assets/img/svg-ani/fpipqhrr.json"
                                          trigger="loop"
                                          colors="primary:#ffffff,secondary:#ffffff"
                                          stroke="100"
                                          style="width:30px;height:30px">
                                       </lord-icon>
                                    </span>
                                 </a>
                                 <div class="readeNumber">2</div>
                              </div>
                              <div class="mostReaderContent">
                                 <h4  ><a href="#" class="cw">على خلفية جدل حرمة اللقاح من عدمه.. مطالب بالكشف عن مكوناته!</a></h4>
                              </div>
                           </div>
                           <!-- /.swiper-slide -->
                           <div class="swiper-slide singleMostReaded">
                              <div class="mostReaderImg">
                                 <img src="<?php echo $base ?>assets/img/most-reader-4.png" alt="">
                                 <a href="#" >
                                    <span class="mostReadeIcon">
                                       <lord-icon
                                          src="<?php echo $base ?>assets/img/svg-ani/fpipqhrr.json"
                                          trigger="loop"
                                          colors="primary:#ffffff,secondary:#ffffff"
                                          stroke="100"
                                          style="width:30px;height:30px">
                                       </lord-icon>
                                    </span>
                                 </a>
                                 <div class="readeNumber">1</div>
                              </div>
                              <div class="mostReaderContent">
                                 <h4  ><a href="#" class="cw">على خلفية جدل حرمة اللقاح من عدمه.. مطالب بالكشف عن مكوناته!</a></h4>
                              </div>
                           </div>
                           <!-- /.swiper-slide -->
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
$args = array( 'post_type' => 'news', 'posts_per_page' => 1 ,'orderby' => 'date','order'   => 'ASC',);
$the_query = new WP_Query( $args); 
?>
<?php if ( $the_query->have_posts() ) : ?>
<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                  <div class="newsbanarTop">
                     <div class="newsbanarright pr">
                        <a href="#" class="newsBanar_Img">
                           <img src="<?php echo $base ?>assets/img/newsBanar2.jpg" alt="News Banar">
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
                           <h3   class="cb"><?php the_title()?></h3>
                        </a>
                        <p class="mobileNone" > <?php the_content()?> </p>
                        <div class="shareNews mobileNone">
                           <ul  class="shareThis">
                              <li><a href="#"><img src="<?php echo $base ?>assets/img/social/gray-facebook.svg" alt=""></a></li>
                              <li><a href="#"><img src="<?php echo $base ?>assets/img/social/gray-twitter.svg" alt=""></a></li>
                           </ul>
                           <div class="publistDate" >نُشر يوم <?php the_time()?> </div>
                        </div>
                     </div>
                  </div>

                  <?php endwhile;
wp_reset_postdata(); ?>
<?php else:  ?>
<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<div class="newsBanar_content dfp">
                     <div class="row">
                     <?php 
$args = array( 'post_type' => 'news', 'posts_per_page' => 3 ,'orderby' => 'date','order'   => 'ASC',);
$the_query = new WP_Query( $args); 
?>
<?php if ( $the_query->have_posts() ) : ?>
<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                           <li class="MostsingleNewsList" data-aos="fade-up" data-aos-duration="1000">
                              <div class="news_img">
                                 <a href="#"> <img src="<?php echo $base ?>assets/img/newsBanar_content-1.png" alt="News Image"></a>
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
                                    <?php the_title();?>
                                 </p>
                                 <span >22 مارس 2020 </span>
                              </a>
                           </li>
                        </div>
                        <?php endwhile;
wp_reset_postdata(); ?>
<?php else:  ?>
<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
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
                           <h2  >رياضة</h2>
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
                     <div class="sideContainer">
                        <div class="banar_side bg_white">
                           <div class="newsBnaBox">
                              <div class="newsBanarImg">
                                 <a href="#" class="newsBanar_Img"><img src="<?php echo $base ?>assets/img/sports_banar.jpg" alt="News Banar"></a>
                                 <div class="newsbanar-play">
                                    <a href="#" class="news_tag_item news_tag_single">
                                       <lord-icon class="asrrowSvg"
                                          src="<?php echo $base ?>assets/img/svg-ani/onyplpvn.json"
                                          trigger="hover"
                                          stroke="100"
                                          colors="primary:#FB3B3C,secondary:#FB3B3C"
                                          style="width:32px;height:32px">
                                       </lord-icon>
                                       <span class="news_tag_text">كورونا </span>
                                    </a>
                                    <a href="#" class="PlayNewsBanar">
                                       <lord-icon class="wSvg rot9"
                                          src="<?php echo $base ?>assets/img/svg-ani/vwacmoen.json"
                                          trigger="hover"
                                          delay="3"
                                          colors="primary:#121331,secondary:#121331"
                                          stroke="100"
                                          style="width:35px;height:35px">
                                       </lord-icon>
                                       <lord-icon class="dSvg rot9"
                                          src="<?php echo $base ?>assets/img/svg-ani/vwacmoen.json"
                                          trigger="hover"
                                          delay="3"
                                          colors="primary:#121331,secondary:#121331"
                                          stroke="100"
                                          style="width:35px;height:35px">
                                       </lord-icon>
                                    </a>
                                 </div>
                              </div>
                              <div class="newsBnaContentBox">
                                 <div class="newsBnaContent">
                                    <a href="#">
                                       <h3   >على خلفية جدل حرمة اللقاح من عدمه.. مطالب بالكشف عن مكوناته!</h3>
                                    </a>
                                    <p  class="">أحدث قرار اقتناء الجزائر للقاح الروسي سبوتنيك 5 ضجة في مواقع التواصل الاجتماعي، من زاوية أخرى غير تلك التي سلطت الضوء على مدى فعاليته والآثار الجانبية له، من خلال المطالبة بالكشف على مكوناته للحكم عن أنه حلال أم حرام.</p>
                                 </div>
                              </div>
                           </div>
                           <!-- /.newsBnaBox -->
                        </div>
                        <!-- /.banar_side -->
                     </div>
                     <!-- /sideContainer -->
                     <div class="widgetColum">
                        <div class="sidebar_widget bg_white">
                           <div class="importantNewsBox">
                              <ul  class="mostInportNewsList verticalList">
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
                                          منظمة الصحة العالمية تعقد اجتماعا طارئا بسبب السلالات الجديدة لكورونا ..
                                       </p>
                                    </a>
                                    <div class="news_img">
                                       <a href="#"><img src="<?php echo $base ?>assets/img/sports_img-1.png" alt="Sports"></a>
                                    </div>
                                 </li>
                                 <!-- /.MostsingleNewsList -->
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
                                          منظمة الصحة العالمية تعقد اجتماعا طارئا بسبب السلالات الجديدة لكورونا 
                                       </p>
                                    </a>
                                    <div class="news_img">
                                       <a href="#"><img src="<?php echo $base ?>assets/img/sports_img-2.png" alt="Sports"></a>  
                                    </div>
                                 </li>
                                 <!-- /.MostsingleNewsList -->
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
                                          منظمة الصحة العالمية تعقد اجتماعا طارئا بسبب السلالات الجديدة لكورونا 
                                       </p>
                                    </a>
                                    <div class="news_img">
                                       <a href="#"><img src="<?php echo $base ?>assets/img/sports_img-3.png" alt="Sports"></a>   
                                    </div>
                                 </li>
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
                           <div class="swiper-slide IllusStorSliderItem">
                              <div class="IllusStorItem">
                                 <span class="copySto"><a href="#"><img src="<?php echo $base ?>assets/img/copy.svg" alt=""></a></span>
                                 <img src="<?php echo $base ?>assets/img/IllusStor-0.png" alt="Illustrated stories">
                                 <p   class="story_count"><a href="#"> <span class="">+10</span><br>المزيد</a></p>
                              </div>
                           </div>
                           <!-- /.swiper-slide -->
                           <div class="swiper-slide IllusStorSliderItem">
                              <div class="IllusStorItem">
                                 <span class="copySto"><a href="#"><img src="<?php echo $base ?>assets/img/copy.svg" alt=""></a></span>
                                 <img src="<?php echo $base ?>assets/img/IllusStor-1.png" alt="Illustrated stories">
                                 <p  ><a href="#">على خلفية جدل حرمة اللقاح من عدمه.. مطالب بالكشف عن مكوناته!</a></p>
                              </div>
                           </div>
                           <!-- /.swiper-slide -->
                           <div class="swiper-slide IllusStorSliderItem">
                              <div class="IllusStorItem">
                                 <span class="copySto"><a href="#"><img src="<?php echo $base ?>assets/img/copy.svg" alt=""></a></span>
                                 <img src="<?php echo $base ?>assets/img/IllusStor-2.png" alt="Illustrated stories">
                                 <p  ><a href="#">على خلفية جدل حرمة اللقاح من عدمه.. مطالب بالكشف عن مكوناته!</a></p>
                              </div>
                           </div>
                           <!-- /.swiper-slide -->
                           <div class="swiper-slide IllusStorSliderItem">
                              <div class="IllusStorItem">
                                 <span class="copySto"><a href="#"><img src="<?php echo $base ?>assets/img/copy.svg" alt=""></a></span>
                                 <img src="<?php echo $base ?>assets/img/IllusStor-3.png" alt="Illustrated stories">
                                 <p  ><a href="#">على خلفية جدل حرمة اللقاح من عدمه.. مطالب بالكشف عن مكوناته!</a></p>
                              </div>
                           </div>
                           <!-- /.swiper-slide -->
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
               <div class="row OrasVideosRow">
                  <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                     <div class="OrasVideosBox" data-aos="fade-up" data-aos-duration="1000">
                        <div class="OrasVideosImage">
                           <a href="#"><img src="<?php echo $base ?>assets/img/OrasVideosImage-1.png" alt="Oras Videos"></a>
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
                              <h4   class="cb">السماح بالتراويح في المساجد</h4>
                           </a>
                           <p  >ملف تصنيف الراي كتراث عالمي باليونسكو مجددا.. فما هي حظوظه</p>
                        </div>
                     </div>
                  </div>
                  <!-- /.col-lg-4 col-md-4 col-sm-6 col-12 -->
                  <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                     <div class="OrasVideosBox" data-aos="fade-up" data-aos-duration="1000">
                        <div class="OrasVideosImage">
                           <a href="#"><img src="<?php echo $base ?>assets/img/OrasVideosImage-1.png" alt="Oras Videos"></a>
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
                              <h4   class="cb">السماح بالتراويح في المساجد</h4>
                           </a>
                           <p  >ملف تصنيف الراي كتراث عالمي باليونسكو مجددا.. فما هي حظوظه</p>
                        </div>
                     </div>
                  </div>
                  <!-- /.col-lg-4 col-md-4 col-sm-6 col-6 -->
                  <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                     <div class="OrasVideosBox" data-aos="fade-up" data-aos-duration="1000">
                        <div class="OrasVideosImage">
                           <a href="#"><img src="<?php echo $base ?>assets/img/OrasVideosImage-1.png" alt="Oras Videos"></a>
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
                              <h4   class="cb">السماح بالتراويح في المساجد</h4>
                           </a>
                           <p  >ملف تصنيف الراي كتراث عالمي باليونسكو مجددا.. فما هي حظوظه</p>
                        </div>
                     </div>
                  </div>
                  <!-- /.col-lg-4 col-md-4 col-sm-6 col-6 -->
                  <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                     <div class="OrasVideosBox" data-aos="fade-up" data-aos-duration="1000">
                        <div class="OrasVideosImage">
                           <a href="#"><img src="<?php echo $base ?>assets/img/OrasVideosImage-3.png" alt="Oras Videos"></a>
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
                              <h4   class="cb">السماح بالتراويح في المساجد</h4>
                           </a>
                           <p  >ملف تصنيف الراي كتراث عالمي باليونسكو مجددا.. فما هي حظوظه</p>
                        </div>
                     </div>
                  </div>
                  <!-- /.col-lg-4 col-md-4 col-sm-6 col-6 -->
                  <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                     <div class="OrasVideosBox" data-aos="fade-up" data-aos-duration="1000">
                        <div class="OrasVideosImage">
                           <a href="#"><img src="<?php echo $base ?>assets/img/OrasVideosImage-4.png" alt="Oras Videos"></a>
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
                              <h4   class="cb">السماح بالتراويح في المساجد</h4>
                           </a>
                           <p  >ملف تصنيف الراي كتراث عالمي باليونسكو مجددا.. فما هي حظوظه</p>
                        </div>
                     </div>
                  </div>
                  <!-- /.col-lg-4 col-md-4 col-sm-6 col-6 -->
                  <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                     <div class="OrasVideosBox" data-aos="fade-up" data-aos-duration="1000">
                        <div class="OrasVideosImage">
                           <a href="#"><img src="<?php echo $base ?>assets/img/OrasVideosImage-5.png" alt="Oras Videos"></a>
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
                              <h4   class="cb">السماح بالتراويح في المساجد</h4>
                           </a>
                           <p  >ملف تصنيف الراي كتراث عالمي باليونسكو مجددا.. فما هي حظوظه</p>
                        </div>
                     </div>
                  </div>
                  <!-- /.col-lg-4 col-md-4 col-sm-6 col-6 -->
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


$args = array(
    'role'    => 'Author',
    'orderby' => 'user_nicename',
    'order'   => 'ASC',
   'number' => 5
    
);
$users = get_users( $args );

foreach ( $users as $user ) {
   ?>
                     <div class="col OpinArtiCol mb-5">
                        <div class="OpinArtiSingle">
                           <img src="<?php echo $base ?>assets/img/articale_topImg-1.png" alt="Articale Img" class="articale_topImg">
                           <div class="OpinArtiSingleCont text-center">
                              <a href="#"><img src="<?php echo $base ?>assets/img/articale_profile-1.png" alt="Articale Profile" class="articaleProfileImg"></a>
                              <a href="#">

                                 <h4  ><?php echo $user->user_description  ?> </h4>





                              </a>
                           </div>
                           <a href="#" class="authoName">
                           <?php echo $user->display_name ?>      
                        </a>
                        </div>
                     </div>

                     <?php
}

?>

                
                  
                     <!-- /.col OpinArtiCol -->
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
                  </h2>
                  <div class="row listenToRow">
                     <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-4">
                        <div class="listenImage pr">
                           <img src="<?php echo $base ?>assets/img/listen_img-1.png" alt="listen Image">
                           <a href="#">
                              <span class="mostReadeIcon">
                                 <lord-icon
                                    src="<?php echo $base ?>assets/img/svg-ani/fpipqhrr.json"
                                    trigger="loop"
                                    colors="primary:#ffffff,secondary:#ffffff"
                                    stroke="100"
                                    style="width:30px;height:30px">
                                 </lord-icon>
                              </span>
                           </a>
                        </div>
                        <div class="listenConte">
                           <a href="#">
                              <h4  >النشرة اليومية: فقدان نصف مليون وظيفة بسبب كورونا</h4>
                           </a>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4">
                        <div class="listenImage pr">
                           <img src="<?php echo $base ?>assets/img/listen_img-2.png" alt="listen Image">
                           <a href="#">
                              <span class="mostReadeIcon">
                                 <lord-icon
                                    src="<?php echo $base ?>assets/img/svg-ani/fpipqhrr.json"
                                    trigger="loop"
                                    colors="primary:#ffffff,secondary:#ffffff"
                                    stroke="100"
                                    style="width:30px;height:30px">
                                 </lord-icon>
                              </span>
                           </a>
                        </div>
                        <div class="listenConte">
                           <a href="#">
                              <h4  >النشرة اليومية: “الخضر” من أجل التأكيد وتعزيز الأرقام القياسية  </h4>
                           </a>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4">
                        <div class="listenImage pr">
                           <img src="<?php echo $base ?>assets/img/listen_img-3.png" alt="listen Image">
                           <a href="#">
                              <span class="mostReadeIcon">
                                 <lord-icon
                                    src="<?php echo $base ?>assets/img/svg-ani/fpipqhrr.json"
                                    trigger="loop"
                                    colors="primary:#ffffff,secondary:#ffffff"
                                    stroke="100"
                                    style="width:30px;height:30px">
                                 </lord-icon>
                              </span>
                           </a>
                        </div>
                        <div class="listenConte">
                           <a href="#">
                              <h4  >النشرة اليومية: السلالة المتحورة ترفع منحنى الإصابات بكورونا</h4>
                           </a>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4">
                        <div class="listenImage pr">
                           <img src="<?php echo $base ?>assets/img/listen_img-3.png" alt="listen Image">
                           <a href="#">
                              <span class="mostReadeIcon">
                                 <lord-icon
                                    src="<?php echo $base ?>assets/img/svg-ani/fpipqhrr.json"
                                    trigger="loop"
                                    colors="primary:#ffffff,secondary:#ffffff"
                                    stroke="100"
                                    style="width:30px;height:30px">
                                 </lord-icon>
                              </span>
                           </a>
                        </div>
                        <div class="listenConte">
                           <a href="#">
                              <h4  >النشرة اليومية : هزة أرضية في قالمة بشدة 4.8 درجة  </h4>
                           </a>
                        </div>
                     </div>
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
                     <div class="sideContainer">
                        <div class="banar_side bg_white">
                           <div class="newsBnaBox">
                              <div class="newsBanarImg">
                                 <a href="#" class="newsBanar_Img"><img src="<?php echo $base ?>assets/img/economy-banar.jpg" alt="News Banar"></a>
                                 <div class="newsbanar-play">
                                    <a href="#" class="news_tag_item news_tag_single">
                                       <lord-icon class="asrrowSvg"
                                          src="<?php echo $base ?>assets/img/svg-ani/onyplpvn.json"
                                          trigger="hover"
                                          stroke="100"
                                          colors="primary:#FB3B3C,secondary:#FB3B3C"
                                          style="width:32px;height:32px">
                                       </lord-icon>
                                       <span class="news_tag_text">كورونا </span>
                                    </a>
                                    <a href="#" class="PlayNewsBanar">
                                       <lord-icon class="wSvg rot9"
                                          src="<?php echo $base ?>assets/img/svg-ani/vwacmoen.json"
                                          trigger="hover"
                                          delay="3"
                                          colors="primary:#121331,secondary:#121331"
                                          stroke="100"
                                          style="width:35px;height:35px">
                                       </lord-icon>
                                       <lord-icon class="dSvg rot9"
                                          src="<?php echo $base ?>assets/img/svg-ani/vwacmoen.json"
                                          trigger="hover"
                                          delay="3"
                                          colors="primary:#ffffff,secondary:#ffffff"
                                          stroke="100"
                                          style="width:35px;height:35px">
                                       </lord-icon>
                                    </a>
                                 </div>
                              </div>
                              <div class="newsBnaContentBox">
                                 <div class="newsBnaContent">
                                    <a href="#">
                                       <h3  >على خلفية جدل حرمة اللقاح من عدمه.. مطالب بالكشف عن مكوناته!</h3>
                                    </a>
                                    <p  >أحدث قرار اقتناء الجزائر للقاح الروسي سبوتنيك 5 ضجة في مواقع التواصل الاجتماعي، من زاوية أخرى غير تلك التي سلطت الضوء على مدى فعاليته والآثار الجانبية له، من خلال المطالبة بالكشف على مكوناته للحكم عن أنه حلال أم حرام.</p>
                                 </div>
                              </div>
                           </div>
                           <!-- /.newsBnaBox -->
                        </div>
                        <!-- /.banar_side -->
                     </div>
                     <!-- /sideContainer -->
                     <div class="widgetColum">
                        <div class="sidebar_widget bg_white">
                           <div class="importantNewsBox">
                              <ul  class="mostInportNewsList verticalList">
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
                                          منظمة الصحة العالمية تعقد اجتماعا طارئا بسبب السلالات الجديدة لكورونا 
                                       </p>
                                    </a>
                                    <div class="news_img">
                                       <a href="#"><img src="<?php echo $base ?>assets/img/economy-1.png" alt="Sports">
                                       </a>                        
                                    </div>
                                 </li>
                                 <!-- /.MostsingleNewsList -->
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
                                          منظمة الصحة العالمية تعقد اجتماعا طارئا بسبب السلالات الجديدة لكورونا 
                                       </p>
                                    </a>
                                    <div class="news_img">
                                       <a href="#"><img src="<?php echo $base ?>assets/img/economy-2.png" alt="Sports">
                                       </a>                        
                                    </div>
                                 </li>
                                 <!-- /.MostsingleNewsList -->
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
                                          منظمة الصحة العالمية تعقد اجتماعا طارئا بسبب السلالات الجديدة لكورونا 
                                       </p>
                                    </a>
                                    <div class="news_img">
                                       <a href="#"><img src="<?php echo $base ?>assets/img/economy-3.png" alt="Sports">
                                       </a>                        
                                    </div>
                                 </li>
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
                     <div class="sideContainer">
                        <div class="banar_side bg_white">
                           <div class="newsBnaBox">
                              <div class="newsBanarImg">
                                 <a href="#" class="newsBanar_Img"><img src="<?php echo $base ?>assets/img/repors-banar.jpg" alt="News Banar"></a>
                                 <div class="newsbanar-play">
                                    <a href="#" class="news_tag_item news_tag_single">
                                       <lord-icon class="asrrowSvg"
                                          src="<?php echo $base ?>assets/img/svg-ani/onyplpvn.json"
                                          trigger="hover"
                                          stroke="100"
                                          colors="primary:#FB3B3C,secondary:#FB3B3C"
                                          style="width:32px;height:32px">
                                       </lord-icon>
                                       <span class="news_tag_text">كورونا </span>
                                    </a>
                                    <a href="#" class="PlayNewsBanar">
                                       <lord-icon class="wSvg rot9"
                                          src="<?php echo $base ?>assets/img/svg-ani/vwacmoen.json"
                                          trigger="hover"
                                          delay="3"
                                          colors="primary:#121331,secondary:#121331"
                                          stroke="100"
                                          style="width:35px;height:35px">
                                       </lord-icon>
                                       <lord-icon class="dSvg rot9"
                                          src="<?php echo $base ?>assets/img/svg-ani/vwacmoen.json"
                                          trigger="hover"
                                          delay="3"
                                          colors="primary:#ffffff,secondary:#ffffff"
                                          stroke="100"
                                          style="width:35px;height:35px">
                                       </lord-icon>
                                    </a>
                                 </div>
                              </div>
                              <div class="newsBnaContentBox">
                                 <div class="newsBnaContent">
                                    <a href="#">
                                       <h3  >حصاد 2020: أحداث أثارت الجدل في الجزائر</h3>
                                    </a>
                                    <p  >أحدث قرار اقتناء الجزائر للقاح الروسي سبوتنيك 5 ضجة في مواقع التواصل الاجتماعي، من زاوية أخرى غير تلك التي سلطت الضوء على مدى فعاليته والآثار الجانبية له، من خلال المطالبة بالكشف على مكوناته للحكم عن أنه حلال أم حرام.</p>
                                 </div>
                              </div>
                           </div>
                           <!-- /.newsBnaBox -->
                        </div>
                        <!-- /.banar_side -->
                     </div>
                     <!-- /sideContainer -->
                     <div class="widgetColum">
                        <div class="sidebar_widget bg_white">
                           <div class="importantNewsBox">
                              <ul  class="mostInportNewsList verticalList">
                                 <li class="MostsingleNewsList" data-aos="fade-in" data-aos-duration="1000">
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
                                          منظمة الصحة العالمية تعقد اجتماعا طارئا بسبب السلالات الجديدة لكورونا
                                       </p>
                                    </a>
                                    <div class="news_img">
                                       <a href="#"><img src="<?php echo $base ?>assets/img/repors-1.png" alt="Sports">
                                       </a>                        
                                    </div>
                                 </li>
                                 <!-- /.MostsingleNewsList -->
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
                                          منظمة الصحة العالمية تعقد اجتماعا طارئا بسبب السلالات الجديدة لكورونا 
                                       </p>
                                    </a>
                                    <div class="news_img">
                                       <a href="#"><img src="<?php echo $base ?>assets/img/repors-2.png" alt="Sports">
                                       </a>                        
                                    </div>
                                 </li>
                                 <!-- /.MostsingleNewsList -->
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
                                          منظمة الصحة العالمية تعقد اجتماعا طارئا بسبب السلالات الجديدة لكورونا 
                                       </p>
                                    </a>
                                    <div class="news_img">
                                       <a href="#"><img src="<?php echo $base ?>assets/img/repors-3.png" alt="Sports">
                                       </a>                        
                                    </div>
                                 </li>
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
     <?php get_footer()?>