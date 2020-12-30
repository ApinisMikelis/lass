<section class="widget widget_archive">
<?php

$instance = $args['instance'];
$widget_args = $args['widget_args'];
$archive_args = $args['archive_args'];
$archive = wp_get_archives($archive_args);

$title = apply_filters( 'widget_title', $instance['title'] );

if ( ! empty ( $title ) )
    echo $widget_args['before_title'] . $title . $widget_args['after_title'];
    
?>

    <ul class="nav flex-column">
        <?php echo $archive; ?>
    </ul>

</section>