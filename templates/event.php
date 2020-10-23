<?php
/**
 * Template Name: Pasākums
 */

get_header();
get_sidebar();
?>

    <section id="primary" class="content-area col-sm-12 col-lg-9">

        <?php get_template_part('templates/breadcrumbs'); ?>

        <main id="main" class="site-main" role="main">

            <?php while ( have_posts() ) : the_post();

                get_template_part( 'template-parts/content', 'event' );

            endwhile; ?>

        </main>

    </section>

<?php
get_footer();
