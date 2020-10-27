<?php 
    $name = get_the_category()[0]->cat_name;
?>
<a href="<?php the_permalink() ?>" class="col-12 col-md-4">
<div class="card">
    <div class="img-card" style="background-image: url(<?php the_post_thumbnail_url(); ?>);"></div>
    <div class="card-text">
        <legend class="c-cinza-escuro bold upper mb-3">
            <?=  $name ?>
        </legend>
        <h3 class="c-azul-escuro mb-3">
            <b><?php the_title(); ?></b>
        </h3>

        <span> 
            Por  <?php the_author(); ?> • <?php echo get_the_date('j'); ?> de <?php echo get_the_date('F'); ?> de <?php echo get_the_date('Y'); ?> 
        </span>
    </div>
    </div>

</a>