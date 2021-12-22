<?php 
 $base = get_template_directory_uri() . '/';

$pagination_links = paginate_links([
    'prev_next' => false,

    'type' => 'array',
]);
if (is_array($pagination_links)) {
    echo ' <div class="archivePagination archivePagi">
    <nav aria-label="Page navigation">
       <ul class="pagination">';

       ?>
   

                                 
        <?php if(get_previous_posts_link()):?>

<li class="page-item">
<img src="<?php echo $base?>assets/img/icons/black-chevron-right.svg" alt=""> <?php echo get_previous_posts_link(__('السابق'));?>  
    </li>

<?php else:?>

    <li class="page-item disabled">
    <a class="page-link" href="#" tabindex="-1" aria-disabled="true"><img src="<?php echo $base?>assets/img/icons/black-chevron-right.svg" alt=""> السابق</a>
    </li>

    <?php endif ?>   

       <?php
    foreach ($pagination_links as $link) {
        $link = str_replace('class="', 'class="page-link ', $link);
        echo '<li class="page-item">' . $link . '</li>';
      
    }

    ?>

<?php if(get_next_posts_link()):?>

    <li class="page-item">
        <?php echo get_next_posts_link(__('التالي'));?>  <img src="<?php echo $base?>assets/img/icons/black-chevron-left.svg" alt="">
        </li>

    <?php else:?>

        <li class="page-item disabled">
        <a class="page-link " href="#">    التالي  <img src="<?php echo $base?>assets/img/icons/black-chevron-left.svg" alt=""> </a>
        </li>

        <?php endif ?>  
        
        



<?php




    echo '</ul></nav></div><!-- end row -->';


}
?>

