<?php

if ( is_active_sidebar( 'footer-1' ) || is_active_sidebar( 'footer-2' ) || is_active_sidebar( 'footer-3' ) || is_active_sidebar( 'footer-4' ) ) {?>

    <div id="footer-widget" class="row m-0 <?php if(!is_theme_preset_active()){ echo 'bg-light'; } ?>">

        <div class="container">

            <div class="row">

                <?php if ( is_active_sidebar( 'footer-1' )) : ?>

                    <div class="col-12 col-md-6 col-lg-3 order-1 order-md-1 order-lg-1">
                        <?php dynamic_sidebar( 'footer-1' ); ?>
                    </div>

                <?php endif; ?>

                <?php if ( is_active_sidebar( 'footer-2' )) : ?>

                    <div class="col-12 col-md-6 col-lg-3 order-2 order-md-3 order-lg-2">
                        <?php dynamic_sidebar( 'footer-2' ); ?>
                    </div>

                <?php endif; ?>

                <?php if ( is_active_sidebar( 'footer-3' )) : ?>

                    <div class="col-12 col-md-6 col-lg-3 order-3 order-md-4 order-lg-3">
                        <?php dynamic_sidebar( 'footer-3' ); ?>
                    </div>

                <?php endif; ?>

                <?php if ( is_active_sidebar( 'footer-4' )) : ?>

                    <div class="col-12 col-md-6 col-lg-3 order-4 order-md-2 order-lg-4">
                        <?php dynamic_sidebar( 'footer-4' ); ?>
                    </div>

                <?php endif; ?>

            </div>

        </div>

    </div>

<?php }