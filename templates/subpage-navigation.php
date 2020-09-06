<?php

$post_id = $post->ID;
$post_parent_id = $post->post_parent;
$has_parent = $post_parent_id > 0;

$args = array(
    'post_type'      => 'page',
    'posts_per_page' => -1,
    'post_parent'    => $has_parent ? $post_parent_id : $post->ID,
    'order'          => 'ASC',
    'orderby'        => 'menu_order'
 );

$query = new WP_Query( $args );

if ( $query->have_posts() ) : ?>


    <nav id="subpage-navigation">
    
        <div class="container">
    
            <ul class="nav justify-content-end">

                <?php while ( $query->have_posts() ) : $query->the_post(); ?>

                    <li class="nav-item">
                        <a
                        class="nav-link <?php echo $post_id == get_the_id() ? 'active' : ''; ?>"
                        href="<?php the_permalink(); ?>"
                        title="<?php the_title(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </li>

                <?php endwhile; ?>

            </ul>

        </div>

    </nav>

<?php endif; wp_reset_postdata(); ?>
