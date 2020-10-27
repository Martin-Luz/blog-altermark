<?php
    wp_head();
    $home = get_template_directory_uri();  
?>
<!doctype html>
    <html lang="en">
    <head>
        <link rel="shortcut icon" type="image/png" href="https://josekacowicz.com.br/assets/img/icon/fav.png">
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?= $home ?>/assets/css/main.css?0<?= date('sYmMsDs'); ?>">
    </head>

    <body>

    <?php get_template_part( 'template-parts/navbar'); ?>