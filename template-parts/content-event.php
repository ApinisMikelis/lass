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

    <header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header>

	<div class="entry-content">

        <div class="container">

            <div class="row">

                <div class="col-sm-12 col-lg-6">
                    <?php the_content(); ?>
                </div>

                <div class="col-sm-12 col-lg-6">

                    <div class="post-thumbnail">
                        <a href="<?php echo the_permalink(); ?>">
                            <?php the_post_thumbnail(); ?>
                        </a>
                    </div>

                </div>

            </div>

            <div class="row">

                <div class="col-12">

                    <?php get_template_part('templates/events/event-calendar'); ?>

                </div>

            </div>

        </div>

    </div>

</article>
<?php
