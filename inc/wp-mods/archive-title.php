<?php

// add_filter( 'get_the_archive_title', function ($title) {    
//     if ( is_category() ) {    
//         $title = single_cat_title( '', false );    
//     } elseif ( is_month() ) {
//         $title = single_month_title(' ');
//     }

//     return $title;    
// });

add_filter( 'get_the_archive_title', function ($title) {
    $title  = __( 'Archives' );
    $prefix = '';
 
    if ( is_category() ) {
        $title  = single_cat_title( '', false );
        $prefix = _x( '', 'category archive title prefix' );
    } elseif ( is_tag() ) {
        $title  = single_tag_title( '', false );
        $prefix = _x( '', 'tag archive title prefix' );
    } elseif ( is_author() ) {
        $title  = get_the_author();
        $prefix = _x( '', 'author archive title prefix' );
    } elseif ( is_year() ) {
        $title  = get_the_date( _x( 'Y', 'yearly archives date format' ) );
        $prefix = _x( '', 'date archive title prefix' );
    } elseif ( is_month() ) {
        $title  = get_the_date( _x( 'F Y', 'monthly archives date format' ) );
        $prefix = _x( '', 'date archive title prefix' );
    } elseif ( is_day() ) {
        $title  = get_the_date( _x( 'F j, Y', 'daily archives date format' ) );
        $prefix = _x( 'Day:', 'date archive title prefix' );
    } elseif ( is_tax( 'post_format' ) ) {
        if ( is_tax( 'post_format', 'post-format-aside' ) ) {
            $title = _x( 'Asides', 'post format archive title' );
        } elseif ( is_tax( 'post_format', 'post-format-gallery' ) ) {
            $title = _x( 'Galleries', 'post format archive title' );
        } elseif ( is_tax( 'post_format', 'post-format-image' ) ) {
            $title = _x( 'Images', 'post format archive title' );
        } elseif ( is_tax( 'post_format', 'post-format-video' ) ) {
            $title = _x( 'Videos', 'post format archive title' );
        } elseif ( is_tax( 'post_format', 'post-format-quote' ) ) {
            $title = _x( 'Quotes', 'post format archive title' );
        } elseif ( is_tax( 'post_format', 'post-format-link' ) ) {
            $title = _x( 'Links', 'post format archive title' );
        } elseif ( is_tax( 'post_format', 'post-format-status' ) ) {
            $title = _x( 'Statuses', 'post format archive title' );
        } elseif ( is_tax( 'post_format', 'post-format-audio' ) ) {
            $title = _x( 'Audio', 'post format archive title' );
        } elseif ( is_tax( 'post_format', 'post-format-chat' ) ) {
            $title = _x( 'Chats', 'post format archive title' );
        }
    } elseif ( is_post_type_archive() ) {
        $title  = post_type_archive_title( '', false );
        $prefix = _x( 'Archives:', 'post type archive title prefix' );
    } elseif ( is_tax() ) {
        $queried_object = get_queried_object();
        if ( $queried_object ) {
            $tax    = get_taxonomy( $queried_object->taxonomy );
            $title  = single_term_title( '', false );
            $prefix = sprintf(
                /* translators: %s: Taxonomy singular name. */
                _x( '%s:', 'taxonomy term archive title prefix' ),
                $tax->labels->singular_name
            );
        }
    }
 
    $original_title = $title;
 
    /**
     * Filters the archive title prefix.
     *
     * @since 5.5.0
     *
     * @param string $prefix Archive title prefix.
     */
    $prefix = apply_filters( 'get_the_archive_title_prefix', $prefix );
    if ( $prefix ) {
        $title = sprintf(
            /* translators: 1: Title prefix. 2: Title. */
            _x( '%1$s %2$s', 'archive title' ),
            $prefix,
            '<span>' . $title . '</span>'
        );
    }
 
    return $title;
});