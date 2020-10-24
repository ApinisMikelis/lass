<?php
/**
 * Template part for displaying page content in event.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">



            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

            <div class="row">

                <div class="col-sm-12 col-lg-6 order-md-2 banner">

                    <div class="post-thumbnail">
                        <a href="<?php echo get_the_post_thumbnail_url(); ?>">
                            <?php the_post_thumbnail(); ?>
                        </a>
                    </div>

                </div>

                <div class="col-sm-12 col-lg-6 order-md-1 description">
                    <?php the_content(); ?>
                </div>

            </div>

            <div class="row">

                <div class="col-12">

                    <?php get_template_part('templates/events/event-calendar'); ?>

                </div>

            </div>

            <?php get_template_part('templates/sharing-widget'); ?>

        

    </div>

</article>
<?php
