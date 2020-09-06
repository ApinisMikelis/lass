<?php

$member_cat = $args['member_category'];

if ( $member_cat ) {
  
    $args = array(  
        'post_type' => 'biedri',
        'tax_query' => array(
            array (
                'taxonomy' => 'member_category',
                'field' => 'slug',
                'terms' => $member_cat,
            )               
        ),
        'posts_per_page' => '100',
        'order' => 'ASC'
    );   
    
    $loop = new WP_Query( $args ); 
    
    while ( $loop->have_posts() ) : $loop->the_post();

        get_template_part( 'template-parts/content', "member");

    endwhile;

    wp_reset_postdata();

}
