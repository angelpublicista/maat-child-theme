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

    <?php 
        $bg = get_stylesheet_directory_uri() . "/assets/img/bg-recursos.png";
        echo do_shortcode('[maat_heading_blog title="'.$archive_title.'" background="'.$bg.'" style="style-2"]'); 
    ?>

    <div class="maat-container">
        <div class="maat-rec-title">
            <?php echo do_shortcode('[maat_title text="Categorías"]'); ?>
        </div>

        <section id="maat-recursos-cat">
            <?php echo do_shortcode( '[maat_grid_tipos_recursos]'); ?>
        </section>

        <div class="maat-rec-title">
            <?php echo do_shortcode('[maat_title text="Lo más reciente"]'); ?>
        </div>

        <section>
            <div class="maat-recursos-recientes slick-theme">
                <?php while(have_posts()): the_post();
                 $types = get_the_terms( $post->ID, 'maat_type_resource');
                ?>
                <div class="item">
                    <div class="maat-recursos-recientes__card">
                        <div class="maat-recursos-recientes__card__top">
                            <?php the_post_thumbnail( 'full', array('class' => 'maat-recursos-recientes__card__cover', 'alt' => get_the_title() ) ); ?>
                            <a href="<?php the_permalink()?>" class="maat-recursos-recientes__card__caption">
                                <?php 
                                    if($types){
                                        foreach ($types as $type) {
                                            $icon = get_field('icono', 'maat_type_resource' . '_' . $type->term_id);
                                            
                                            if($icon){
                                                $iconUrl = $icon['url'];
                                                echo '<img src="'.$iconUrl.'" alt="" class="maat-recursos-recientes__card__caption__icon">';
                                            }
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
                </div>
                <?php endwhile; ?>
            </div>
        </section>
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
