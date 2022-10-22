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

        <section>
            <div class="maat-recursos-recientes slick-theme">
                <div class="item">
                    <div class="maat-recursos-recientes__card">
                        <div class="maat-recursos-recientes__card__top">
                            <img src="http://maat.local/wp-content/uploads/2022/08/Frame-1-1-1.png" alt="" class="maat-recursos-recientes__card__cover">
                            <a href="#" class="maat-recursos-recientes__card__caption">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/play-circle-line.svg" alt="" class="maat-recursos-recientes__card__caption__icon">
                            </a>
                        </div>
                        <div class="maat-recursos-recientes__card__bottom">
                            <a href="#" class="maat-recursos-recientes__card__link">
                                <h3 class="maat-recursos-recientes__card__title">Lorem ipsum dolor sit amet.</h3>
                            </a>
                            <p class="maat-recursos-recientes__card__excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur repudiandae nemo dolorum non delectus quo, assumenda, voluptatum officia similique architecto incidunt voluptas, ipsum soluta explicabo consectetur. Exercitationem, expedita? Perspiciatis, consectetur.</p>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="maat-recursos-recientes__card">
                        <div class="maat-recursos-recientes__card__top">
                            <img src="http://maat.local/wp-content/uploads/2022/08/Frame-1-1-1.png" alt="" class="maat-recursos-recientes__card__cover">
                            <a href="#" class="maat-recursos-recientes__card__caption">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/play-circle-line.svg" alt="" class="maat-recursos-recientes__card__caption__icon">
                            </a>
                        </div>
                        <div class="maat-recursos-recientes__card__bottom">
                            <a href="#" class="maat-recursos-recientes__card__link">
                                <h3 class="maat-recursos-recientes__card__title">Lorem ipsum dolor sit amet.</h3>
                            </a>
                            <p class="maat-recursos-recientes__card__excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur repudiandae nemo dolorum non delectus quo, assumenda, voluptatum officia similique architecto incidunt voluptas, ipsum soluta explicabo consectetur. Exercitationem, expedita? Perspiciatis, consectetur.</p>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="maat-recursos-recientes__card">
                        <div class="maat-recursos-recientes__card__top">
                            <img src="http://maat.local/wp-content/uploads/2022/08/Frame-1-1-1.png" alt="" class="maat-recursos-recientes__card__cover">
                            <a href="#" class="maat-recursos-recientes__card__caption">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/play-circle-line.svg" alt="" class="maat-recursos-recientes__card__caption__icon">
                            </a>
                        </div>
                        <div class="maat-recursos-recientes__card__bottom">
                            <a href="#" class="maat-recursos-recientes__card__link">
                                <h3 class="maat-recursos-recientes__card__title">Lorem ipsum dolor sit amet.</h3>
                            </a>
                            <p class="maat-recursos-recientes__card__excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur repudiandae nemo dolorum non delectus quo, assumenda, voluptatum officia similique architecto incidunt voluptas, ipsum soluta explicabo consectetur. Exercitationem, expedita? Perspiciatis, consectetur.</p>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="maat-recursos-recientes__card">
                        <div class="maat-recursos-recientes__card__top">
                            <img src="http://maat.local/wp-content/uploads/2022/08/Frame-1-1-1.png" alt="" class="maat-recursos-recientes__card__cover">
                            <a href="#" class="maat-recursos-recientes__card__caption">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/play-circle-line.svg" alt="" class="maat-recursos-recientes__card__caption__icon">
                            </a>
                        </div>
                        <div class="maat-recursos-recientes__card__bottom">
                            <a href="#" class="maat-recursos-recientes__card__link">
                                <h3 class="maat-recursos-recientes__card__title">Lorem ipsum dolor sit amet.</h3>
                            </a>
                            <p class="maat-recursos-recientes__card__excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur repudiandae nemo dolorum non delectus quo, assumenda, voluptatum officia similique architecto incidunt voluptas, ipsum soluta explicabo consectetur. Exercitationem, expedita? Perspiciatis, consectetur.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
	
</main>
<?php
get_footer();
