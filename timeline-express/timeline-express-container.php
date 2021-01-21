<?php

if ( ! defined( 'ABSPATH' ) ) {

	exit;

}

global $post;

$timeline_express_options = timeline_express_get_options();
$read_more_url = get_field('description-url', $post->ID);

?>

<div class="<?php echo esc_attr( apply_filters( 'timeline-express-announcement-container-class', 'cd-timeline-block', $post->ID ) ); ?>">

	<?php echo wp_kses_post( timeline_express_get_announcement_icon_markup( $post->ID ) ); ?>



	<div class="cd-timeline-content">

		<?php do_action( 'timeline-express-container-top' ); ?>

		<div class="timeline-container-image">
			<a href="<?php echo $read_more_url; ?>">
				<?php

				do_action( 'timeline-express-before-image' );

				echo wp_kses_post( timeline_express_get_announcement_image( $post->ID, 'full' ) );

				do_action( 'timeline-express-after-image' );

				?>
			</a>

		</div>

		<div class="cd-timeline-title-container">

			<?php if ( 1 === (int) $timeline_express_options['date-visibility'] ) : ?>
				<p class="timeline-date">
					<?php
					do_action( 'timeline-express-before-date' );

					echo wp_kses_post( timeline_express_get_announcement_date( $post->ID ) );

					do_action( 'timeline-express-after-date' );
					?>
				</p>
			<?php endif; ?>

			<?php do_action( 'timeline-express-before-title' ); ?>

			<h2 class="cd-timeline-item-title">
				<?php the_title(); ?>
			</h2>

			<?php do_action( 'timeline-express-after-title' ); ?>

			<a class="btn btn-outline-primary d-block" href="<?php echo $read_more_url; ?>">
				<?php echo __('Vairāk par pasākumu', 'wp-bootstrap-starter'); ?>
			</a>

			<?php do_action( 'timeline-express-container-bottom' ); ?>
		</div>

		

	</div>


</div>
