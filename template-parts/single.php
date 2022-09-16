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
	
<main id="content" <?php post_class( 'site-main' ); ?> role="main">
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

	<div class="maat-single-blog__content">
		<?php the_content(); ?>
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

	<?php dynamic_sidebar('id-nueva-zona'); ?>

	<?php comments_template(); ?>
</main>

	<?php
endwhile;
