<?php
    get_header();
    $categoriaID = get_cat_ID($page_object->cat_name);
    $home = get_template_directory_uri();  
    $allsearch = new WP_Query("s=$s&showposts=0"); 
    $count = $allsearch ->found_posts;
?>

<img src="<?= $home ?>/assets/img/efeito.svg" class="pattern-category">

<div class="container" id="cards">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="c-cinza-escuro-2">
                    Você pesquisou por <b class="c-azul-escuro"><?= $_GET['s'] ?></b> e gerou <b class="c-azul-escuro"><?= $count ?> resultados.</b>
                    </h2>
                </div>

                <?php
                    if ( have_posts() ) : while ( have_posts() ) : the_post(); 
                            get_template_part( 'template-parts/cards', get_post_format() );
                        endwhile;
                        else: 
                        endif;
                        wp_reset_postdata();
        ?>
            </div>
        </div>

        <?php get_footer(); ?>

</body>

</html>