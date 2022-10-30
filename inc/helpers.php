<?php

/**
 * Numeric pagination via WP core function paginate_links().
 * @link http://codex.wordpress.org/Function_Reference/paginate_links
 *
 * @param array $args
 *
 * @return string HTML for numneric pagination
 */
function my_pagination( $args = array() ) {
    global $wp_query;
    // var_dump($args['query']);
    $output = '';

    if ( $args['query']->max_num_pages <= 1 ) {
        return;
    }

    $pagination_args = array(
        'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
        'total'        => $args['query']->max_num_pages,
        'current'      => max( 1, get_query_var( 'paged' ) ),
        'format'       => '?paged=%#%',
        'show_all'     => false,
        'type'         => 'plain',
        'end_size'     => 2,
        'mid_size'     => 1,
        'prev_next'    => true,
        'prev_text'    => __( '<span class="arrows"><i class="fa-solid fa-angle-left"></i></span>', 'textdomain' ),
        'next_text'    => __( '<span class="arrows"><i class="fa-solid fa-angle-right"></i></span>', 'textdomain' ),
        'add_args'     => false,
        'add_fragment' => '',

        // Custom arguments not part of WP core:
        'show_page_position' => true, // Optionally allows the "Page X of XX" HTML to be displayed.
    );

    $pagination_args = apply_filters( 'my_pagination_args', array_merge( $pagination_args, $args ), $pagination_args );

    $output .= paginate_links( $pagination_args );

    // Optionally, show Page X of XX.
    if ( true == $pagination_args['show_page_position'] && $args['query']->max_num_pages > 0 ) {
        $output .= '<span class="page-of-pages" style="display: block; font-family: Nexa Regular, Sans-serif; width: 100%; text-align: center; margin-top: 2rem">' .
                                    sprintf( __( 'Página %1s de %2s', 'text-domain' ), $pagination_args['current'], $args['query']->max_num_pages ) .
                '</span>';
    }

    return $output;
}