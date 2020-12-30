<?php

function register_custom_widgets() {
    register_widget( 'archive_widget' );
}
    
add_action( 'widgets_init', 'register_custom_widgets' );

class archive_widget extends WP_Widget {

    function __construct() {
        parent::__construct(
            'archive_widget',
            __('LASS rakstu arhīvs', 'archive_widget'),
            array ( 'description' => __( 'Displays post archive', 'archive_widget' ) )
        );
    }

    public function widget( $args, $instance ) {

        $archive_args = array(
            'limit'           => $instance['limit'],
            'before'          => '<li class="nav-item">',
            'after'           => '</li>',
            'echo'            => 0,
        );

        $template_args = array(
            'instance' => $instance,
            'widget_args' => $args,
            'archive_args' => $archive_args
        );
        
        get_template_part('template-parts/widgets/archive-widget', '', $template_args);

    }

    public function form( $instance ) {

        if ( isset( $instance[ 'title' ] ) )
            $title = $instance[ 'title' ];
        else
            $title = __( 'Arhīvs', 'archive_widget' );

        if ( isset( $instance[ 'limit' ] ) )
            $limit = $instance[ 'limit' ];
        else
            $limit = __( 12, 'archive_widget' );
        ?>
        
        <p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
        </p>

        <p>
            <label for="<?php echo $this->get_field_id( 'limit' ); ?>"><?php _e( 'Limit:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'limit' ); ?>" name="<?php echo $this->get_field_name( 'limit' ); ?>" type="text" value="<?php echo esc_attr( $limit ); ?>" />
        </p>
        
        <?php
        
    }

    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        $instance['limit'] = ( ! empty( $new_instance['limit'] ) ) ? strip_tags( $new_instance['limit'] ) : '';
        return $instance;
    }

}