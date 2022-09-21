<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
    <span class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ) ?></span>
    <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Ingresa tu búsqueda', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
    <button type="submit" class="search-submit"><i class="fa-sharp fa-solid fa-magnifying-glass"></i></button>
</form>