<?php
    get_header();
?>
        <?php
        $novo_loop = new WP_Query( array('posts_per_page' => '1') );
        if ( $novo_loop->have_posts() ): while ( $novo_loop->have_posts() ): $novo_loop->the_post();
            get_template_part( 'template-parts/card-one', get_post_format() );
        endwhile;
        else: 
        endif;
        wp_reset_postdata();
        ?>

        <?php
        get_template_part( 'template-parts/newsletter');

        ?>
        <div class="container" id="cards">
            <div class="row">
                <div class="col-12">
                    <h3 class="c-azul-escuro upper">
                    Últimos posts
                    </h3>
                </div>                
                <?= do_shortcode('[ajax_load_more container_type="div" post_type="post" offset="1" posts_per_page="3" ]') ?>
            </div>
        </div>

        <?php get_footer(); ?>

    </body>

    </html>