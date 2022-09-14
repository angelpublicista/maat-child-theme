<?php

if(!function_exists('maat_heading_blog_func')){
    // Shortcode
    add_shortcode('maat_heading_blog','maat_heading_blog_func');

    // Función gancho
    function maat_heading_blog_func($atts){
        $atts = shortcode_atts(array(
            'title' => 'Blog'
        ),
        $atts,
        'maat_heading_blog');

        ?>
        <section class="maat-heading-blog" style="background-image: url('http://pruebas-maat.local/wp-content/uploads/2022/09/banner-1.png')">
            <div class="maat-heading-blog__entry">
                <h1 class="maat-heading-blog__entry__title"><?php echo $atts['title']; ?></h1>
                <hr class="maat-heading-blog__entry__divider">
                <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
                    <?php if(function_exists('bcn_display'))
                    {
                        bcn_display();
                    }?>
                </div>
            </div>
        </section>
        <?php
    }
}