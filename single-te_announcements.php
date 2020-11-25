<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WP_Bootstrap_Starter
 */

$timeline_page_url = get_custom_theme_option('timeline-page-url');

get_header();
get_sidebar();
?>

	<section id="primary" class="content-area col-sm-12 col-lg-9">
		<main id="main" class="site-main" role="main">

			<a href="<?php echo $timeline_page_url; ?>" class="btn btn-outline-primary back-to-calendar">
				<i class="fas fa-arrow-left"></i>
				<?php echo __( 'Atpakaļ uz kalendāru', 'wp-bootstrap-starter' ); ?>
			</a>

			<?php while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', get_post_format() );

			endwhile; ?>
		
		</main>
	</section>

<?php

get_footer();
