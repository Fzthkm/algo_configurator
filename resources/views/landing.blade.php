<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style-landing.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style-adaptive.css') }}">
    <script src="{{ asset('js/script.js') }}"></script>
</head>

<body>
<div class="container">
    <div class="breadcrumb">
        <a href="{{ route('landing') }}" class="breadcrumb-item">Главная</a>
        <span class="breadcrumb-item">Конфигуратор ПК</span>
    </div>
    <section class="cards-configurator">
        <h1 class="headline-h1">Конфигуратор ПК</h1>
        <span class="subtitle">Создайте свою сборку комплектующих ПК с учетом совместимости</span>
        <div class="configs">
            <a href="{{ route('personalConfigurations') }}" class="config-card-main">
                <div class="config-button-shadow">
                    <div class="config-button">Начать сборку</div>
                </div>
            </a>
            <div class="configs-list">
                <a href="{{ route('catalog', ['type' => 'office']) }}" class="config-card office">Для офиса</a>
                <a href="{{ route('catalog', ['type' => 'gamer']) }}" class="config-card game">Для игр</a>
                <a href="{{ route('catalog', ['type' => 'developer']) }}" class="config-card dev">Разработчику</a>
                <a href="{{ route('catalog', ['type' => 'designer']) }}" class="config-card design">Дизайнеру</a>
            </div>
        </div>
    </section>
    <section class="popular-cards-config">
        <h2 class="hedline-h2">Популярные сборки</h2>
        <x-popular-configurations/>
        <button class="primary-btn">Перейти в каталог</button>
    </section>
    <section class="free-consultatoin">
        <div class="banners" id="banner1">
            <div class="main-content-banner">
                <h3 class="headline-h3-banner">Подберём три <br />конфигурации</h3>
                <h2 class="headline-h2-banner mob-head">Бесплатная консультация</h2>
                <div class="tags-banner">
                    <a class="item-tag banner-1 active" href="/">Подбор сборки</a>
                    <a class="item-tag banner-2" href="/">Рекомендации</a>
                    <a class="item-tag banner-3" href="/">Оценка сборки</a>
                    <a class="item-tag banner-4" href="/">Консультация</a>
                </div>
            </div>
            <div class="form-content-banner">
                <h2 class="headline-h2-banner">Бесплатная консультация</h2>
                <div class="contacts-us-cont">
                    <div class="contacts">
                        <div class="robot-phone">
                            <img src="./assets/images/logo-company/mts.png" />
                            <p>+375 29 <span>778-60-60</span></p>
                        </div>
                        <div class="robot-phone">
                            <img src="./assets/images/logo-company/a1.png" />
                            <p>+375 44 <span>778-60-60</span></p>
                        </div>
                    </div>
                    <div class="cont-btn">
                        <a href="/" class="telegram-btn">
                            <img src="./assets/images/buttons/tg.svg" alt="">
                            Telegram
                        </a>
                        <a href="/" class="whatsapp-btn">
                            <img src="./assets/images/buttons/whatsapp.svg" alt="">
                            WhatsApp
                        </a>
                    </div>
                    <button class="primary-btn open-form">Задать вопрос</button>
                </div>
            </div>
        </div>
        <div class="banners" id="banner2">
            <div class="main-content-banner">
                <h3 class="headline-h3-banner">Дадим рекомендации под Ваши задачи</h3>
                <h2 class="headline-h2-banner mob-head">Бесплатная консультация</h2>
                <div class="tags-banner">
                    <a class="item-tag banner-1" href="/">Подбор сборки</a>
                    <a class="item-tag banner-2 active" href="/">Рекомендации</a>
                    <a class="item-tag banner-3" href="/">Оценка сборки</a>
                    <a class="item-tag banner-4" href="/">Консультация</a>
                </div>
            </div>
            <div class="form-content-banner">
                <h2 class="headline-h2-banner">Бесплатная консультация</h2>
                <div class="contacts-us-cont">
                    <div class="contacts">
                        <div class="robot-phone">
                            <img src="./assets/images/logo-company/mts.png" />
                            <p>+375 29 <span>778-60-60</span></p>
                        </div>
                        <div class="robot-phone">
                            <img src="./assets/images/logo-company/a1.png" />
                            <p>+375 44 <span>778-60-60</span></p>
                        </div>
                    </div>
                    <div class="cont-btn">
                        <a href="/" class="telegram-btn">
                            <img src="./assets/images/buttons/tg.svg" alt="">
                            Telegram
                        </a>
                        <a href="/" class="whatsapp-btn">
                            <img src="./assets/images/buttons/whatsapp.svg" alt="">
                            WhatsApp
                        </a>
                    </div>
                    <button class="primary-btn open-form">Задать вопрос</button>
                </div>
            </div>
        </div>
        <div class="banners" id="banner3">
            <div class="main-content-banner">
                <h3 class="headline-h3-banner">Оценим Вашу сборку и проверим совместимость комплектующих </h3>
                <h2 class="headline-h2-banner mob-head">Бесплатная консультация</h2>
                <div class="tags-banner">
                    <a class="item-tag banner-1" href="/">Подбор сборки</a>
                    <a class="item-tag banner-2" href="/">Рекомендации</a>
                    <a class="item-tag banner-3 active" href="/">Оценка сборки</a>
                    <a class="item-tag banner-4" href="/">Консультация</a>
                </div>
            </div>
            <div class="form-content-banner">
                <h2 class="headline-h2-banner">Бесплатная консультация</h2>
                <div class="contacts-us-cont">
                    <div class="contacts">
                        <div class="robot-phone">
                            <img src="./assets/images/logo-company/mts.png" />
                            <p>+375 29 <span>778-60-60</span></p>
                        </div>
                        <div class="robot-phone">
                            <img src="./assets/images/logo-company/a1.png" />
                            <p>+375 44 <span>778-60-60</span></p>
                        </div>
                    </div>
                    <div class="cont-btn">
                        <a href="/" class="telegram-btn">
                            <img src="./assets/images/buttons/tg.svg" alt="">
                            Telegram
                        </a>
                        <a href="/" class="whatsapp-btn">
                            <img src="./assets/images/buttons/whatsapp.svg" alt="">
                            WhatsApp
                        </a>
                    </div>
                    <button class="primary-btn open-form">Задать вопрос</button>
                </div>
            </div>
        </div>
        <div class="banners" id="banner4">
            <div class="main-content-banner">
                <h3 class="headline-h3-banner">Проконсультируем по&nbsp;другим вопросам</h3>
                <h2 class="headline-h2-banner mob-head">Бесплатная консультация</h2>
                <div class="tags-banner">
                    <a class="item-tag banner-1" href="/">Подбор сборки</a>
                    <a class="item-tag banner-2" href="/">Рекомендации</a>
                    <a class="item-tag banner-3" href="/">Оценка сборки</a>
                    <a class="item-tag banner-4 active" href="/">Консультация</a>
                </div>
            </div>
            <div class="form-content-banner">
                <h2 class="headline-h2-banner">Бесплатная консультация</h2>
                <div class="contacts-us-cont">
                    <div class="contacts">
                        <div class="robot-phone">
                            <img src="./assets/images/logo-company/mts.png" />
                            <p>+375 29 <span>778-60-60</span></p>
                        </div>
                        <div class="robot-phone">
                            <img src="./assets/images/logo-company/a1.png" />
                            <p>+375 44 <span>778-60-60</span></p>
                        </div>
                    </div>
                    <div class="cont-btn">
                        <a href="/" class="telegram-btn">
                            <img src="./assets/images/buttons/tg.svg" alt="">
                            Telegram
                        </a>
                        <a href="/" class="whatsapp-btn">
                            <img src="./assets/images/buttons/whatsapp.svg" alt="">
                            WhatsApp
                        </a>
                    </div>
                    <button class="primary-btn open-form">Задать вопрос</button>
                </div>
            </div>
        </div>
    </section>
    <section class="review">
        <div class="review-headline">
            <h2 class="hedline-h2">Отзывы наших клиентов</h2>
            <a href="/" class="all-review">Смотреть все отзывы</a>
        </div>
        <div class="slider-arrow prev-btn hidden">
            <img src="./assets/images/buttons/Button - prev.svg" />
        </div>
        <div class="slider-arrow next-btn">
            <img src="./assets/images/buttons/Button - Next.svg" />
        </div>
        <div class="review-list">
            <div class="review-item">
                <div class="top-review">
                    <span class="name-review">Александр</span>
                    <span class="date-review">26 Апреля 2024</span>
                </div>
                <div class="rating-review">
                    <img src="./assets/images/stars/star-bg.svg" alt="">
                    <img src="./assets/images/stars/star-bg.svg" alt="">
                    <img src="./assets/images/stars/star-bg.svg" alt="">
                    <img src="./assets/images/stars/star-bg.svg" alt="">
                    <img src="./assets/images/stars/star-bg.svg" alt="">
                </div>
                <p class="info-review">Я недавно купил кастомный ПК в Tech Haven, и я не мог быть более доволен! Качество
                    сборки на высшем уровне, а производительность невероятная. Он без усилий справляется со всеми моими игровыми
                    и графическими задачами. Настоятельно рекомендую обратить на них внимание!</p>
            </div>
            <div class="review-item">
                <div class="top-review">
                    <span class="name-review">Елизавета</span>
                    <span class="date-review">18 Февраля 2024</span>
                </div>
                <div class="rating-review">
                    <img src="./assets/images/stars/star-bg.svg" alt="">
                    <img src="./assets/images/stars/star-bg.svg" alt="">
                    <img src="./assets/images/stars/star-bg.svg" alt="">
                    <img src="./assets/images/stars/star-bg.svg" alt="">
                    <img src="./assets/images/stars/star-bg.svg" alt="">
                </div>
                <p class="info-review">Только что получил свой новый игровой ПК от Byte Builders, и вау, какая разница!
                    Графика потрясающая, и он работает без сбоев. Команда была очень полезной, помогая мне с выбором.
                    Определенно отличный опыт!</p>
            </div>
            <div class="review-item">
                <div class="top-review">
                    <span class="name-review">Михаил</span>
                    <span class="date-review">09 Июля 2023</span>
                </div>
                <div class="rating-review">
                    <img src="./assets/images/stars/star-bg.svg" alt="">
                    <img src="./assets/images/stars/star-bg.svg" alt="">
                    <img src="./assets/images/stars/star-bg.svg" alt="">
                    <img src="./assets/images/stars/star-bg.svg" alt="">
                    <img src="./assets/images/stars/star-no-bg.svg" alt="">
                </div>
                <p class="info-review">Я заказал рабочий ПК от Pixel Pros, и он пришел быстро. Настройка была легкой, а
                    производительность именно такой, как мне нужна для моих проектов по видеомонтажу. Их обслуживание клиентов
                    также было фантастическим. Большой палец вверх!</p>
            </div>
            <div class="review-item">
                <div class="top-review">
                    <span class="name-review">София</span>
                    <span class="date-review">03 Ноября 2024</span>
                </div>
                <div class="rating-review">
                    <img src="./assets/images/stars/star-bg.svg" alt="">
                    <img src="./assets/images/stars/star-bg.svg" alt="">
                    <img src="./assets/images/stars/star-bg.svg" alt="">
                    <img src="./assets/images/stars/star-bg.svg" alt="">
                    <img src="./assets/images/stars/star-no-bg.svg" alt="">
                </div>
                <p class="info-review">Мой опыт с Custom PC Depot был потрясающим! Я заказал высокопроизводительную машину для
                    игр, и она превзошла все мои ожидания. Внимание к деталям в сборке впечатляет, и она запускает все мои игры
                    на максимальных настройках без проблем.</p>
            </div>
            <div class="review-item">
                <div class="top-review">
                    <span class="name-review">Александр</span>
                    <span class="date-review">26 Апреля 2024</span>
                </div>
                <div class="rating-review">
                    <img src="./assets/images/stars/star-bg.svg" alt="">
                    <img src="./assets/images/stars/star-bg.svg" alt="">
                    <img src="./assets/images/stars/star-bg.svg" alt="">
                    <img src="./assets/images/stars/star-bg.svg" alt="">
                    <img src="./assets/images/stars/star-bg.svg" alt="">
                </div>
                <p class="info-review">Я недавно купил кастомный ПК в Tech Haven, и я не мог быть более доволен! Качество
                    сборки на высшем уровне, а производительность невероятная. Он без усилий справляется со всеми моими игровыми
                    и графическими задачами. Настоятельно рекомендую обратить на них внимание!</p>
            </div>
        </div>
        <button class="primary-btn review-modal-open">Добавить отзыв
            <img src="./assets/images/buttons/plus-review.svg" alt="">
        </button>
    </section>


    <section class="faq">
        <h2 class="hedline-h2">Часто задаваемые вопросы</h2>
        <div class="faq-cont">
            <div class="faq-column">
                <div class="faq-item">
                    <div class="name-item-faq">
                        <span>Вопрос номер один lorem ipsum</span>
                        <div class="btn-arr-faq">
                            <img class="arrow-up" src="./assets/images/icons/arrow-up.svg" alt="">
                            <img class="arrow-dowm  " src="./assets/images/icons/arrow-down.svg" alt="">
                        </div>
                    </div>
                    <p class="answer-faq">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    </p>
                </div>
                <div class="faq-item">
                    <div class="name-item-faq">
                        <span>Вопрос номер два lorem ipsum</span>
                        <div class="btn-arr-faq">
                            <img class="arrow-up  " src="./assets/images/icons/arrow-up.svg" alt="">
                            <img class="arrow-dowm" src="./assets/images/icons/arrow-down.svg" alt="">
                        </div>
                    </div>
                    <p class="answer-faq">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    </p>
                </div>
                <div class="faq-item">
                    <div class="name-item-faq">
                        <span>Вопрос номер один lorem ipsum</span>
                        <div class="btn-arr-faq">
                            <img class="arrow-up  " src="./assets/images/icons/arrow-up.svg" alt="">
                            <img class="arrow-dowm" src="./assets/images/icons/arrow-down.svg" alt="">
                        </div>
                    </div>
                    <p class="answer-faq  ">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    </p>
                </div>
                <div class="faq-item">
                    <div class="name-item-faq">
                        <span>Вопрос номер один lorem ipsum</span>
                        <div class="btn-arr-faq">
                            <img class="arrow-up  " src="./assets/images/icons/arrow-up.svg" alt="">
                            <img class="arrow-dowm" src="./assets/images/icons/arrow-down.svg" alt="">
                        </div>
                    </div>
                    <p class="answer-faq  ">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    </p>
                </div>
            </div>
            <div class="faq-column">
                <div class="faq-item">
                    <div class="name-item-faq">
                        <span>Вопрос номер два lorem ipsum</span>
                        <div class="btn-arr-faq">
                            <img class="arrow-up  " src="./assets/images/icons/arrow-up.svg" alt="">
                            <img class="arrow-dowm" src="./assets/images/icons/arrow-down.svg" alt="">
                        </div>
                    </div>
                    <p class="answer-faq">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    </p>
                </div>
                <div class="faq-item">
                    <div class="name-item-faq">
                        <span>Вопрос номер один lorem ipsum</span>
                        <div class="btn-arr-faq">
                            <img class="arrow-up  " src="./assets/images/icons/arrow-up.svg" alt="">
                            <img class="arrow-dowm" src="./assets/images/icons/arrow-down.svg" alt="">
                        </div>
                    </div>
                    <p class="answer-faq  ">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    </p>
                </div>
                <div class="faq-item">
                    <div class="name-item-faq">
                        <span>Вопрос номер один lorem ipsum</span>
                        <div class="btn-arr-faq">
                            <img class="arrow-up  " src="./assets/images/icons/arrow-up.svg" alt="">
                            <img class="arrow-dowm" src="./assets/images/icons/arrow-down.svg" alt="">
                        </div>
                    </div>
                    <p class="answer-faq  ">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    </p>
                </div>
                <div class="faq-item">
                    <div class="name-item-faq">
                        <span>Вопрос номер один lorem ipsum</span>
                        <div class="btn-arr-faq">
                            <img class="arrow-up  " src="./assets/images/icons/arrow-up.svg" alt="">
                            <img class="arrow-dowm" src="./assets/images/icons/arrow-down.svg" alt="">
                        </div>
                    </div>
                    <p class="answer-faq  ">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    </p>
                </div>
            </div>
            <div class="faq-column">
                <div class="faq-item">
                    <div class="name-item-faq">
                        <span>Вопрос номер два lorem ipsum</span>
                        <div class="btn-arr-faq">
                            <img class="arrow-up  " src="./assets/images/icons/arrow-up.svg" alt="">
                            <img class="arrow-dowm" src="./assets/images/icons/arrow-down.svg" alt="">
                        </div>
                    </div>
                    <p class="answer-faq ">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    </p>
                </div>
                <div class="faq-item">
                    <div class="name-item-faq">
                        <span>Вопрос номер один lorem ipsum</span>
                        <div class="btn-arr-faq">
                            <img class="arrow-up  " src="./assets/images/icons/arrow-up.svg" alt="">
                            <img class="arrow-dowm" src="./assets/images/icons/arrow-down.svg" alt="">
                        </div>
                    </div>
                    <p class="answer-faq  ">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    </p>
                </div>
                <div class="faq-item">
                    <div class="name-item-faq">
                        <span>Вопрос номер один lorem ipsum</span>
                        <div class="btn-arr-faq">
                            <img class="arrow-up  " src="./assets/images/icons/arrow-up.svg" alt="">
                            <img class="arrow-dowm" src="./assets/images/icons/arrow-down.svg" alt="">
                        </div>
                    </div>
                    <p class="answer-faq  ">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    </p>
                </div>
                <div class="faq-item">
                    <div class="name-item-faq">
                        <span>Вопрос номер один lorem ipsum</span>
                        <div class="btn-arr-faq">
                            <img class="arrow-up  " src="./assets/images/icons/arrow-up.svg" alt="">
                            <img class="arrow-dowm" src="./assets/images/icons/arrow-down.svg" alt="">
                        </div>
                    </div>
                    <p class="answer-faq  ">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    </p>
                </div>
            </div>
        </div>
        <button class="primary-btn open-form">Задать вопрос
            <img src="./assets/images/icons/plus.svg" alt="">
        </button>
    </section>

    <section class="our-brands">
        <h2 class="hedline-h2">Наши бренды</h2>
        <div class="brand-cont">
            <div class="item-brand">
                <img src="./assets/images/logo-company/intel.svg" alt="">
            </div>
            <div class=" item-brand">
                <img src="./assets/images/logo-company/ryzen 1.svg" alt="">
            </div>
            <div class="item-brand">
                <img src="./assets/images/logo-company/logitech-2-1 1.svg" alt="">
            </div>
            <div class="item-brand">
                <img src="./assets/images/logo-company/asus-logo 1.svg" alt="">
            </div>
            <div class="item-brand">
                <img src="./assets/images/logo-company/kingston-technology 1.svg" alt="">
            </div>
        </div>
    </section>
