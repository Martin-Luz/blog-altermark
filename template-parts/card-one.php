<?php 
    $name = get_the_category()[0]->cat_name;
?>
<section class="section__card-one">
    <div class="container container__card-one">
        <div class="row">
            <a href="<?php the_permalink() ?>" class="col-12">
                <div class="row mx-0" id="card-one">
                    <div class="col-12 col-md-6 card-img" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
                    </div>
                    <div class="col-12 col-md-6 d-flex flex-column justify-content-center card-text ">
                        <legend class="c-azul-escuro bold upper mb-3">
                            <?=  $name ?>
                        </legend>

                        <h1 class="c-cinza-escuro mb-3">
                            <?php the_title(); ?>
                        </h1>

                        <p class="c-cinza-escuro-2">
                            <?= the_excerpt(); ?>
                        </p>

                        <span> 
                            Por  <?php the_author(); ?> • <?php echo get_the_date('j'); ?> de <?php echo get_the_date('F'); ?> de <?php echo get_the_date('Y'); ?>     
                        </span>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>