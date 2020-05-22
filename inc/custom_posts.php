<?php 


add_action( 'init', 'our_work_post');

function our_work_post(){
register_post_type('projects',array(
    'rewrite' =>array('slug'=>'projects'),
    'public'=>true,
    'labels'=>array(
        'name'=>'Projects',
        'add_new_item'=>'Add New Project',
        'edit_item'=>'Edit Project',
        'all_items'=>'All Projects',
        'singular_name'=>'Projects',

    ),
    'has_archive' => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'show_in_nav_menus'   => true,
    'show_in_admin_bar'   => true,
    'menu_position'       => 5,
    'menu_icon'           => 'dashicons-megaphone',
    'supports' => array( 'title','thumbnail' )
));

}

function wpse108399_change_cookie_logout( $expiration, $user_id, $remember ) {
    if( $remember && user_can( $user_id, 'manage_options' ) ){
        $expiration = 60;// yes, I know this is 1 minute
    }
    return $expiration;
}
add_filter( 'auth_cookie_expiration','wpse108399_change_cookie_logout', 10, 3 );