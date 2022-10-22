<?php

if(!function_exists('maat_grid_tipos_recursos_func')){
    
    add_shortcode( 'maat_grid_tipos_recursos', 'maat_grid_tipos_recursos_func');
    
    function maat_grid_tipos_recursos_func(){
        $terms = get_terms( array(
            'taxonomy' => 'maat_type_resource',
            'hide_empty' => false
        ) );

        ob_start();
        ?>
        <div class="maat-grid-recursos-cat">
            <?php foreach($terms as $item): 
                $image = get_field('portada', 'maat_type_resource' . '_' . $item->term_id);
                $cover = $image['url'];    

                $icon = get_field('icono', 'maat_type_resource' . '_' . $item->term_id);
                $iconUrl = $icon['url'];
            ?>
            <div class="maat-card-recursos-cat">
                <img src="<?php echo $cover ?>" alt="" class="maat-card-recursos-cat__cover">
                <a href="<?php echo get_term_link($item->term_id, 'maat_type_resource') ?>" class="maat-card-recursos-cat__caption">
                    <img src="<?php echo $iconUrl ?>" alt="" class="maat-card-recursos-cat__caption__icon">
                    <h4 class="maat-card-recursos-cat__caption__title"><?php echo $item->name ?></h4>
                </a>
            </div>
            <?php endforeach; ?>
        </div>
        <?php
        return ob_get_clean();
    }

}