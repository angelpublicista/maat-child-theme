<?php
    get_header();
    if ( have_posts() ) : 
        $archive_title ='Resultados para: <span>' . get_search_query() . '</span>' ;
        echo do_shortcode('[maat_heading_blog title="'.$archive_title.'"]')
    ?>
<?php
    echo "<div class='maat-search-results maat-container'>";
    while ( have_posts() ) : the_post();
        get_template_part( 'template-parts/content', 'search' );
    endwhile;
        the_posts_navigation();
    else:
        get_template_part( 'template-parts/content', 'none' );
    endif; 
    echo "</div>";
    get_footer();
?>