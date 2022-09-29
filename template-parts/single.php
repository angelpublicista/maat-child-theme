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
	<div class="maat-blog-content__row">
		<div class="maat-blog-content__col maat-blog-content__col-left">
			<div class="maat-blog-single-top">
				<?php 
					$cats = get_the_category();
					$label_cl = "";
				?>
				
				<?php foreach($cats as $cat): 
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
				<?php endforeach; ?>
				
				<div class="maat-grid-blog-posts__col__info">
					<span class="maat-grid-blog-posts__col__info__date">
						<i class="fa-solid fa-calendar-days"></i>
						<p><?php echo get_the_date(); ?></p>
					</span>
					<span class="maat-grid-blog-posts__col__info__author">
						<i class="fa-regular fa-user"></i>
						<p>Por <?php the_author_firstname();?> <?php the_author_lastname(); ?></p>
					</span>
				</div>	   
			</div>

			<div class="maat-single-blog__content">
				<?php the_content(); ?>
			</div>
		
			<!-- Share Links -->
			<div class="maat-single-blog-share">
				<span class="maat-single-blog-share__text">Compartir</span>
				<div class="maat-single-blog-share__icons">
					<a href="https://twitter.com/intent/tweet?text='<?php the_title()?>  <?php the_permalink() ?>'" target="_blank" class="maat-single-blog-share__icons__links link-twitter">
						<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/twitter-line.svg" alt="">
					</a>
					<a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink() ?>"  target="_blank" class="maat-single-blog-share__icons__links link-facebook">
						<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/facebook-line.svg" alt="">
					</a>
					<a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink() ?>&title='<?php the_title()?>'&summary=&source=" target="_blank" class="maat-single-blog-share__icons__links link-linkedin">
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

			<!-- Pagination -->
			<div class="maat-single-blog-pagination">
				<?php 
					previous_post_link('%link', '<i class="fa-solid fa-angle-left"></i> <span style="margin-left: 15px;">Anterior</span>');
					next_post_link('%link', '<span style="margin-right: 15px;">Siguiente</span> <i class="fa-solid fa-angle-right"></i>'); 
				?>
			</div>
			<div class="maat-single-blog-title-related-post">
				<?php echo do_shortcode('[maat_title text="Te puede interesar"]'); ?>
			</div>
			<ul class="maat-single-blog-related-post"> 
			<?php
			$related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 4, 'post__not_in' => array($post->ID) ) );
			if( $related ) foreach( $related as $post ) {
				setup_postdata($post); ?>
			
					<li class="maat-single-blog-related-post__item">
						<?php 
							if(!get_the_post_thumbnail()){
								echo "<img class='maat-single-blog-related-post__item__img' style='border: 1px solid #ccc;' src='".get_stylesheet_directory_uri()."/assets/img/photo-not-available.jpg'>";
							}
						
							the_post_thumbnail('full', array('class' => 'maat-single-blog-related-post__item__img'));
						?>
						<a class="maat-single-blog-related-post__item__title" href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a>
					</li>
				 
			<?php }
			wp_reset_postdata(); ?>
			</ul>  
			<?php //comments_template(); ?>
		</div>

		<div class="maat-blog-content__col maat-blog-content__col-right">
			<?php dynamic_sidebar('id-nueva-zona'); ?>
		</div>
	</div>
</main>

	<?php
endwhile;
