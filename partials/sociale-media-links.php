
    <?php 
                          
                          $sociale = get_option("wpc_social_options");
                          foreach($sociale as $network=>$link){
                              ?>


<li><a href="#"><img src="<?php echo $base ?>assets/img/social/<?php echo $network ?>.svg" alt=""></a></li>




                  

<?php
                          }
                          
                          ?>



