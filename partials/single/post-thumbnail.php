<?php 
if(has_post_thumbnail()){
    the_post_thumbnail();
}else{
    echo "not image ";
}

?>