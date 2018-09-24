<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Описание страницы">
        <meta name="keywords" content="ключевые слова">
        <link href="https://fonts.googleapis.com/css?family=Bad+Script|Roboto+Condensed:400,700|Montserrat:200,400&amp;subset=cyrillic" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/vue@2.5.17/dist/vue.js"></script>
        <title>Don't Worry - профессиональная уборка квартир в Санкт-Петербурге</title>
        <?php wp_head(); ?>
    </head>
    <body>
        <div class="header">
            <div class="container-fluid page-header">

                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-6">                
                    <a href="<?php echo home_url(''); ?>"><img class="logo" src="<?php echo home_url(''); ?>/wp-content/uploads/2018/09/logo.png" alt="logo"></a>
                    </div>
                    <div class="col-lg-7 col-md-6 text-right">
                        <?php wp_nav_menu(['theme_location' => 'primary', 'menu_class' => 'main-menu']); ?>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 text-right" style="margin-top:10px;">
                    <a href="tel:88129885591"> 8 (812) 988-55-91</a>
                    </div>
                </div>