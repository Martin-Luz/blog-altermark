<?php
    $home = get_template_directory_uri();  
?>
<footer class="footer-desk">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center upper">
                <p>
                Copyright © <?= date('Y') ?> Altermark. Todos os direitos reservados.
                </p>
            </div>
        </div>
    </div>
</footer>
<footer class="footer-mobile">
    <div class="container">
        <div class="row">
            <div class="footer__redes">
                <img src="<?= $home ?>/assets/img/logo-link.svg" alt="">
                <img src="<?= $home ?>/assets/img/logo-youtube.svg" alt="">
                <img src="<?= $home ?>/assets/img/logo-insta.svg" alt="">
                <img src="<?= $home ?>/assets/img/logo-tt.svg" alt="">
            </div>
            <div class="footer__copy col-12 upper">
                <p>
                © Altermark <?= date('Y') ?>
                </p>
            </div>
            <div class="footer__fundo"></div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script src="<?= $home ?>/assets/js/main.js?55"></script>