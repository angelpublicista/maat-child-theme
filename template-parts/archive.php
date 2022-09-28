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
    <?php $archive_title = get_the_archive_title();
    ?>

    <?php echo do_shortcode('[maat_heading_blog title="'.$archive_title.'"]'); ?>

    <div class="maat-container">
        <div class="page-content">
            <div class="maat-grid-blog-search">
                <?php get_search_form(); ?>
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
                <form action="" method="GET" id="maat-filter-form">
                    <div class="maat-grid-blog-filter__filter">
                        <label for="orderby" class="maat-grid-blog-filter__filter__label">Ordenar por</label>
                        <select name="orderby" id="orderby" class="maat-grid-blog-filter__filter__select">
                            <option value="" <?php echo selected($_GET['orderby'], ''); ?>>Orden por defecto</option>
                            <option value="date" <?php echo selected($_GET['orderby'], 'date'); ?>>Fecha</option>
                            <option value="title" <?php echo selected($_GET['orderby'], 'title'); ?>>Título</option>
                        </select>
                    </div>
                </form>
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
                            
                                the_post_thumbnail('full', array('class' => 'maat-grid-blog-posts__col__img', 'alt' => get_the_title()))
                            ?>
                            <div class="maat-single-blog-share__icons">
                                <a href="https://twitter.com/intent/tweet?text=<?php the_permalink() ?>" target="_blank" class="maat-single-blog-share__icons__links link-twitter">
                                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/twitter-line.svg" alt="">
                                </a>
                                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink() ?>"  target="_blank" class="maat-single-blog-share__icons__links link-facebook">
                                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/facebook-line.svg" alt="">
                                </a>
                                <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink() ?>&title=&summary=&source=" target="_blank" class="maat-single-blog-share__icons__links link-linkedin">
                                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/linkedin-line.svg" alt="">
                                </a>
                                <a href="https://api.whatsapp.com/send?text=<?php the_permalink() ?>" target="_blank" data-action="share/whatsapp/share" class="maat-single-blog-share__icons__links link-whatsapp">
                                    <i class="fa-brands fa-whatsapp"></i>
                                </a>
                                <a href="#" class="maat-single-blog-share__icons__links link-copy" data-clipboard-text="<?php the_permalink(); ?>">
                                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/links-line.svg" alt="">
                                </a>
                            </div>
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

                                    if($cat->slug == 'uncategorized'){
                                        $label_cl = "etiqueta-blanca";
                                    }

                                    ?>

                                    <a class="maat-link-cat" href="<?php echo get_category_link($cat->cat_ID);?>">
                                        <span class="maat-grid-blog-posts__col__etiqueta <?php echo $label_cl ?>"><?php echo $cat->name ?></span>
                                    </a>
                                    
                                    <?php
                                }
                             }
                            ?>
                            
                            <a href="<?php the_permalink(); ?>" class="maat-grid-blog-posts__col__title-link" href="">
                                <h2 class="maat-grid-blog-posts__col__title"><?php the_title(); ?></h2>
                            </a>
                            <div class="maat-grid-blog-posts__col__info">
                                <span class="maat-grid-blog-posts__col__info__date">
                                    <i class="fa-solid fa-calendar-days"></i>
                                    <p><?php echo $post_date; ?></p>
                                </span>

                                <?php if(strlen($post_author_full) > 1): ?>
                                <span class="maat-grid-blog-posts__col__info__author">
                                    <i class="fa-regular fa-user"></i>
                                    <p>Por: <?php echo $post_author_full ?></p>
                                </span>
                                <?php endif; ?>
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
            <?php
                the_posts_pagination( array(
                    'mid_size' => 2,
                    'prev_text' => __( '<span class="arrows"><i class="fa-solid fa-angle-left"></i></span>', 'textdomain' ),
                    'next_text' => __( '<span class="arrows"><i class="fa-solid fa-angle-right"></i></span>', 'textdomain' ),
                ) );
            
            ?>
        </div>

        <?php wp_link_pages(); ?>
        
    </div>
	
</main>
