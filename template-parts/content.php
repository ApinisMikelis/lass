<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

?>

<article class="card" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="post-thumbnail">

		<?php the_post_thumbnail(); ?>
	<?php get_template_part('templates/blog/post-categories'); ?>
	</div>
	

	<div class="card-body">

		<header class="entry-header">
			<?php
			if ( is_single() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;

			if ( 'post' === get_post_type() ) : ?>
			<div class="entry-meta">
				<?php wp_bootstrap_starter_posted_on(); ?>
			</div>
			<?php
			endif; ?>
		</header>

		<div class="entry-content">
			<?php if ( is_single() ) : the_content(); else : the_excerpt(); endif;

				if ( !is_single() ) { ?>
					<a class="btn btn-outline-primary read-more" href="<?php the_permalink() ?>">
						<?php esc_html_e( 'Turpināt lasīt', 'wp-bootstrap-starter' ); ?>
					</a>
				<?php };

				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wp-bootstrap-starter' ),
					'after'  => '</div>',
				) );
			?>
		</div>

	</div>

</article>
