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
<body id="app">
<div class="main">
    <!-- <component_header></component_header> -->

    <div class="container">

        <h1 class="container__title">Услуги клуба</h1>

        <div class="content">
            <div class="item">
                <a v-for="item in services" class="item__link" href="">
                    <div class="item-title">@{{item}}</div>
                </a>
            </div>
        </div>

    </div>

    <!-- <component_footer></component_footer> -->
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/jquery.fancybox.min.js"></script>
<script src="js/main.js"></script>
<script src="https://unpkg.com/vue@next"></script>
<script src="src/component/components.js"></script>
<script src="js/app.js"></script>
<!-- <script src="js/services.js"></script> -->
</body>
</html>
