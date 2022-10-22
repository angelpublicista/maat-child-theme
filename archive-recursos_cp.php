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
        echo do_shortcode('[maat_heading_blog title="'.$archive_title.'" background="'.$bg.'"]'); 
    ?>

    <div class="maat-container">
        <div class="maat-rec-title">
            <?php echo do_shortcode('[maat_title text="Categorías"]'); ?>
        </div>

        <section>
            <div class="maat-grid-recursos-cat">
                <div class="maat-card-recursos-cat">
                    <img src="http://maat.local/wp-content/uploads/2022/08/Frame-1-1-1.png" alt="" class="maat-card-recursos-cat__cover">
                    <a href="#" class="maat-card-recursos-cat__caption">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/play-circle-line.svg" alt="" class="maat-card-recursos-cat__caption__icon">
                        <h4 class="maat-card-recursos-cat__caption__title">Tutoriales</h4>
                    </a>
                </div>

                <div class="maat-card-recursos-cat">
                    <img src="http://maat.local/wp-content/uploads/2022/08/Frame-1-1-1.png" alt="" class="maat-card-recursos-cat__cover">
                    <a href="#" class="maat-card-recursos-cat__caption">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/play-circle-line.svg" alt="" class="maat-card-recursos-cat__caption__icon">
                        <h4 class="maat-card-recursos-cat__caption__title">Tutoriales</h4>
                    </a>
                </div>

                <div class="maat-card-recursos-cat">
                    <img src="http://maat.local/wp-content/uploads/2022/08/Frame-1-1-1.png" alt="" class="maat-card-recursos-cat__cover">
                    <a href="#" class="maat-card-recursos-cat__caption">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/play-circle-line.svg" alt="" class="maat-card-recursos-cat__caption__icon">
                        <h4 class="maat-card-recursos-cat__caption__title">Tutoriales</h4>
                    </a>
                </div>
            </div>
        </section>

        <div class="maat-rec-title">
            <?php echo do_shortcode('[maat_title text="Lo más reciente"]'); ?>
        </div>
    </div>
	
</main>
<?php
get_footer();
