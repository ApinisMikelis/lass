<?php

$post_id = $args['post-id'];
$url_type = get_field('url-type', $post_id);
$url = $url_type == 'page' ? get_field('inner-url', $post_id) : get_field('outer-url', $post_id);

$target = $url_type == 'page' ? '_self' : '_blank';

?>

<a target="<?php echo $target; ?>" class="btn btn-outline-primary d-block" href="<?php echo $url; ?>">
    <?php echo __('Vairāk par pasākumu', 'wp-bootstrap-starter'); ?>
</a>