<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Фитнес клуб</title>
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/slick.css">
        <link rel="stylesheet" href="css/jquery.fancybox.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/slider_style.css">
        <link rel="stylesheet" href="css/_media.css">

    </head>
    <body id="app">

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

    <div class="content">
        <div class="container">
            <div class="slider__upper">
                <div class="slider__wrapper-up">
                    <div class="slider__item-up">
                        <div class="slider__item-oneUp">
                            <div class="slider__descriptionUp">
                                <div class="slider__description-textUp">
                                    <p>
                                    <h1>Акция: 5 месяцев 9200</h1>
                                    </p>
                                    <p class="slider__description-upUp">
                                        Только с 17 по 26 апреля!
                                    </p>
                                    <button class="content__btn btn--decor">подробнее</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider__item-up">
                        <div class="slider__item-twoUp">
                            <div class="slider__descriptionUp">
                                <div class="slider__description-textUp">
                                    <h1>Выберите занятия для себя!</h1>
                                    <p class="slider__description-upUp">
                                        Групповые программы, аквааэробика, детские занятия и секции
                                    </p>
                                    <button class="content__btn btn--decor">подробнее</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider__item-up">
                        <div class="slider__item-threeUp">
                            <div class="slider__descriptionUp">
                                <div class="slider__description-textUp">
                                    <h1>Корпоративный фитнес</h1>
                                    <p class="slider__description-upUp">
                                        Индивидуальные предложения для компаний от 10 человек
                                    </p>
                                    <button class="content__btn btn--decor">подробнее</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider__block-btn">
                <button class="btn__prev">назад</button>
                <button class="btn__next">вперед</button>
            </div>
        </div>
        <div class="container__dark">
            <div class="container">
                <h1 class="content__label"><b>Новости клуба</b></h1>
                <div class="content__news">
                    <div class="content__top">
                        <a href="" class="content__link">
                            <img class="content__img img-special" src="images/cont.png" alt="">
                            <div class="content__description">
                                14 апреля 2021 <br/>
                                <h1>Поехали! Акция с 17 по 26 апреля</h1> <br/>
                                5 месяцев за 9200₽
                            </div>
                        </a>
                    </div>
                    <div class="content__center">
                        <a href="" class="content__link">
                            <img class="content__img" src="images/news_2.jpg" alt="">
                            <div class="content__description">
                                14 апреля 2021 <br/>
                                <h1>Скидки для отличников ГТО</h1>
                            </div>
                        </a>
                    </div>
                    <div class="content__bottom">
                        <a href="" class="content__link">
                            <img class="content__img" src="images/news_3.jpg" alt="">
                            <div class="content__description">
                                14 апреля 2021 <br/>
                                <h1>Программа лояльности для любимых клиентов</h1>
                            </div>
                        </a>
                    </div>
                    <div class="content__btn-block">
                        <button class="content__btn btn--decor">все новости</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="content__slider" v-bind:style="{ 'background-image' : 'url(' + computedImg + ')' }">
            <div class="content__blackback">
                <div class="container">
                    <div class="slider">
                        <div class="slider__wrapper">
                            <div class="slider__item">
                                <div class="slider__item-one">
                                    <div class="slider__description">
                                        <div class="slider__description-text">
                                            <p class="slider__description-up">
                                                Наши услуги
                                            </p>
                                            <h1>@{{slideMainCurrentText.up}}</h1>
                                            <p class="slider__description-down">
                                                @{{slideMainCurrentText.down}}
                                            </p>
                                            <button class="content__btn btn--decor">подробнее</button>
                                        </div>
                                        <div class="dop_slide">
                                            <button class="dop_btn" v-on:click="PrevSlide">назад</button>
                                            <button class="dop_btn" v-on:click="NextSlide">вперед</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="container">
            <div class="content__inner">
                <p class="content__text">Выбери свою карту!</p>
                <p class="content__text-under">Широкий выбор клубных карт для поклонников фитнеса</p>
                <div class="content__btn-block">
                    <button class="content__btn btn--decor">все клубные карты</button>
                </div>
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/slider.js"></script>
    <script src="https://unpkg.com/vue@next"></script>
    <script src="https://unpkg.com/vue-router@next"></script>
    <script src="src/component/components.js"></script>
    <script src="js/app.js"></script>
    </body>
</html>