</div>
<div class="cont-modal">
    <div class="modal form-modal">
        <form id="form-modal" method="post" novalidate>
            <div class="main-content-form">
                <h2 class="name-review ">Задать вопрос</h2>
                <span class="subtitle-form">Отправим ответ на ваш e-mail сегодня или завтра, подготовим 3 варианта
            конфигураций
            под ваши задачи </span>
                <div class="cont-input">
                    <div class="form-group">
                        <label for="name">Имя <span class="required">*</span></label>
                        <input type="text" id="name" name="name" placeholder="Фёдор Владимирович" required>
                        <span class="error-message">Напишите своё имя</span>
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail <span class="required">*</span></label>
                        <input type="email" id="email" name="email" placeholder="mail@gmail.com" required>
                        <span class="error-message">Введите корректный E-mail</span>
                    </div>
                    <div class="form-group full-width">
                        <label for="message">Сообщение <span class="required">*</span></label>
                        <textarea id="message" name="message" placeholder="Напишите свой вопрос" required></textarea>
                        <span class="error-message">Задайте вопрос</span>
                    </div>
                    <button type="submit" class="submit-button" disabled>Отправить</button>
                </div>
            </div>
            <div class="thaks-screen">
                <h2 class="hedline-h2">Спасибо!</h2>
                <p class="subtitle-thanks">Сообщение отправлено</p>
                <img src="./assets/images/thn1.png" alt="Сообщение отправлено">
            </div>
            <div class="error-screen">
                <h2 class="hedline-h2">Ошибка!</h2>
                <p class="subtitle-thanks">Что-то пошло не так.
                    Пожалуйста, повторите попытку позже.</p>
                <img src="./assets/images/error.png" alt="Сообщение отправлено">
            </div>
        </form>
        <div class="close-modal"></div>
    </div>
