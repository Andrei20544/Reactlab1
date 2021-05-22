<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Document</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/jquery.fancybox.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/_media.css">
    <link rel="stylesheet" href="css/style_cards.css">

</head>
<body id="comp">

{{--<component_header></component_header>--}}

<header class="header">
        <div class="header__darkbg">
            <div class="container">
                <div class="header__content header--open">
                    <a class="logo" href="/">
                        <img class="logo__img" src="images/logo.png" alt="logo">
                    </a>
                    <div class="header__content-center menu--open">
                        <a class="header__link" href="/news">Услуги</a>
                        <a class="header__link" href="/schedule">Расписание</a>
                        <a class="header__link" href="/cards">Клубные карты</a>
                        <a class="header__link" href="/about">О клубе</a>
                        <a class="header__link" href="/contacts">Контакты</a>
                    </div>
                    <button class="button_menu">МЕНЮ</button>
                    <form action="/order">
                                <button class="button_call">ЗАПИСЬ ОНЛАЙН</button>
                    </form>
                </div>
            </div>
        </div>
    </header>

<div class="content bg-img">
    <div class="darkbg">
        <div class="content__label">Клубные карты</div>
    </div>
</div>
<div class="container">
    <div class="content" id="app">
        <div  v-for="item in items" class="content__cards">
            <a href="" class="content__cards-item">
                <div class="content__cards-inner">
                    <div class="content__title">@{{item.title}}</div>
                    <div class="content__subtitle">@{{item.desc}}</div>
                </div>
            </a>
        </div>
    </div>
</div>

<div class="footer">
        <div class="container">
            <div class="footer__top">
                <p class="footer__text">г. Калининград, ул. Олега Кошевого 58</p>
                <div class="footer__text">
                    <p class="footer__text">Ежедневно с 7:00 до 23:00</p>
                    <p class="footer__text">Бассейн и сауна:</p>
                    <p class="footer__text">Пн с 11:00 до 22:00</p>
                    <p class="footer__text">Вт-Вс с 7:00 до 22:00</p>
                </div>
                <p class="footer__text">
                    <a class="footer__text-a" href="">+7 (4012) 61-40-61</a>
                </p>
            </div>
            <div class="footer__center">
                <div class="footer__social">
                    <a class="footer__social-link" href="">
                        <img class="footer__social-ico" src="images/ico/ico-facebook.svg" alt="">
                    </a>
                    <a class="footer__social-link" href="">
                        <img class="footer__social-ico" src="images/ico/ico-vk.svg" alt="">
                    </a>
                    <a class="footer__social-link" href="">
                        <img class="footer__social-ico" src="images/ico/icons8-instagram.svg" alt="">
                    </a>
                </div>
            </div>
            <div class="footer__bottom">
                <p class="footer__text">Пользовательское соглашение Договор оферты</p>
                <p class="footer__text">© 2020–2021 ОOO «FitKld фитнес»</p>
            </div>
        </div>
    </div>


{{--<component_footer></component_footer>--}}

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/jquery.fancybox.min.js"></script>
<script src="js/main.js"></script>
<script src="js/slider.js"></script>
<script src="https://unpkg.com/vue@next"></script>
<script src="https://unpkg.com/vue-router@next"></script>
{{--<script src="src/component/components.js"></script>--}}
<script src="js/app.js"></script>

</body>
</html>
