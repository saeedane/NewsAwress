<?php 
$categories = get_the_terms(null, 'category');
if (is_array($categories)) {
foreach($categories as $category) {
    echo "<a href='".esc_url(get_term_link($category))."' class='ml-3'> " .$category->name."</a>";
}
}
                                    

?>