<?php
/**
 * The template for displaying singular post-types: posts, pages and user-defined custom post types.
 *
 * @package HelloElementor
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

while ( have_posts() ) :
	the_post();
	?>

	<?php echo do_shortcode('[maat_heading_blog title="'.get_the_title().'"]'); ?>
	<div class="maat-blog-single-top">
		<a class="maat-link-cat" href="#">
			<span class="maat-grid-blog-posts__col__etiqueta etiqueta-verde">Gestion de residuos</span>
		</a>
		<div class="maat-grid-blog-posts__col__info">
			<span class="maat-grid-blog-posts__col__info__date">
				<i class="fa-solid fa-calendar-days"></i>
				<p>15 de Agosto, 2022</p>
			</span>
			<span class="maat-grid-blog-posts__col__info__author">
				<i class="fa-regular fa-user"></i>
				<p>Por: Pepito Perez</p>
			</span>
		</div>	   
	</div>
	<div class="maat-blog-single-info">
		<p class="maat-blog-single-info__desc">
		Lorem ipsum dolor sit amet, consectetur adipiscing elit. Commodo nec volutpat lacus, donec nunc nisi. Nisi, fusce felis nibh in dignissim. In elementum laoreet sit at sit dolor, viverra. Varius varius ultrices a pharetra. Volutpat non aliquet fermentum lacus et augue quis ornare donec. Eu et egestas bibendum aliquet ac.
		</p>
		<hr class="maat-single-blog-divider">
	</div>
	<div class="maat-single-blog-content">
		<div class="maat-single-blog-content__cont-img">
			<img class="maat-single-blog-content__cont-img__img" src="https://images.pexels.com/photos/10521290/pexels-photo-10521290.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="">
		</div>
		<div class="maat-single-blog-content__desc">
			<h2 class="maat-single-blog-content__desc__title">Lorem ipsum dolor sit amet</h2>
			<p class="maat-single-blog-content__desc__excerpt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin mauris phasellus pulvinar in pulvinar viverra tristique viverra blandit. Nulla at proin ac erat molestie commodo. Vivamus convallis aliquam vel sed feugiat at nulla. Lectus eleifend suscipit nibh duis ac quam ultricies. Duis ornare massa, elit quis pellentesque orci. Vestibulum viverra donec facilisis mauris pellentesque imperdiet non mi mauris. Ut posuere pulvinar non eros nam volutpat nulla.</p>
		</div>
	</div>
	<div class="maat-single-blog-special-text">
		<p class="maat-single-blog-special-text__text">
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Commodo nec volutpat lacus, donec nunc nisi. Nisi, fusce felis nibh in dignissim. In elementum laoreet sit at sit dolor, viverra. Varius varius ultrices a pharetra.
		</p>
	</div>
	<div class="maat-single-blog-aux-img">
		<img class="aux-img"src="https://images.pexels.com/photos/13421007/pexels-photo-13421007.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="">
	</div>
	<div class="maat-single-blog-text-aux2">
		<p class="maat-single-blog-text-aux2__excerpt">
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Commodo nec volutpat lacus, donec nunc nisi. Nisi, fusce felis nibh in dignissim. In elementum laoreet sit at sit dolor, viverra. Varius varius ultrices a pharetra. Volutpat non aliquet fermentum lacus et augue quis ornare donec. Eu et egestas bibendum aliquet ac.
		</p>
		<iframe width="100%" height="393" src="https://www.youtube.com/embed/_TmzxFweLEc" title="Entrevista Erik Jiménez - CoFundador Maat Soluciones GESTIÓN DE RESIDUOS  CONSentido" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	</div>
	<div class="maat-single-blog-share">
		<span class="maat-single-blog-share__text">Compartir</span>
		<div class="maat-single-blog-share__icons">
			<a href="#" class="maat-single-blog-share__icons__links link-twitter">
				<i class="fa-brands fa-twitter"></i>
			</a>
			<a href="#" class="maat-single-blog-share__icons__links link-facebook">
				<i class="fa-brands fa-facebook-f"></i>
			</a>
			<a href="#" class="maat-single-blog-share__icons__links link-linkedin">
				<i class="fa-brands fa-linkedin-in"></i>
			</a>
			<a href="#" class="maat-single-blog-share__icons__links link-whatsapp">
				<i class="fa-brands fa-whatsapp"></i>
			</a>
			<a href="#" class="maat-single-blog-share__icons__links link-envelope">
				<i class="fa-regular fa-envelope"></i>
			</a>
		</div>
	</div>
	<div class="maat-single-blog-pagination">
		<a href="#" class="maat-single-blog-pagination__navs">
			<i class="fa-solid fa-angle-left"></i>
			<span>Anterior</span>
		</a>
		<a href="#" class="maat-single-blog-pagination__navs">
			<span>Siguiente</span>
			<i class="fa-solid fa-angle-right"></i>
		</a>
	</div>
	<div class="maat-single-blog-title-related-post">
		<?php echo do_shortcode('[maat_title text="Te puede interesar"]'); ?>
	</div>
	<div class="maat-single-blog-related-post">
		<div class="maat-single-blog-related-post__item">
			<img src="https://images.pexels.com/photos/13421007/pexels-photo-13421007.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="" class="maat-single-blog-related-post__item__img">
			<p class="maat-single-blog-related-post__item__title">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
		</div>
		<div class="maat-single-blog-related-post__item">
			<img src="https://images.pexels.com/photos/13421007/pexels-photo-13421007.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="" class="maat-single-blog-related-post__item__img">
			<p class="maat-single-blog-related-post__item__title">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
		</div>
	</div>
	<div class="maat-single-blog-related-post">
		<div class="maat-single-blog-related-post__item">
			<img src="https://images.pexels.com/photos/13421007/pexels-photo-13421007.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="" class="maat-single-blog-related-post__item__img">
			<p class="maat-single-blog-related-post__item__title">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
		</div>
		<div class="maat-single-blog-related-post__item">
			<img src="https://images.pexels.com/photos/13421007/pexels-photo-13421007.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="" class="maat-single-blog-related-post__item__img">
			<p class="maat-single-blog-related-post__item__title">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
		</div>
	</div>
<main id="content" <?php post_class( 'site-main' ); ?> role="main">
	<?php if ( apply_filters( 'hello_elementor_page_title', true ) ) : ?>
		<header class="page-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</header>
	<?php endif; ?>
	<div class="page-content">
		<?php the_content(); ?>
		<div class="post-tags">
			<?php the_tags( '<span class="tag-links">' . __( 'Tagged ', 'hello-elementor' ), null, '</span>' ); ?>
		</div>
		<?php wp_link_pages(); ?>
	</div>

	<?php comments_template(); ?>
</main>

	<?php
endwhile;
