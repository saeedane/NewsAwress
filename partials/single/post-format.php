<?php $base = get_template_directory_uri() . '/' ?>


<?php if(has_post_format('video')) : ?>
                                       <lord-icon class="wSvg" src="<?php echo $base ?>assets/img/svg-ani/vwacmoen.json" trigger="hover" colors="primary:#A5A5A5,secondary:#A5A5A5" style="width:25px;height:25px">
                                       </lord-icon>
                                       <lord-icon class="dSvg" src="<?php echo $base ?>assets/img/svg-ani/vwacmoen.json" trigger="hover" colors="primary:#FB0B0B,secondary:#FB0B0B" style="width:25px;height:25px">
                                       </lord-icon>

                              <?php elseif(has_post_format('image')):?>
                
                                 <lord-icon class="wSvg" src="<?php echo $base ?>assets/img/svg-ani/fgkmrslx.json" trigger="hover" colors="primary:#A5A5A5,secondary:#A5A5A5" style="width:25px;height:25px">
                                       </lord-icon>
                                       <lord-icon class="dSvg" src="<?php echo $base ?>assets/img/svg-ani/fgkmrslx.json" trigger="hover" colors="primary:#FB0B0B,secondary:#FB0B0B" style="width:25px;height:25px">
                                       </lord-icon>

                              <?php else:?>
                                 <lord-icon class="wSvg" src="<?php echo $base ?>assets/img/svg-ani/fpipqhrr.json" trigger="hover" colors="primary:#A5A5A5,secondary:#A5A5A5" style="width:25px;height:25px">
                                       </lord-icon>
                                       <lord-icon class="dSvg" src="<?php echo $base ?>assets/img/svg-ani/fpipqhrr.json" trigger="hover" colors="primary:#FB0B0B,secondary:#FB0B0B" style="width:25px;height:25px">
                                       </lord-icon>
                              <?php endif ?>   