<?php
/**
 * Template part for displaying galleries
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

?>

<div class="col-md-6 col-xl-4">

    <article class="card" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <div class="post-thumbnail">
        <?php

            $images = acf_photo_gallery('gallery', $post->ID);
            $gallery_url = '#';
            $should_link_date = false;

            if( count($images) ):

                $i = 0;
                $group = $post->post_name;
                $gallery_url = $images[0]['full_image_url'];

                foreach($images as $image): $full_image_url= $image['full_image_url']; ?>

                <a class="fancybox" rel="<?php echo $group; ?>" href="<?php echo $full_image_url; ?>">

                    <?php if ($i == 0) : ?>

                        <img src="<?php echo $full_image_url; ?>" />

                    <?php endif; ?>

                </a>

            <?php $i++; endforeach; endif; ?>

            <?php get_template_part('templates/blog/post-categories'); ?>
        </div>
        

        <div class="card-body">

            <header class="entry-header">
                <?php the_title( '<h2 class="entry-title">','</h2>' ); ?>
                
                <div class="entry-meta">

                    <?php wp_bootstrap_starter_posted_on($should_link_date); ?>

                    <div class="float-right image-count">
                        <i class="fas fa-image"></i><?php echo count($images); ?>
                    </div>

                </div>
                
            </header>

            <div class="entry-content">

                <?php wp_link_pages(); ?>

            </div>

        </div>

    </article>

</div>

<?php
