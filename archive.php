<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

get_header();
get_sidebar();
?>

	<section id="primary" class="content-area col-sm-12 col-lg-9">
		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title archive-title">
					<?php the_archive_title(); ?>
				</h1>
			</header>

			<?php

			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main>

		<?php if (  $wp_query->max_num_pages > 1 ) : ?>

			<a class="load-more btn btn-outline-primary">
				<i class="fas fa-arrow-down"></i>
				<?php echo __('Ielādēt vairāk', 'audiologopedi'); ?>
			</a>

		<?php endif; ?>

	</section>

<?php
get_footer();
