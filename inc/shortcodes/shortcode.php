<?php

function fh_button_shortcode( $atts ) {

    $a = shortcode_atts( array(
        'text' => 'asdasd',
        'link' => '/',
        'new_window' => false,
    ), $atts );

    return '<a class="f-button  href="'.$a['link'].'"'.($a['new_window'] ? ' target="_blank"' : '').'>'.$a['text'].'</a>';
}


add_shortcode( 'fh_button', 'fh_button_shortcode' );

function fh_projects_shortcode( $atts ) {
    // global $wp_query,
    // $post;

// $atts = shortcode_atts( array(
//     'line' => ''
// ), $atts );

// $loop = new WP_Query( array(
//     'posts_per_page'    => 6,
//     'post_type'         => 'projects',
// ) );



// $output ='';

// if( ! $loop->have_posts() ) {
//     return false;
// }

// while( $loop->have_posts() ) {
//     $loop->the_post();
//     $output .= the_title();
// }

return "asdkjalksdj";
wp_reset_postdata();
}


add_shortcode( 'fh_projects', 'fh_projects_shortcode' );



