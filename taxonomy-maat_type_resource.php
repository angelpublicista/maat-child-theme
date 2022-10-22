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
<main id="content" class="site-main maat-blog-main" role="main">
    <?php $archive_title = get_the_archive_title();
    ?>

    <?php echo do_shortcode('[maat_heading_blog title="'.$archive_title.'"]'); ?>

    <div class="maat-container">
        <div class="page-content">
            <div class="maat-rec-title">
                <?php echo do_shortcode('[maat_title text="Categorías"]'); ?>
            </div>

            <section id="maat-recursos-cat">
                <?php echo do_shortcode( '[maat_grid_tipos_recursos]'); ?>
            </section>
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
            <div class="maat-grid-tipo-recursos">
                <?php
                while ( have_posts() ) {
                    the_post();
                    $types = get_the_terms( $post->ID, 'maat_type_resource');
                    ?>
                    <div class="maat-recursos-recientes__card">
                        <div class="maat-recursos-recientes__card__top">
                            <?php the_post_thumbnail( 'full', array('class' => 'maat-recursos-recientes__card__cover', 'alt' => get_the_title() ) ); ?>
                            <a href="<?php the_permalink()?>" class="maat-recursos-recientes__card__caption">
                                <?php 
                                    foreach ($types as $type) {
                                        $icon = get_field('icono', 'maat_type_resource' . '_' . $type->term_id);
                                        
                                        if($icon){
                                            $iconUrl = $icon['url'];
                                            echo '<img src="'.$iconUrl.'" alt="" class="maat-recursos-recientes__card__caption__icon">';
                                        }
                                    }
                                ?>
                                
                            </a>
                        </div>
                        <div class="maat-recursos-recientes__card__bottom">
                            <a href="<?php the_permalink()?>" class="maat-recursos-recientes__card__link">
                                <h3 class="maat-recursos-recientes__card__title"><?php the_title()?></h3>
                            </a>
                            <div class="maat-recursos-recientes__card__excerpt"><?php the_excerpt()?></div>
                        </div>
                    </div>
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

    <section class="maat-recusros-search-section">
        <p class="maat-recusros-search-section__leyend">¿Buscas algo?</p>
        <div class="maat-grid-blog-search">
            <?php get_search_form(); ?>
        </div>
    </section>
</main>
<?php
get_footer();