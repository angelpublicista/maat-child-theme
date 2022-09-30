<?php

if (!function_exists('maat_share_links_func')) {
    add_shortcode('maat_share_links','maat_share_links_func');
    function maat_share_links_func(){
        ob_start();
        ?>
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
        <?php
        return ob_get_clean();
    }
}