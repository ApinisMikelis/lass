<?php if(wp_get_environment_type() == "development") : ?>

    <div class="container dev-notices">
        <div class="alert alert-primary">
            <strong>Current template:</strong> <?php get_current_template( true ); ?>
        </div>
    </div>

<?php endif; ?>