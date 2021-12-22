<?php 
add_action( 'admin_menu', 'register_my_custom_menu_page' );
function register_my_custom_menu_page() {
  // add_menu_page( $page_title, $menu_title, $capability, $menu_slug, $function, $icon_url, $position );
  add_menu_page( "sociale media manger", "sociale links ","manage_options","sociale-media-links", "SocialeManger", "dashicons-share
  ", 78 );

}

function SocialeManger(){
    $socialnetworks = ['facebook','youtube','instagram','twitter','google','podcasts'];

    if (isset($_POST['_wpnonce'])) {
        if (!wp_verify_nonce($_POST['_wpnonce'], 'wpc_social_options')) {
            wp_die();
        }

    }

    $links = [];
    foreach($socialnetworks as $network){

        if (isset($_POST['wpc_' . $network . '_link'])) {
            $links[$network] = esc_url_raw($_POST['wpc_' . $network . '_link']);
        }

    }
    update_option('wpc_social_options', $links, false);



?>

<h1> Sociale Media Manger</h1>
<hr/>
<div class="wrap">
<form action="" method="post">
<table class="form-table">

<?php 





foreach($socialnetworks as $network){
    $link = isset($links[$network]) ? $links[$network] : '';

    ?>
<tr>
<th> <?php echo $network ?> </th>
<td>
<input type="url" name="<?php echo esc_attr('wpc_' . $network . '_link') ?>" value="<?php echo esc_url($link); ?>">

<td>
</tr>


    <?php
}
    ?>

<p class="submit">
                    <input type="submit" value="<?php echo esc_attr(__('Save Social Links', 'wpcourse')) ?>" class="button button-primary">
                </p>
                <?php wp_nonce_field('wpc_social_options'); ?>

           
</form>
</table>
</div>


   <?php 
}

