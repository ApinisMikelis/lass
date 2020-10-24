<div id="search-bar" class="collapse">

    <div class="col">
        
        <form role="search" method="get" class="search-form col" action="<?php echo esc_url( home_url( '/' ) ); ?>">
        
            <label class="row">

                <input
                type="search"
                class="search-field form-control"
                placeholder="<?php echo esc_attr_x( 'Meklēt &hellip;', 'placeholder', 'wp-bootstrap-starter' ); ?>"
                value="<?php echo esc_attr( get_search_query() ); ?>"
                name="s"
                title="<?php _ex( 'Search for:', 'label', 'wp-bootstrap-starter' ); ?>">

            </label>
        
            <input
            type="submit"
            class="row search-submit btn btn-default icon-search"
            value="<?php echo esc_attr_x( 'Meklēt', 'submit button', 'wp-bootstrap-starter' ); ?>">
        
        </form>

    </div>

</div>
