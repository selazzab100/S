(function () {
    const body = document.body;
    const navToggle = document.querySelector('.nav-toggle');
    const primaryNav = document.querySelector('.primary-navigation');
    const langButtons = document.querySelectorAll('.language-switcher button');
    const counters = document.querySelectorAll('.counter-value');

    if (navToggle && primaryNav) {
        const setNavState = (isOpen) => {
            primaryNav.classList.toggle('open', isOpen);
            body.classList.toggle('nav-open', isOpen);
            navToggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
        };

        navToggle.addEventListener('click', () => {
            const isOpen = !primaryNav.classList.contains('open');
            setNavState(isOpen);
        });

        primaryNav.querySelectorAll('a').forEach((link) => {
            link.addEventListener('click', () => {
                if (primaryNav.classList.contains('open')) {
                    setNavState(false);
                }
            });
        });

        document.addEventListener('keydown', (event) => {
            if (event.key === 'Escape' && primaryNav.classList.contains('open')) {
                setNavState(false);
            }
        });

        document.addEventListener('click', (event) => {
            if (primaryNav.classList.contains('open') && !primaryNav.contains(event.target) && event.target !== navToggle) {
                setNavState(false);
            }
        });
    }

    const getPrefix = (element) => {
        const isEnglish = body.classList.contains('lang-en-active');
        if (isEnglish) {
            return element.getAttribute('data-prefix-en') || element.getAttribute('data-prefix') || '';
        }
        return element.getAttribute('data-prefix-fr') || element.getAttribute('data-prefix') || '';
    };

    const getSuffix = (element) => {
        const isEnglish = body.classList.contains('lang-en-active');
        if (isEnglish) {
            return element.getAttribute('data-suffix-en') || element.getAttribute('data-suffix') || '';
        }
        return element.getAttribute('data-suffix-fr') || element.getAttribute('data-suffix') || '';
    };

    const setLanguage = (lang) => {
        const isEnglish = lang === 'en';
        body.classList.toggle('lang-en-active', isEnglish);
        body.classList.toggle('lang-fr-active', !isEnglish);
        langButtons.forEach((btn) => {
            const active = btn.dataset.lang === lang;
            btn.classList.toggle('active', active);
            btn.setAttribute('aria-pressed', active ? 'true' : 'false');
        });

        const locale = isEnglish ? 'en-US' : 'fr-FR';
        counters.forEach((counter) => {
            if (counter.dataset.finalValue) {
                counter.textContent = getPrefix(counter) + Number(counter.dataset.finalValue).toLocaleString(locale) + getSuffix(counter);
            }
        });
    };

    langButtons.forEach((button) => {
        button.addEventListener('click', () => {
            setLanguage(button.dataset.lang);
        });
    });

    if (body.classList.contains('lang-en-active')) {
        setLanguage('en');
    } else {
        setLanguage('fr');
    }

    const animateCounter = (element) => {
        const target = parseInt(element.getAttribute('data-target'), 10);
        const duration = 1600;
        const start = performance.now();

        const step = (now) => {
            const progress = Math.min((now - start) / duration, 1);
            const value = Math.floor(progress * target);
            const locale = body.classList.contains('lang-en-active') ? 'en-US' : 'fr-FR';
            element.textContent = getPrefix(element) + value.toLocaleString(locale) + getSuffix(element);
            if (progress < 1) {
                requestAnimationFrame(step);
            } else {
                element.dataset.finalValue = target;
            }
        };

        requestAnimationFrame(step);
    };

    if ('IntersectionObserver' in window) {
        const observer = new IntersectionObserver((entries, obs) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    animateCounter(entry.target);
                    obs.unobserve(entry.target);
                }
            });
        }, { threshold: 0.6 });

        counters.forEach((counter) => observer.observe(counter));
    } else {
        counters.forEach((counter) => animateCounter(counter));
    }
})();
