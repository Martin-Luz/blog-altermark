<?php
    $home = get_template_directory_uri();  
?>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand ml-3 ml-md-0" href="<?= get_home_url() ?>">
            
            <!-- <img src="<?= $home ?>/assets/img/logo.svg?5" alt="" width="150" class="d-lg-none"> -->
            <div class="header__logo">
                <img src="<?= $home ?>/assets/img/logo.svg?5" alt="" width="96" class="d-lg-block">
                <h1 class="header-title">Out-of-home addicts</h1>
            </div>
            </a>
            <div class="d-flex mobile-nav">
                <img src="<?= $home ?>/assets/img/search.svg?5" class="d-block d-lg-none search">
                <form action="<?php echo home_url( '/' ); ?>" method="get" class="form-group" style="display: none;">
                    <input type="text" class="form-control" value="<?php the_search_query(); ?>" name="s" placeholder="Pesquisa digitada">
                </form>
                <button class="navbar-toggler d-lg-none collapsed" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                <div class="one"></div>
                <div class="two"></div>
                <div class="three"></div>
            </button>
            </div>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav ml-4 mr-auto mt-2 mt-lg-0">
                    <?php
                        $categories = get_categories();
                        foreach($categories as $category) {
                            $args=get_posts(array('category__in' => array($category->term_id)));
                            if ($args) {
                     ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= get_home_url() ?>/category/<?php echo $category->slug; ?>/">
                                <?php echo $category->name; ?>
                            </a>
                        </li>

                        <?php } } ?>
                </ul>
                <ul class="navbar-nav my-2 my-lg-0">
                    <li class="nav-item d-none d-lg-block">
                        <a class="nav-link">
                        <form action="<?php echo home_url( '/' ); ?>" method="get" class="mb-0">
                            <div class="form-group">
                            <button type="submit">                            <img src="<?= $home ?>/assets/img/search.svg?5"></button>
                              <input type="text" class="form-control" value="<?php the_search_query(); ?>" name="s" placeholder="Pesquisar">
                            </div>
                            </form>
                        </a>
                    </li>
                    <li class="nav-item px-3 button-end">
                        <a class="nav-link button-header" style="border-bottom: none!important;" target="_blank" href="https://altermark.com/">
                            <button class="btn btn-primary w-100 upper" type="button"><b>Entre em contato</b></button>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>