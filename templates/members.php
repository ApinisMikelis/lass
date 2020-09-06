<?php
/**
 * Template Name: Biedri
 */

get_header();
get_sidebar();
?>

    <section id="primary" class="content-area col-sm-12 col-lg-9">

        <?php get_template_part('templates/breadcrumbs'); ?>
        
        <main id="main" class="site-main" role="main">

            <?php get_template_part( 'template-parts/content', 'page' ); ?>

            <h2><?php esc_html_e( 'Juridiskie biedri', 'wp-bootstrap-starter' ); ?></h2>

            <div class="card-deck">

                <?php get_template_part('templates/members/member-listing', null, array(
                    "member_category" => "juridiskie-biedri"
                )); ?>

            </div>

            <h2><?php esc_html_e( 'Asociatīvie biedri', 'wp-bootstrap-starter' ); ?></h2>

            <div class="card-deck">

                <?php get_template_part('templates/members/member-listing', null, array(
                    "member_category" => "asociativie-biedri"
                )); ?>

            </div>

        </main>

    </section>

<?php get_footer();
