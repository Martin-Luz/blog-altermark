<div class="container" id="cards">
    <div class="row">
        <div class="col-12">
            <h3 class="c-azul-escuro upper">
                posts relacionados
            </h3>
        </div>

    </div>
        <?= do_shortcode('[ajax_load_more container_type="div" post_type="post" offset="1" posts_per_page="3" ]') ?>
</div>