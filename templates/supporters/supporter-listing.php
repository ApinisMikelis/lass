<?php

$args = array(  
    'post_type' => 'supporter',
    'posts_per_page' => '-1',
    'order' => 'DESC'
);   

$loop = new WP_Query( $args ); ?>

<div class="row">

    <?php while ( $loop->have_posts() ) : $loop->the_post();

        get_template_part( 'template-parts/content', "supporter");

    endwhile;

    wp_reset_postdata(); ?>

</div>

<?php
