<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Металлстрой</title>

    <!-- Bootstrap styles -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/bootstrap-v-3.3.2/css/bootstrap.min.css">

    <!-- Main styles -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/media.css">

    <!-- Font-awesome styles -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/font-awesome-4.7.0/css/font-awesome.min.css">

    <!-- OwlCarusel styles -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/OwlCarousel2-2.1.6/dist/assets/owl.carousel.min.css">

    <!-- lightbox-master styles -->
    <!-- <link rel="stylesheet" href="assets/lightbox-master/dist/ekko-lightbox.css"> -->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body <?php body_class() ?>>
<header>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 logo">
                <a href="" title="ООО МеталлСтрой Сик"><img src="<?php echo get_template_directory_uri() ?>/images/logo.png" alt="ООО "МеталлСтрой Сик"">ООО "МеталлСтрой Сик"</a>
            </div>
            <div class="col-md-6 col-sm-12 top-nav">
                <nav class="navbar navbar-transparent" role="navigation">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="navbar-collapse">
                        <?php
                        wp_nav_menu( [
	                        'menu'            => 'Top menu',              // (string) Название выводимого меню (указывается в админке при создании меню, приоритетнее
	                        'theme_location'  => 'Top menu',               // (string) Расположение меню в шаблоне. (указывается ключ которым было зарегистрировано меню в функции register_nav_menus)
	                        'container'       => '',           // (string) Контейнер меню. Обворачиватель ul. Указывается тег контейнера (по умолчанию в тег div)
	                        'container_class' => '',              // (string) class контейнера (div тега)
	                        'container_id'    => '',              // (string) id контейнера (div тега)
	                        'menu_class'      => 'nav navbar-nav navbar-right',          // (string) class самого меню (ul тега)
	                        'menu_id'         => '',              // (string) id самого меню (ul тега)
                        ] );
                        ?>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>