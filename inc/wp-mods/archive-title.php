<?php

add_filter( 'get_the_archive_title', function ($title) {    
    if ( is_category() ) {    
        $title = single_cat_title( '', false );    
    } elseif ( is_month() ) {
        $title = single_month_title(' ');
    }

    return $title;    
});