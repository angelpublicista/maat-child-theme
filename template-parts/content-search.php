<article id="post-<?php the_ID(); ?>" <?php post_class('mt-search-result'); ?>>
    <header class="entry-header">
        <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
    </header>

    <div class="entry-summary">
        <?php 
            echo substr(get_the_excerpt(), 0,150) . '...'; 
            echo ('<br><a href="' .get_permalink() . '" class="moretag">Leer más &raquo;</a>');
        ?>
    </div><!-- .entry-summary -->
</article><!-- #post-## -->