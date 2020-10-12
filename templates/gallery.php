<?php /*** Template Name: Galerija */ get_header(); ?>

    <section id="primary" class="content-area col-12">
        
        <main id="main" class="site-main" role="main">

            <?php get_template_part( 'template-parts/content', 'page' );

                $args = array(  
                    'post_type' => 'bilzu-galerija',
                    'posts_per_page' => '100',
                    'order' => 'DESC'
                );   
                
                $loop = new WP_Query( $args ); ?>

                <div class="card-deck">
                
                    <?php while ( $loop->have_posts() ) : $loop->the_post();

                        get_template_part( 'template-parts/content-gallery' );

                    endwhile; ?>

                </div>

                <?php wp_reset_postdata(); ?>

            </div>

        </main>

    </section>

<?php get_footer();
