<?php

$fullDomain = strtolower($_SERVER['HTTP_HOST'] ?? '');
$fullDomain = explode(':', $fullDomain)[0];

$parts = explode('.', $fullDomain);
$domainSlug = count($parts) >= 2
        ? $parts[count($parts) - 2]
        : $fullDomain;

$domainTitle = ucwords(str_replace('-', ' ', $domainSlug));

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $domainTitle ?> — Практический AI для каждого</title>
    
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><defs><linearGradient id='g' x1='0%' y1='0%' x2='100%' y2='100%'><stop offset='0%' style='stop-color:%233b82f6'/><stop offset='100%' style='stop-color:%238b5cf6'/></linearGradient></defs><circle cx='50' cy='50' r='40' fill='none' stroke='url(%23g)' stroke-width='8'/><circle cx='50' cy='50' r='10' fill='url(%23g)'/><path d='M50 10 L50 30 M50 70 L50 90 M10 50 L30 50 M70 50 L90 50' stroke='url(%23g)' stroke-width='6' stroke-linecap='round'/></svg>">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500&family=Outfit:wght@600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header class="header">
        <div class="container header__container">
            <a href="./#home" class="logo">
                <span class="logo__icon"></span>
                <span class="logo__text"><?= $domainTitle ?></span>
            </a>
            
            <nav class="nav" id="nav">
                <ul class="nav__list">
                    <li><a href="./#home" class="nav__link">Главная</a></li>
                    <li><a href="./#features" class="nav__link">Возможности</a></li>
                    <li><a href="./#cases" class="nav__link">Кейсы</a></li>
                    <li><a href="./#education" class="nav__link">Обучение</a></li>
                    <li><a href="./#faq" class="nav__link">Вопросы</a></li>
                </ul>
            </nav>

            <a href="./#contact" class="btn btn--outline header__btn">Связаться</a>
            
            <button class="burger" aria-label="Menu" id="burger">
                <span></span>
            </button>
        </div>
    </header>
    <main class="legal-page pages">
    <section class="legal-content-wrapper">
        <div class="container">
            <div class="section-head section-head--left">
                <div class="badge">Legal Documents</div>
                <h1 class="section-title">Политика использования <span class="text-gradient">файлов cookie</span></h1>
            </div>

            <div class="legal-content">
                <p class="lead-text">
                    Добро пожаловать на <strong><?= $domainTitle ?></strong>! Чтобы улучшить ваш опыт
                    взаимодействия с нашим сайтом, обеспечить его корректную работу и
                    анализировать активность пользователей, мы используем файлы cookie и
                    схожие технологии.
                </p>

                <h2>Что такое файлы cookie?</h2>
                <p>
                    Файл cookie — это небольшой фрагмент данных (текстовый файл),
                    который веб-сайт сохраняет на вашем устройстве, когда вы его посещаете. Это позволяет платформе 
                    <strong><?= $domainTitle ?></strong> "помнить" ваши действия и предпочтения 
                    (например, логин, язык, настройки региона Франция и другие параметры) 
                    в течение определенного времени.
                </p>

                <h2>Какие типы файлов cookie мы используем?</h2>
                <p>
                    Мы классифицируем файлы cookie, используемые на сайте <strong><?= $fullDomain ?></strong>, по
                    следующим категориям:
                </p>
                <ul class="legal-list">
                    <li>
                        <strong>Строго необходимые:</strong> Критически важны для функционирования. Позволяют перемещаться по страницам <strong><?= $domainTitle ?></strong>.
                    </li>
                    <li>
                        <strong>Аналитические:</strong> Сбор анонимной информации о том, как посетители используют наш сайт.
                    </li>
                    <li>
                        <strong>Функциональные:</strong> Позволяют запоминать ваш выбор для персонализированного опыта в рамках обучения ИИ.
                    </li>
                    <li>
                        <strong>Маркетинговые:</strong> Используются для доставки объявлений, соответствующих вашим интересам.
                    </li>
                </ul>

                <h2>Зачем мы используем файлы cookie?</h2>
                <ul class="legal-list">
                    <li>Обеспечение стабильной и безопасной работы платформы.</li>
                    <li>Анализ пользовательского поведения для оптимизации практик.</li>
                    <li>Персонализация контента для пользователей в Европе.</li>
                    <li>Предоставление релевантных маркетинговых материалов.</li>
                </ul>

                <h2>Ваш выбор и управление</h2>
                <p>
                    Вы имеете полный контроль над файлами cookie. Вы можете в любой
                    момент изменить свои настройки в браузере. Однако, отключение строго необходимых cookie может привести к
                    некорректной работе некоторых функций.
                </p>

                <h2>Файлы cookie третьих сторон</h2>
                <p>
                    На некоторых страницах мы используем внешние сервисы, такие как Google Analytics или библиотеки визуализации (например, GSAP, Lucide). Мы рекомендуем ознакомиться с их политиками конфиденциальности.
                </p>

                <div class="contact-info-block">
                    <h2>Контактная информация</h2>
                    <p>
                        Если у вас возникли вопросы касательно политики на <strong><?= $domainTitle ?></strong>, свяжитесь с нами:
                    </p>
                    <ul class="contact-data-list">
                        <li>
                            <i data-lucide="mail"></i>
                            <strong>Email:</strong> <a href="mailto:support@<?= $fullDomain ?>">support@<?= $fullDomain ?></a>
                        </li>
                        <li>
                            <i data-lucide="phone"></i>
                            <strong>Телефон:</strong> <a href="tel:+33189480586">+33 1 89 48 05 86</a>
                        </li>
                        <li>
                            <i data-lucide="map-pin"></i>
                            <strong>Адрес:</strong> 75 Rue de Rivoli, 75001 Paris, France
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</main>

    <footer class="footer">
        <div class="container footer__grid">
            <div class="footer__col">
                <a href="/" class="logo footer__logo">
                    <span class="logo__icon"></span>
                    <span class="logo__text"><?= $domainTitle ?></span>
                </a>
                <p class="footer__description">
                    Технологии нового поколения, доступные каждому. Переосмыслите подход к развитию вместе с нами.
                </p>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Навигация</h4>
                <ul class="footer__links">
                    <li><a href="./#home">Главная</a></li>
                    <li><a href="./#features">Возможности</a></li>
                    <li><a href="./#cases">Кейсы</a></li>
                    <li><a href="./#education">Обучение</a></li>
                </ul>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Документы</h4>
                <ul class="footer__links">
                    <li><a href="./privacy.php">Privacy Policy</a></li>
                    <li><a href="./cookies.php">Cookie Policy</a></li>
                    <li><a href="./terms.php">Terms of Service</a></li>
                    <li><a href="./return.php">Return Policy</a></li>
                    <li><a href="./disclaimer.php">Disclaimer</a></li>
                    <li><a href="./contact.php">Contact Us</a></li>
                    <li><a href="./personal-data-policy.php">Data Policy</a></li>
                </ul>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Контакты</h4>
                <ul class="footer__contacts">
                    <li>
                        <i data-lucide="phone"></i>
                        <a href="tel:+33189480586">+33 1 89 48 05 86</a>
                    </li>
                    <li>
                        <i data-lucide="mail"></i>
                        <a href="mailto:hello@<?= $fullDomain ?>">hello@<?= $fullDomain ?></a>
                    </li>
                    <li>
                        <i data-lucide="map-pin"></i>
                        <span>75 Rue de Rivoli, 75001 Paris, France</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="container footer__bottom">
            <p>&copy; 2026 <?= $domainTitle ?>. Все права защищены. Платформа уже доступна в Европе.</p>
        </div>
    </footer>
    <div class="menu-overlay" id="menuOverlay">
        <div class="menu-overlay__content">
            <ul class="mobile-nav">
                <li><a href="./#home" class="mobile-nav__link">Главная</a></li>
                <li><a href="./#features" class="mobile-nav__link">Возможности</a></li>
                <li><a href="./#cases" class="mobile-nav__link">Кейсы</a></li>
                <li><a href="./#education" class="mobile-nav__link">Обучение</a></li>
                <li><a href="./#faq" class="mobile-nav__link">Вопросы</a></li>
            </ul>
            <a href="./#contact" class="btn btn--primary mobile-nav__btn">Запросить доступ</a>
        </div>
    </div>
    
    <div class="cookie-popup" id="cookiePopup">
        <div class="cookie-popup__container">
            <p class="cookie-popup__text">
                Этот сайт использует cookies для улучшения работы. Подробнее — в нашей 
                <a href="./cookies.php">Cookie политике</a>.
            </p>
            <button class="btn btn--primary btn--sm" id="acceptCookies">Принять</button>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    
    <script src="https://unpkg.com/lucide@latest"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    
    <script src="script.js"></script>
</body>
</html>