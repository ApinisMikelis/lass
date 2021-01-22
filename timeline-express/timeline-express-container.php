<?php

if ( ! defined( 'ABSPATH' ) ) {

	exit;

}

global $post;

$timeline_express_options = timeline_express_get_options();
$read_more_params = array('post-id' => $post->ID);
$end_date = get_field('event-end-date', $post->ID);

?>

<div class="<?php echo esc_attr( apply_filters( 'timeline-express-announcement-container-class', 'cd-timeline-block', $post->ID ) ); ?>">

	<?php echo wp_kses_post( timeline_express_get_announcement_icon_markup( $post->ID ) ); ?>

	<div class="cd-timeline-content">

		<?php do_action( 'timeline-express-container-top' ); ?>

		<div class="timeline-container-image">
			<?php

			do_action( 'timeline-express-before-image' );

			echo wp_kses_post( timeline_express_get_announcement_image( $post->ID, 'full' ) );

			do_action( 'timeline-express-after-image' );

			?>
		</div>

		<div class="cd-timeline-title-container">

			<?php if ( 1 === (int) $timeline_express_options['date-visibility'] ) : ?>
				<p class="timeline-date">
					<?php
					do_action( 'timeline-express-before-date' );

					echo wp_kses_post( timeline_express_get_announcement_date( $post->ID ) );

					echo $end_date ? ' - ' . $end_date : '';

					do_action( 'timeline-express-after-date' );
					?>
				</p>
			<?php endif; ?>

			<?php do_action( 'timeline-express-before-title' ); ?>

			<h2 class="cd-timeline-item-title">
				<?php the_title(); ?>
			</h2>

			<?php do_action( 'timeline-express-after-title' ); ?>

			<?php get_template_part( 'timeline-express/timeline-express-event-link', '', $read_more_params); ?>

			<?php do_action( 'timeline-express-container-bottom' ); ?>
		</div>

	</div>


</div>
