<?php $base = get_template_directory_uri() . '/' ?>

<li class="singleArchiveCont aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000">
                                 <div class="archive_post_img pr">

                                 <?php the_post_thumbnail()?>
                                    <a href="#" class="playNeVid">
                                       <lord-icon class="rot9" src="assets/img/svg-ani/vwacmoen.json" trigger="hover" delay="3" colors="primary:#ffffff,secondary:#ffffff" stroke="83" style="width:55px;height:55px">
                                       </lord-icon>
                                    </a>
                                 </div>
                                 <div class="Archive-body">
                                    <a href="#">
                                    <?php echo substr(get_the_title(), 0, 100); ?>
                                                                     </a>
                                    <ul class="genPostag">
                                       <li><a href="#" class="archiveAuthore"><?php echo get_avatar( get_the_author_meta( 'ID' ), 32 ); ?>
 <?php echo get_the_author();
 ?> </a></li>
                                       <li>
                                          <span>
                                             <lord-icon class="wSvg" src="<?php $base?>assets/img/svg-ani/zmenvmel.json" trigger="hover" delay="3" colors="primary:#A5A5A5,secondary:#A5A5A5" stroke="90" style="width:28px;height:28px">
                                             </lord-icon>
                                             <lord-icon class="dSvg" src="<?php $base?>assets/img/svg-ani/zmenvmel.json" trigger="hover" delay="3" colors="primary:#FB0B0B,secondary:#FB0B0B" stroke="90" style="width:28px;height:28px">
                                             </lord-icon>

                                            </span>
                                       </li>
                                    </ul>
                                 </div>
                              </li>