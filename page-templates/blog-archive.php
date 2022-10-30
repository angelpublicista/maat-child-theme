<?php 
/* Template Name: Blog Archive */ 
?>

<?php
/**
 * The template for displaying archive pages.
 *
 * @package HelloElementor
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
get_header();
?>
<main id="content" class="site-main maat-blog-main maat-blog__page-template" role="main">
    <?php $archive_title = get_the_archive_title();
    ?>

    <?php 
        $bg = get_the_post_thumbnail_url();
        echo do_shortcode('[maat_heading_blog title="'.get_the_title().'" background="'.$bg.'"]');
    ?>

    <div class="maat-container">
        <div class="page-content">
            <div class="maat-grid-blog-search">
                <?php get_search_form(); ?>
            </div>

            <!-- START QUERY -->
            <?php 
                $args = array(
                    'post_type' => 'post',
                    'orderby' => $_GET['orderby'],
                    'paged' => get_query_var( 'paged' )
                );

                $query = new WP_Query($args);
            if($query->have_posts()): ?>
            <div class="maat-grid-blog-filter">
                <div class="maat-grid-blog-filter__view">
                <!-- SHOW X-XX OF XX  -->
                <?php
                    $pagenum = $query->query_vars['paged'] < 1 ? 1 : $query->query_vars['paged'];
                    $first = ( ( $pagenum - 1 ) * $query->query_vars['posts_per_page'] ) + 1;
                    $last = $first + $query->post_count - 1;
                    $text_number_posts = "Mostrando <b> $first - $last </b> de <b>$query->found_posts</b>";
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
                while ( $query->have_posts() ) {
                    $query->the_post();
                    $post_link = get_permalink();
                    $post_date = get_the_date();
                    $post_author_fn = get_the_author_meta('first_name');
                    $post_author_ln = get_the_author_meta('last_name');
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
            <?php 
            wp_reset_query();
            endif; ?>
           
        </div>

        <div class="maat-blog-pagination">
            <?php
                echo my_pagination(array("query" => $query));
            ?>
        </div>
    </div>
	
</main>

<?php
get_footer();
