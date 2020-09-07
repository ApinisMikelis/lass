<?php
/**
 * Template part for supporters
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

?>
<div class="col-sm-6 col-md-4 col-lg">

    <div class="row justify-content-center supporter">

        <a target="_blank" href="<?php echo get_field('supporter_url'); ?>" >

            <?php the_post_thumbnail("post-thumbnail", ["alt" =>  get_the_title()]); ?>

        </a>

    </div>

</div>

<?php
