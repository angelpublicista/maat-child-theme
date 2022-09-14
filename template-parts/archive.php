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
                        <img class="maat-grid-blog-posts__col__img" src="https://images.unsplash.com/photo-1663090236999-4eb90ee3c2ef?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1632&q=80" alt="">
                    </div>

                    <div class="maat-grid-blog-posts__col">
                        <h2>Title</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis, ut eos. Delectus quam provident quos libero ad a quidem, amet minus iste neque culpa, eos, iusto suscipit dignissimos alias dolor?</p>
                    </div>
                </div>

                <div class="maat-grid-blog-posts__row">
                    <div class="maat-grid-blog-posts__col">
                        <img class="maat-grid-blog-posts__col__img" src="https://images.unsplash.com/photo-1663090236999-4eb90ee3c2ef?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1632&q=80" alt="">
                    </div>

                    <div class="maat-grid-blog-posts__col">
                        <h2>Title</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis, ut eos. Delectus quam provident quos libero ad a quidem, amet minus iste neque culpa, eos, iusto suscipit dignissimos alias dolor?</p>
                    </div>
                </div>

                <div class="maat-grid-blog-posts__row">
                    <div class="maat-grid-blog-posts__col">
                        <img class="maat-grid-blog-posts__col__img" src="https://images.unsplash.com/photo-1663090236999-4eb90ee3c2ef?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1632&q=80" alt="">
                    </div>

                    <div class="maat-grid-blog-posts__col">
                        <h2>Title</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis, ut eos. Delectus quam provident quos libero ad a quidem, amet minus iste neque culpa, eos, iusto suscipit dignissimos alias dolor?</p>
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
