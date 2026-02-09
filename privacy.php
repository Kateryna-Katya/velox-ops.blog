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
    <div class="container">
        <span class="section-tag">Privacy Policy</span>
        <h1 class="section-title">Политика <span class="text-gradient">конфиденциальности</span></h1>

        <div class="legal-content">
            <div class="policy-hero-card">
                <p>
                    Настоящая политика распространяется на данные, предоставляемые клиентам <strong><?= $domainTitle ?></strong> для оказания услуг по карьерному консультированию и взаимодействия с AI-инструментами.
                </p>
            </div>

            <div class="policy-notice">
                <p>
                    <strong><?= $domainTitle ?></strong> оставляет за собой право изменять положения Политики. Предоставляя данные, вы даете согласие на их обработку способами, указанными ниже.
                </p>
            </div>

            <h2>Порядок сбора и хранения</h2>
            <div class="storage-info">
                <div class="storage-item">
                    <i data-lucide="calendar"></i>
                    <span>Срок хранения до <strong>75 лет</strong></span>
                </div>
                <div class="storage-item">
                    <i data-lucide="user-check"></i>
                    <span>Только с вашего согласия</span>
                </div>
            </div>

            <div class="data-collection-grid">
                <div class="data-box">
                    <h3><i data-lucide="cpu"></i> Техническая информация</h3>
                    <ul>
                        <li>IP-адрес и время доступа</li>
                        <li>Источники перехода на <strong><?= $fullDomain ?></strong></li>
                        <li>Данные браузера и просмотры</li>
                    </ul>
                </div>
                <div class="data-box">
                    <h3><i data-lucide="contact"></i> Персонализация</h3>
                    <ul>
                        <li>Имя пользователя</li>
                        <li>E-mail и номер телефона</li>
                        <li>Данные о контрактах</li>
                    </ul>
                </div>
            </div>

            <h2>Цели обработки</h2>
            <ul class="legal-list">
                <li>Предоставление доступа к платформе обучения.</li>
                <li>Учет пожеланий при разработке новых решений.</li>
                <li>Информирование об акциях и материалах блога.</li>
            </ul>

            <div class="rights-block">
                <h2>Ваши права</h2>
                <p>Для редактирования данных свяжитесь с командой <strong><?= $domainTitle ?></strong>:</p>
                <a href="mailto:hello@<?= $fullDomain ?>" class="contact-btn">hello@<?= $fullDomain ?></a>
            </div>
        </div>
    </div>
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