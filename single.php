<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WP_Bootstrap_Starter
 */

get_header();
get_sidebar();
?>

	<section id="primary" class="content-area col-sm-12 col-lg-9">
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_format() ); ?>

			<h3><?php esc_html_e( 'Citi raksti', 'wp-bootstrap-starter' ); ?></h3>

			<?php the_post_navigation();

		endwhile;
		?>

		</main>
	</section>

<?php

get_footer();
