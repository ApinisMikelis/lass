
<?php
global $post;
$categories = wp_get_post_categories($post->ID, array( 'fields' => 'all' ));

if(!empty($categories)) : ?>

    <div class="post-categories">

        <?php foreach ($categories as $cat) : $cat_link = get_term_link($cat->term_id); ?>

            <a class="category" href="<?php echo $cat_link; ?>"><?php echo $cat->name; ?></a>

        <?php endforeach; ?>

    </div>

<?php endif;
