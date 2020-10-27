<?php get_header(); ?>


<?php

if (have_posts()) {
    while (have_posts()) {
        the_post();
        ?>

    <div class="container" id="single-post">

        <div class="row d-flex justify-content-center">
            <div class="col-12 col-md-7">
                <legend class="bold upper c-azul-escuro">
                    <?php $categoria = get_the_category()[0]; echo $categoria->name  ?>
                </legend>
                <h2 class="c-cinza-escuro my-4">
                    <?php the_title() ?>
                </h2>
                <span> 
            Por  <?php the_author(); ?> • <?php echo get_the_date('j'); ?> de <?php echo get_the_date('F'); ?> de <?php echo get_the_date('Y'); ?> 
        </span>
            </div>
            <div class="col-12">
                <div class="img-post" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
                </div>
            </div>
            <div class="col-12 col-md-8 box-father">
                <div class="social-media-icons box-child d-none d-lg-block">
                    <?= do_shortcode('[ssba-buttons]') ?>
                </div>
                <?php the_content(); ?>
            </div>
            <div class="col-12 col-md-8">
                <?= do_shortcode('[TheChamp-FB-Comments]') ?>
            </div>
        </div>
    </div>

    <?php } } ?>



    <?php get_template_part( 'template-parts/newsletter'); ?>

    <?php get_template_part( 'template-parts/posts-relacionados'); ?>


    <?php get_footer(); ?>

    </body>

    </html>