<?php
    get_header();
    $categoriaID = get_cat_ID($page_object->cat_name);
    $home = get_template_directory_uri();  
?>

<img src="<?= $home ?>/assets/img/efeito.svg" class="pattern-category">

<div class="container" id="cards">
    <div class="row">
        <div class="col-12">
        <h2 class="c-azul-escuro">
            <?php single_cat_title(); ?> 
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

    <section id="newsletter">
    <div class="container">
        <div class="row d-flex align-items-center justify-content-between">
            <div class="col-12 col-md-6">
                <legend class="c-branco upper mb-1">
                    assine nossa newsletter
                </legend>
                <h3 class="c-branco">
                Mantenha-se atualizado com as últimas novidades sobre <br> tecnologia, tendências e maximização da rentabilidade e <br> efetividade dos investimentos em mídia exterior 
                </h3>
            </div>
            <div class="col-12 col-md-5 mt-5 mt-md-0">
            <form autocomplete="false" role="form" method="post" action="https://mautic.clinicajosekacowicz.com.br/form/submit?formId=9" id="mauticform_newsletterblogkacowicz" data-mautic-form="newsletterblogkacowicz" enctype="multipart/form-data">
        <div class="mauticform-error" id="mauticform_newsletterblogkacowicz_error"></div>
        <div class="mauticform-message" id="mauticform_newsletterblogkacowicz_message"></div>
        <div class="mauticform-innerform">

            
          <div class="mauticform-page-wrapper mauticform-page-1" data-mautic-form-page="1">
          <div class="input-group mb-3 align-items-start">
          <div id="mauticform_newsletterblogkacowicz_insira_o_seu_email" data-validate="insira_o_seu_email" data-validation-type="email" class="mauticform-row mauticform-email mauticform-field-1 mauticform-required">
                <input id="mauticform_input_newsletterblogkacowicz_insira_o_seu_email" name="mauticform[insira_o_seu_email]" value="" placeholder="Insira o seu e-mail" class="mauticform-input form-control" type="email">
                <span class="mauticform-errormsg" style="display: none;">Este campo está vazio</span>
            </div>
                    <div class="input-group-append">
                        <button class="btn btn-primary upper" type="submit" name="mauticform[submit]"><b>Quero assinar</b></button>
                    </div>
                </div>
            </div>
        </div>

        <input type="hidden" name="mauticform[formId]" id="mauticform_newsletterblogkacowicz_id" value="9">
        <input type="hidden" name="mauticform[return]" id="mauticform_newsletterblogkacowicz_return" value="">
        <input type="hidden" name="mauticform[formName]" id="mauticform_newsletterblogkacowicz_name" value="newsletterblogkacowicz">

        </form>
            </div>
        </div>
        </div>
    </section>

        <?php get_footer(); ?>
        <script type="text/javascript">
        
    /** This section is only needed once per page if manually copying **/
    if (typeof MauticSDKLoaded == 'undefined') {
        var MauticSDKLoaded = true;
        var head            = document.getElementsByTagName('head')[0];
        var script          = document.createElement('script');
        script.type         = 'text/javascript';
        script.src          = 'https://mautic.clinicajosekacowicz.com.br/media/js/mautic-form.js';
        script.onload       = function() {
            MauticSDK.onLoad();
        };
        head.appendChild(script);
        var MauticDomain = 'https://mautic.clinicajosekacowicz.com.br';
        var MauticLang   = {
            'submittingMessage': "Please wait..."
        }
    }
</script>
</body>

</html>