document.addEventListener('DOMContentLoaded', () => {
    // Регистрация плагина ScrollTrigger для корректной работы GSAP
    gsap.registerPlugin(ScrollTrigger);
    
    // Инициализация иконок Lucide
    lucide.createIcons();

    // ==========================================
    // 1. МОБИЛЬНОЕ МЕНЮ
    // ==========================================
    const burger = document.getElementById('burger');
    const menuOverlay = document.getElementById('menuOverlay');
    const mobileLinks = document.querySelectorAll('.mobile-nav__link');

    const toggleMenu = () => {
        burger.classList.toggle('is-active');
        menuOverlay.classList.toggle('is-open');
        document.body.style.overflow = menuOverlay.classList.contains('is-open') ? 'hidden' : '';
    };

    if (burger) {
        burger.addEventListener('click', toggleMenu);
    }

    mobileLinks.forEach(link => {
        link.addEventListener('click', toggleMenu);
    });

    // ==========================================
    // 2. COOKIE POPUP
    // ==========================================
    const cookiePopup = document.getElementById('cookiePopup');
    const acceptBtn = document.getElementById('acceptCookies');

    if (cookiePopup && !localStorage.getItem('cookiesAccepted')) {
        setTimeout(() => {
            cookiePopup.classList.add('show');
        }, 2000);
    }

    if (acceptBtn) {
        acceptBtn.addEventListener('click', () => {
            localStorage.setItem('cookiesAccepted', 'true');
            cookiePopup.classList.remove('show');
        });
    }

    // ==========================================
    // 3. ГЛУБОКАЯ GSAP АНИМАЦИЯ
    // ==========================================

    // Анимация Хедера при загрузке
    gsap.from('.header', { 
        y: -100, 
        opacity: 0, 
        duration: 1, 
        ease: 'power3.out' 
    });

    // Анимация Hero Section (сразу)
    const heroTl = gsap.timeline();
    heroTl.from('.hero__badge', { opacity: 0, y: 20, duration: 0.6, delay: 0.5 })
          .from('.hero__title', { opacity: 0, y: 30, duration: 0.8 }, "-=0.3")
          .from('.hero__subtitle', { opacity: 0, y: 20, duration: 0.8 }, "-=0.5")
          .from('.hero__actions', { opacity: 0, y: 20, duration: 0.8 }, "-=0.6")
          .from('.hero__card', { opacity: 0, scale: 0.95, duration: 1.2, ease: 'expo.out' }, "-=0.8");

    // Универсальный скролл-ревил для заголовков
    document.querySelectorAll('.section-head').forEach(head => {
        gsap.from(head, {
            scrollTrigger: {
                trigger: head,
                start: 'top 90%',
            },
            opacity: 0,
            y: 30,
            duration: 1,
            ease: 'power2.out'
        });
    });

    // ГЛУБОКАЯ ПОЭЛЕМЕНТНАЯ АНИМАЦИЯ (Карточки, списки, фичи)
    // Здесь мы анимируем каждый элемент отдельно, когда он входит в зону видимости
    const revealSelectors = [
        '.feature-card', 
        '.case-card', 
        '.transform-item', 
        '.c-feat', 
        '.footer__col'
    ];

    revealSelectors.forEach(selector => {
        const elements = document.querySelectorAll(selector);
        
        elements.forEach((el) => {
            gsap.from(el, {
                scrollTrigger: {
                    trigger: el,
                    start: 'top 85%',
                    toggleActions: 'play none none none'
                },
                opacity: 0,
                y: 40,
                duration: 0.8,
                ease: 'power2.out',
                // Микро-анимация иконок внутри элементов при их появлении
                onStart: () => {
                    const icon = el.querySelector('i, .feature-card__icon, .logo__icon');
                    if(icon) {
                        gsap.from(icon, { 
                            scale: 0, 
                            rotation: -15, 
                            duration: 0.6, 
                            delay: 0.2, 
                            ease: 'back.out(1.7)' 
                        });
                    }
                }
            });
        });
    });

    // ==========================================
    // 4. АККОРДЕОН (Без анимации появления)
    // ==========================================
    const accordionItems = document.querySelectorAll('.accordion-item');
    
    accordionItems.forEach(item => {
        const header = item.querySelector('.accordion-header');
        header.addEventListener('click', () => {
            const isActive = item.classList.contains('active');
            
            // Закрываем другие, если нужно (режим "только один открыт")
            accordionItems.forEach(i => i.classList.remove('active'));
            
            if (!isActive) {
                item.classList.add('active');
            }
        });
    });

    // ==========================================
    // 5. КОНТАКТНАЯ ФОРМА И ВАЛИДАЦИЯ
    // ==========================================
    const contactForm = document.getElementById('contactForm');
    const phoneInput = document.getElementById('phone');
    const captchaTask = document.getElementById('captcha-task');
    const captchaInput = document.getElementById('captcha-input');
    
    // Генерация капчи
    let n1 = Math.floor(Math.random() * 10) + 1;
    let n2 = Math.floor(Math.random() * 10) + 1;
    let answer = n1 + n2;
    if(captchaTask) captchaTask.textContent = `${n1} + ${n2} = ?`;

    // Валидация телефона (только цифры)
    if(phoneInput) {
        phoneInput.addEventListener('input', (e) => {
            e.target.value = e.target.value.replace(/[^\d+]/g, '');
        });
    }

    if(contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const msg = document.getElementById('formMessage');
            
            if (parseInt(captchaInput.value) !== answer) {
                msg.textContent = 'Неверный ответ капчи';
                msg.className = 'form__message form__message--error';
                return;
            }

            const btn = document.getElementById('submitBtn');
            btn.disabled = true;
            btn.querySelector('span').textContent = 'Отправка...';

            // Имитация AJAX
            setTimeout(() => {
                msg.textContent = 'Сообщение успешно отправлено!';
                msg.className = 'form__message form__message--success';
                btn.disabled = false;
                btn.querySelector('span').textContent = 'Запросить доступ';
                contactForm.reset();
                
                // Обновление капчи
                n1 = Math.floor(Math.random() * 10) + 1;
                n2 = Math.floor(Math.random() * 10) + 1;
                answer = n1 + n2;
                captchaTask.textContent = `${n1} + ${n2} = ?`;
            }, 1500);
        });
    }

    // ==========================================
    // 6. SWIPER (СЛАЙДЕР КЕЙСОВ)
    // ==========================================
    if (document.querySelector('.cases-slider')) {
        new Swiper('.cases-slider', {
            slidesPerView: 1,
            spaceBetween: 20,
            loop: true,
            pagination: { el: '.swiper-pagination', clickable: true },
            navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev' },
            breakpoints: {
                768: { slidesPerView: 2 },
                1024: { slidesPerView: 3, spaceBetween: 30 }
            }
        });
    }
});