</div>

<div class="review-cont-modal">
    <div class="modal contact-form">
        <form action="#" method="post" novalidate>
            <h2 class="name-review " style="margin-bottom: 20px;">Оставьте отзыв</h2>
            <div class="cont-input">
                <div class="form-group">
                    <label for="name">Имя <span class="required">*</span></label>
                    <input type="text" id="name" name="name" placeholder="Фёдор Владимирович" required>
                    <span class="error-message">Напишите своё имя</span>
                </div>
                <div class="form-group">
                    <label for="email">E-mail <span class="required">*</span></label>
                    <input type="email" id="email" name="email" placeholder="mail@mail.com" required>
                    <span class="error-message">Введите корректный E-mail</span>
                </div>
            </div>
            <!-- <div class="form-group full-width category-group">

              <label>Выберите категорию для отзыва <span class="required">*</span></label>
              <div class="category-options">
                <button type="button" class="category-option">Качество конфигураций</button>
                <button type="button" class="category-option">Работа сборщика</button>
                <button type="button" class="category-option">Оценка сборки</button>
                <button type="button" class="category-option">Консультация</button>
              </div>
              <span class="error-message">Выберите хотя бы одну категорию</span>
            </div> -->

            <div class="form-group full-width category-group">
                <label>Выберите категорию для отзыва <span class="required">*</span></label>
                <div class="category-options">
                    <label class="category-option">
                        <input type="radio" name="category" value="Качество конфигураций" required>
                        Качество конфигураций
                    </label>
                    <label class="category-option">
                        <input type="radio" name="category" value="Работа сборщика" required>
                        Работа сборщика
                    </label>
                    <label class="category-option">
                        <input type="radio" name="category" value="Оценка сборки" required>
                        Оценка сборки
                    </label>
                    <label class="category-option">
                        <input type="radio" name="category" value="Консультация" required>
                        Консультация
                    </label>
                </div>
                <span class="error-message">Выберите хотя бы одну категорию</span>
            </div>

            <div class="form-group full-width">
                <label for="message">Сообщение</label>
                <textarea id="message" name="message" placeholder="Напишите свой отзыв"></textarea>
                <span class="error-message">Напишите свой отзыв</span>
            </div>
            <div class="cont-input rating-inp">
                <div class="form-group rating-group">
                    <label>Выбранo звёзд: <span id="rating-value">0</span> из 5</label>
                    <div class="star-rating" data-selected="0">
                        <span class="star" data-value="1"></span>
                        <span class="star" data-value="2"></span>
                        <span class="star" data-value="3"></span>
                        <span class="star" data-value="4"></span>
                        <span class="star" data-value="5"></span>
                    </div>
                </div>
                <button type="submit" class="submit-button" disabled>Отправить</button>
            </div>
            <div class="thaks-screen">
                <h2 class="hedline-h2">Спасибо!</h2>
                <p class="subtitle-thanks">Сообщение отправлено</p>
                <img src="./assets/images/thn2.png" alt="Сообщение отправлено">
            </div>
            <div class="error-screen">
                <h2 class="hedline-h2">Ошибка!</h2>
                <p class="subtitle-thanks">Что-то пошло не так.
                    Пожалуйста, повторите попытку позже.</p>
                <img src="./assets/images/error.png" alt="Сообщение отправлено">
            </div>
        </form>
        <div class="close-modal"></div>
    </div>
</div>
</body>

</html>
