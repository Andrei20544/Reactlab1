<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Title</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/jquery.fancybox.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/slider_style.css">
    <link rel="stylesheet" href="css/_media.css">
    <link rel="stylesheet" href="css/style_news.css">
</head>
<body id="comp">
<div class="main" id="arrayrendering">
    <component_header></component_header>

    <div class="container">

        <h1 class="container__title">Услуги клуба</h1>

        <div class="content">
        <!-- <div class="content__item">
          <a class="content__item-link" href="">
            <div class="content__item-icon">ico</div>
            <div class="content__item-title" ></div>
          </a>
        </div> -->
            <div class="item">
                <a class="item__link" href="">
                    <div class="item-ico"></div>
                    <div class="item-title">Тренажёрный зал</div>
                </a>
            </div>
        </div>

    </div>

    <component_footer></component_footer>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/jquery.fancybox.min.js"></script>
<script src="js/main.js"></script>
<script src="https://unpkg.com/vue@next"></script>
<script src="src/component/components.js"></script>
<!-- <script src="js/services.js"></script> -->
</body>
</html>