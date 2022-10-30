<?php

if(!function_exists('mt_grid_logros_func')){

    add_shortcode( 'mt_grid_logros', 'mt_grid_logros_func' );
    function mt_grid_logros_func(){
        $args = array(
            'post_type' => 'mt-logros',
            'posts_per_page' => 100
        );

        $query = new WP_Query($args);
        if($query->have_posts()){//start if
        ob_start();
        ?>
        <div class="mt-logros-grid">
            <?php while($query->have_posts()): $query->the_post(); ?>
            <figure class="ma-card">
                <?php the_post_thumbnail( 'medium', array('class' => 'ma-card__bg') ) ?>
                <figcaption class="ma-cont-project-info">
                    <div class="ma-cont-up">
                        <img src="http://maat.local/wp-content/uploads/2022/08/Group-21-1.png" alt="" class="ma-cont-project-info__icon">
                        <h2 class="ma-cont-project-info__title"><?php the_title(); ?></h2>
                    </div>
                    <div class="ma-cont-project-info__desc"><?php the_content(); ?></div>
                </figcaption>
            </figure>
            <?php endwhile; ?>
        </div>

        <button class="mt-load-more">Mostrar más</button>

        <?php
            wp_reset_query();
        } else {
            echo "No hay posts";
        }

        return ob_get_clean();
    }

}