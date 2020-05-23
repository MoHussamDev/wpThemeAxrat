<?php

function get_service_cat($id){
    $terms_list = get_the_terms($id, 'service') ;
    if($terms_list){
    
        $output = '';
        foreach($terms_list as $term){
            $output .=  '<a href='. get_term_link($term) . '>'.$term->name.'</a>';
        }
    }else{
        $output = '';
    }

    return $output;
}