<?php

if(!function_exists('maat_heading_blog_func')){
    // Shortcode
    add_shortcode('maat_heading_blog','maat_heading_blog_func');

    // Función gancho
    function maat_heading_blog_func($atts){
        $atts = shortcode_atts(array(
            'title' => 'Blog',
            'background' => 'https://images.pexels.com/photos/13421007/pexels-photo-13421007.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2',
            'style' => 'style-1',
            'title-tag' => 'h1',
        ),
        $atts,
        'maat_heading_blog');
        ?>
        <section class="maat-heading-blog <?php echo $atts['style'] ?>" style="background-image: url('<?php echo $atts['background'] ?>')">
            <div class="maat-container">
                <div class="maat-heading-blog__entry">
                    <div>
                        <?php if($atts['title-tag'] == "h1"): ?>
                            <h1 class="maat-heading-blog__entry__title"><?php echo $atts['title']; ?></h1>
                        <?php endif; ?>

                        <?php if($atts['title-tag'] == "h2"): ?>
                            <h2 class="maat-heading-blog__entry__title"><?php echo $atts['title']; ?></h2>
                        <?php endif; ?>

                        <?php if($atts['title-tag'] == "h3"): ?>
                            <h3 class="maat-heading-blog__entry__title"><?php echo $atts['title']; ?></h3>
                        <?php endif; ?>
                        <hr class="maat-heading-blog__entry__divider">
                    </div>
                    <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
                        <?php if(function_exists('bcn_display'))
                        {
                            bcn_display();
                        }?>
                    </div>
                </div>
            </div>
        </section>
        <?php
    }
}