<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Описание страницы">
        <meta name="keywords" content="ключевые слова">
        <link href="https://fonts.googleapis.com/css?family=Bad+Script|Roboto+Condensed:400,700|Montserrat:200,400&amp;subset=cyrillic" rel="stylesheet">
        <script src="http://code.jquery.com/jquery-1.8.3.js"></script>
        <script src="/js/calculator.js"></script>
        <title>CleanUp - профессиональная уборка квартир в Санкт-Петербурге</title>
        <?php wp_head(); ?>
    </head>
    <body>
        <div class="header">
            <div class="container-fluid page-header">

                <div class="row">
                    <div class="col-sm-6">                
                        <a href="tel:88129885591"> 8 (812) 988-55-91</a>
                    </div>
                    <div class="col-sm-6 text-right">
                        <?php wp_nav_menu(['theme_location' => 'primary', 'menu_class' => 'main-menu']); ?>
                    </div>
                </div>