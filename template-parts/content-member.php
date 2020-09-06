<?php
/**
 * Template part for members
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

?>
<div class="col-md-6 col-xl-4">

    <article class="card" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <?php the_post_thumbnail("post-thumbnail", ["class" => "card-img-top"]); ?>

        <a target="_blank" href="<?php echo get_field('member_url'); ?>" class="btn btn-primary">
            <?php the_title(); ?>
        </a>

    </article>

</div>

<?php
