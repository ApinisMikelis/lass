<?php
/**
 * Template part for displaying events within calendar
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

$location = get_field('location');
$event_date = get_field('event-date');
$event_time = get_field('event-time');
$results_url = get_field('results');
$slug = $post->post_name;

?>

<div class="row event-listing">

    <div class="col-12">
    
        <div class="row event-heading">

            <div class="col-2">
                <?php echo $event_date; ?>
            </div>

            <div class="col-4 event-title">
                
                <a data-toggle="collapse" href="#<?php echo $slug; ?>"
                    role="button" aria-expanded="false" aria-controls="collapse">
                    <?php the_title(); ?> <i class="fas fa-info-circle"></i>
                </a>

            </div>

            <div class="col-2">

                <?php if ($results_url) : ?>

                    <i class="fas fa-award"></i>

                    <a href="<?php echo $results_url; ?>" target="_blank">
                        <?php echo __( 'Rezultāti', 'wp-bootstrap-starter' ); ?>
                    </a>

                <?php endif; ?>
                
            </div>

            <div class="col-4">

                <i class="fas fa-map-marker-alt"></i>

                <?php if ($location) :
                
                    echo $location; 
                
                endif; ?>

            </div>

        </div>

        <div class="row event-details bg-light collapse" id="<?php echo $slug; ?>">

            <div class="col-12">
            
                <?php the_content(); ?>

            </div>

            <a class="btn btn-outline-primary close-event-btn" data-toggle="collapse" href="#<?php echo $slug; ?>"
                role="button" aria-expanded="false" aria-controls="collapse">
                    <?php esc_html_e( 'Aizvērt', 'wp-bootstrap-starter' ); ?>
                    &nbsp;<i class="fas fa-arrow-up"></i>
            </a>

        </div>

    </div>

</div>

<?php
