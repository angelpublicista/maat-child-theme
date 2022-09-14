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

    <?php echo do_shortcode('[maat_heading_blog title='.($archive_title).']'); ?>
	<?php if ( apply_filters( 'hello_elementor_page_title', true ) ) : ?>
		<header class="page-header">
			<?php
			the_archive_title( '<h1 class="entry-title">', '</h1>' );
			the_archive_description( '<p class="archive-description">', '</p>' );
			?>
		</header>
	<?php endif; ?>

    <div class="maat-container">
        <div class="page-content">
            <div class="maat-grid-blog-posts">
                <div class="maat-grid-blog-posts__row">
                    <div class="maat-grid-blog-posts__col">
                        <img class="maat-grid-blog-posts__col__img" src="https://images.pexels.com/photos/13421007/pexels-photo-13421007.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="">
                    </div>
                    <div class="maat-grid-blog-posts__col">
                        <span class="maat-grid-blog-posts__col__etiqueta etiqueta-verde">Gestión de residuos</span>
                        <h2 class="maat-grid-blog-posts__col__title">Lorem ipsum dolor sit amet,<br> consectetur adipiscing elit.</h2>
                        <div class="maat-grid-blog-posts__col__info">
                            <span class="maat-grid-blog-posts__col__info__date">
                                <i class="fa-solid fa-calendar-days"></i>
                                <p>23 agosto, 2022</p>
                            </span>
                            <span class="maat-grid-blog-posts__col__info__author">
                                <i class="fa-regular fa-user"></i>
                                <p>Por Erick Jiménez</p>
                            </span>
                        </div>
                        <hr class="maat-grid-blog-posts__col__divider">
                        <p class="maat-grid-blog-posts__col__desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Et dapibus habitant elementum, faucibus luctus quam aliquet justo. Arcu nascetur non in gravida eu porttitor. Tincidunt sed sed sapien integer. Et pulvinar nunc ullamcorper sagittis,</p>
                        <a href="#" class="maat-grid-blog-posts__col__link">
                            LEER MÁS
                        </a>
                    </div>
                </div>

                <div class="maat-grid-blog-posts__row">
                    <div class="maat-grid-blog-posts__col">
                        <img class="maat-grid-blog-posts__col__img" src="https://images.pexels.com/photos/13421007/pexels-photo-13421007.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="">
                    </div>
                    <div class="maat-grid-blog-posts__col">
                        <span class="maat-grid-blog-posts__col__etiqueta etiqueta-azul">Gestión de residuos</span>
                        <h2 class="maat-grid-blog-posts__col__title">Lorem ipsum dolor sit amet,<br> consectetur adipiscing elit.</h2>
                        <div class="maat-grid-blog-posts__col__info">
                            <span class="maat-grid-blog-posts__col__info__date">
                                <i class="fa-solid fa-calendar-days"></i>
                                <p>23 agosto, 2022</p>
                            </span>
                            <span class="maat-grid-blog-posts__col__info__author">
                                <i class="fa-regular fa-user"></i>
                                <p>Por Erick Jiménez</p>
                            </span>
                        </div>
                        <hr class="maat-grid-blog-posts__col__divider">
                        <p class="maat-grid-blog-posts__col__desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Et dapibus habitant elementum, faucibus luctus quam aliquet justo. Arcu nascetur non in gravida eu porttitor. Tincidunt sed sed sapien integer. Et pulvinar nunc ullamcorper sagittis,</p>
                        <a href="#" class="maat-grid-blog-posts__col__link">
                            LEER MÁS
                        </a>
                    </div>
                </div>

                <div class="maat-grid-blog-posts__row">
                    <div class="maat-grid-blog-posts__col">
                        <img class="maat-grid-blog-posts__col__img" src="https://images.pexels.com/photos/13421007/pexels-photo-13421007.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="">
                    </div>
                    <div class="maat-grid-blog-posts__col">
                        <span class="maat-grid-blog-posts__col__etiqueta etiqueta-roja">Gestión de residuos</span>
                        <h2 class="maat-grid-blog-posts__col__title">Lorem ipsum dolor sit amet,<br> consectetur adipiscing elit.</h2>
                        <div class="maat-grid-blog-posts__col__info">
                            <span class="maat-grid-blog-posts__col__info__date">
                                <i class="fa-solid fa-calendar-days"></i>
                                <p>23 agosto, 2022</p>
                            </span>
                            <span class="maat-grid-blog-posts__col__info__author">
                                <i class="fa-regular fa-user"></i>
                                <p>Por Erick Jiménez</p>
                            </span>
                        </div>
                        <hr class="maat-grid-blog-posts__col__divider">
                        <p class="maat-grid-blog-posts__col__desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Et dapibus habitant elementum, faucibus luctus quam aliquet justo. Arcu nascetur non in gravida eu porttitor. Tincidunt sed sed sapien integer. Et pulvinar nunc ullamcorper sagittis,</p>
                        <a href="#" class="maat-grid-blog-posts__col__link">
                            LEER MÁS
                        </a>
                    </div>
                </div>
            </div>
            <?php
            while ( have_posts() ) {
                the_post();
                $post_link = get_permalink();
                ?>
                <article class="post">
                    <?php
                    printf( '<h2 class="%s"><a href="%s">%s</a></h2>', 'entry-title', esc_url( $post_link ), wp_kses_post( get_the_title() ) );
                    printf( '<a href="%s">%s</a>', esc_url( $post_link ), get_the_post_thumbnail( $post, 'large' ) );
                    the_excerpt();
                    ?>
                </article>
            <?php } ?>
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
