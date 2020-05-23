<?php 

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
add_action( 'init', 'our_work_post');

function service_taxonomy(){
$labels = array(

    'name'=>'Services',
    'singular_name'=>'Service',
    'search_items'=>'Search Services',
    'all_items'=>'All Services',
    'parent_item'=>'Parent Service',
    'parent_item_colon'=>'Parent Service:',
    'edit_item'=>'Edite Service',
    'add_new_item'=>'Add New Service',
    'menu_name'=>'Services'
);
$args = array(
    'hierarchical'=>true,
    'has_archive' => true,
    'labels'=>$labels,
    'show_ui'=> true,
    'show_admin_column'=> true,
    'qurey_var'=> true,
    'rewrite'=> array('slug'=>'service')
);
register_taxonomy( 'service', array('projects'), $args );

}
add_action( 'init', 'service_taxonomy');

function wpse108399_change_cookie_logout( $expiration, $user_id, $remember ) {
    if( $remember && user_can( $user_id, 'manage_options' ) ){
        $expiration = 60;// yes, I know this is 1 minute
    }
    return $expiration;
}
add_filter( 'auth_cookie_expiration','wpse108399_change_cookie_logout', 10, 3 );


// function wpa_course_post_link( $post_link, $id = 0 ){
//     $post = get_post($id);  
//     if ( is_object( $post ) ){
//         $terms = wp_get_object_terms( $post->ID, 'service' );
//         if( $terms ){
//             return str_replace( '%project%' , $terms[0]->slug , $post_link );
//         }
//     }
//     return $post_link;  
// }
// add_filter( 'post_type_link', 'wpa_course_post_link', 1, 3 );

