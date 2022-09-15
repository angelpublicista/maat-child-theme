<?php
/**
 * The template for displaying archive pages.
 *
 * @package HelloElementor
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<main id="content" class="site-main maat-blog-main" role="main">
    <?php echo do_shortcode('[maat_heading_blog title="'.get_the_archive_title().'"]'); ?>

    <div class="maat-container">
        <div class="page-content">
            <div class="maat-grid-blog-search">
                <input type="search" name="" id="" placeholder="Ingresa tu busqueda">
                <button type="submit"><i class="fa-sharp fa-solid fa-magnifying-glass"></i></button>
            </div>
            <div class="maat-grid-blog-filter">
                <div class="maat-grid-blog-filter__view">
                <?php
                    global $wp_query;
                    $pagenum = $wp_query->query_vars['paged'] < 1 ? 1 : $wp_query->query_vars['paged'];
                    $first = ( ( $pagenum - 1 ) * $wp_query->query_vars['posts_per_page'] ) + 1;
                    $last = $first + $wp_query->post_count - 1;
                    $text_number_posts = "Mostrando <b> $first - $last </b> de <b>$wp_query->found_posts</b>";
                ?>
                    <span><?php echo $text_number_posts ?></span>
                </div>
                <div class="maat-grid-blog-filter__filter">
                    <span>Ordenar por</span>
                    <select name="select">
                        <option value="value1" selected >Más popular</option>
                        <option value="value2">Value 2</option>
                        <option value="value3">Value 3</option>
                    </select>
                </div>
            </div>
            <div class="maat-divider">
                <hr class="maat-grid-blog__divider">
            </div>
            <div class="maat-grid-blog-posts">
                <?php
                while ( have_posts() ) {
                    the_post();
                    $post_link = get_permalink();
                    $post_date = get_the_date();
                    $post_author_fn = get_the_author_firstname();
                    $post_author_ln = get_the_author_lastname();
                    $post_author_full = $post_author_fn . " " . $post_author_ln;
                    $post_cats = get_the_category();

                    ?>
                    <article class="maat-grid-blog-posts__row">
                        <div class="maat-grid-blog-posts__col">
                            <?php 
                                if(!get_the_post_thumbnail()){
                                    echo "<img style='border: 1px solid #ccc;' src='".get_stylesheet_directory_uri()."/assets/img/photo-not-available.jpg'>";
                                }
                            
                                the_post_thumbnail('full', array('class' => 'maat-grid-blog-posts__col__img'))
                            ?>
                        </div>
                        <div class="maat-grid-blog-posts__col">

                            <?php 
                             if(count($post_cats) > 0){
                                $label_cl = "";
                                foreach ($post_cats as $cat) {
                                    if($cat->slug == 'gestion-de-residuos'){
                                        $label_cl = "etiqueta-verde";
                                    }

                                    if($cat->slug == 'ingenieria-ambiental'){
                                        $label_cl = "etiqueta-azul";
                                    }

                                    if($cat->slug == 'recuperacion-y-contingencias'){
                                        $label_cl = "etiqueta-roja";
                                    }

                                    if($cat->slug == 'deconstruccion-sostenible'){
                                        $label_cl = "etiqueta-gris";
                                    }

                                    ?>
                                    <a class="maat-link-cat" href="<?php echo get_category_link($cat->cat_ID);?>">
                                        <span class="maat-grid-blog-posts__col__etiqueta <?php echo $label_cl ?>"><?php echo $cat->name ?></span>
                                    </a>
                                    
                                    <?php
                                }
                             }
                            ?>
                            
                            <a href="<?php the_permalink(); ?>" class="maat-grid-blog-posts__col__title-link">
                                <h2 class="maat-grid-blog-posts__col__title"><?php the_title(); ?></h2>
                            </a>
                            
                            <div class="maat-grid-blog-posts__col__info">
                                <span class="maat-grid-blog-posts__col__info__date">
                                    <i class="fa-solid fa-calendar-days"></i>
                                    <p><?php echo $post_date; ?></p>
                                </span>
                                <span class="maat-grid-blog-posts__col__info__author">
                                    <i class="fa-regular fa-user"></i>
                                    <p>Por: <?php echo $post_author_full ?></p>
                                </span>
                            </div>
                            <hr class="maat-grid-blog-posts__col__divider">
                            <div class="maat-grid-blog-posts__col__desc">
                               <?php the_excerpt(); ?>
                            </div>
                            <a href="<?php the_permalink(); ?>" class="maat-grid-blog-posts__col__link">
                                LEER MÁS
                            </a>
                        </div>
                    </article>
                <?php } ?>
            </div>
           
        </div>

        <div class="maat-blog-pagination">
            <a href="#">
                <span class="arrows">
                    <i class="fa-solid fa-angle-left"></i>
                </span>
            </a>
            <p class="maat-blog-pagination__number">
                <a href="">1</a>
                <a href="">2</a>
                <a href="">3</a>
            </p>
            <a href="#">
                <span class="arrows">
                    <i class="fa-solid fa-angle-right"></i>
                </span>
            </a>
        </div>

        <?php wp_link_pages(); ?>

        <?php
        global $wp_query;
        if ( $wp_query->max_num_pages > 1 ) :
            ?>
            <nav class="pagination" role="navigation">
                <?php /* Translators: HTML arrow */ ?>
                <div class="nav-previous"><?php next_posts_link( sprintf( __( '%s older', 'hello-elementor' ), '<span class="meta-nav">&larr;</span>' ) ); ?></div>
                <?php /* Translators: HTML arrow */ ?>
                <div class="nav-next"><?php previous_posts_link( sprintf( __( 'newer %s', 'hello-elementor' ), '<span class="meta-nav">&rarr;</span>' ) ); ?></div>
            </nav>
        <?php endif; ?>
        
    </div>
	
</main>
