<?php

    $calendar = get_field('event_calendar');

    $args = array(  
        'post_type' => 'event',
        'posts_per_page' => '100',
        'tax_query' => array(
            array (
                'taxonomy' => 'event_category',
                'field' => 'slug',
                'terms' => $calendar->slug,
            )               
        ),
        'meta_key' => 'event-date',
        'orderby' => 'meta_value',
        'order' => 'ASC'
    );   
    
    $loop = new WP_Query( $args );
    
?>

<h2><?php echo __( 'Kalendārs', 'wp-bootstrap-starter' ); ?></h2>

<div class="col event-calendar">

    <?php while ( $loop->have_posts() ) : $loop->the_post();

        get_template_part( 'templates/events/event-listing' );

    endwhile; ?>

</div>
<?php
