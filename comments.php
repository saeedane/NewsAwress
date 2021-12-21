


<?php 

if (comments_open()) {
    comment_form([
        'class_container' => 'comentForm',
        'title_reply_before' => '<h2 class="coment_title">',
        'title_reply_after' => '</h2>',
        'comment_notes_before' => '',
        'comment_notes_after' => '',
        'label_submit' => __('أرسل التعليق'),
        'title_reply' => 'شاركنا رأيك ',
        'class_submit' => ' col comentOption redBorder',
        'fields' => [
            'author' => '<input name="author" type="text" class="in_field" placeholder="'.esc_attr(__('الاسم ', 'wpc')).'">',
            'email' => '<input name="email" type="text" class="in_field" placeholder="'.esc_attr(__('البريد الكتروني ', 'wpc')).'">',
            'url' => '',
            'cookies' => '',
        ],
        'comment_field' => '<div class="comentForm"><textarea name="user_coment" id="userComent" ></textarea></div>',
        'class_form' => 'form-wrapper',
    ]);

?>
<div class="colent_list">

<?php 

if(have_comments()){
    ?>                       
<?php
	wp_list_comments( array(
	    'style'      => 'ul',
        'max_depth'=> 3,
        'format'      => 'html5',
        'short_ping'  => true,
        'type'        => 'comment',
        'callback' => 'better_commets',
	) );
     ?>


        <?php }?>
    </div>

<?php    
} else {
    ?>
    <div class="alert alert-info mt-4"><?php _e('التعليقات مغلقة ', 'wpc'); ?></div>
    <?php
}

?>

