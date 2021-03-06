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
    <link rel="stylesheet" href="css/contactstyle.css">
    <link rel="stylesheet" href="css/_media.css">
    <link rel="stylesheet" href="css/_mediacontact.css">
</head>
<body >
<div class="main" id="comp">
    <component_header></component_header>

    <div class="container">

        <h1 class="container__title">Контакты</h1>

        <div class="content">
            <div class="content__inner">
                <div class="content__block">
                    <h2 class="content__title">Адрес</h2>
                    <div class="content__text">
                        <p>ОOO «ФИТКЛД фитнес»</p>
                        <p>г. Калининград, ул. Олега Кошевого 33</p>
                    </div>
                </div>
                <div class="content__block">
                    <h2 class="content__title">Время работы</h2>
                    <div class="content__text">
                        <p>Ежедневно с 7:00 до 23:00</p>
                        <br/>
                        <p>Бассейн и сауна:</p>
                        <p>Пн с 11:00 до 22:00</p>
                        <p>Вт-Вс с 7:00 до 22:00</p>
                    </div>
                </div>
                <div class="content__block">
                    <h2 class="content__title">Телефоны</h2>
                    <div class="content__text">
                        <p>+7 (4012) 61-40-61</p>
                        <p>+7 963 738 63 16 (Viber, WhatsApp)</p>
                    </div>
                </div>
            </div>
            <div class="content__inner">
                <h2 class="content__title">Напишите нам</h2>
                <form class="content__form" action="">
                    <div class="group">
                        <input class="content__input" type="text" required >
                        <span class="bar"></span>
                        <label>Ваше имя</label>
                    </div>
                    <div class="group">
                        <input class="content__input" type="text" required>
                        <span class="bar"></span>
                        <label>Номер телефона</label>
                    </div>
                    <div class="group">
                        <input class="content__input" type="text" required>
                        <span class="bar"></span>
                        <label>E-mail</label>
                    </div>
                    <div class="group">
                        <input class="content__input" type="text" required>
                        <span class="bar"></span>
                        <label>Текст сообщения</label>
                    </div>

                </form>
                <p class="content__parag">Нажимая "отправить", я соглашаюсь с обработкой персональных данных в соответствии с ФЗ «О персональных данных» № 152-ФЗ</p>
                <button class="content__btn btn--decor btn--cont" >Отправить</button>
            </div>
        </div>
    </div>

    <component_footer></component_footer>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/jquery.fancybox.min.js"></script>
<script src="https://unpkg.com/vue@next"></script>
<script src="js/main.js"></script>
<script src="src/component/components.js"></script>
</body>
</html>
