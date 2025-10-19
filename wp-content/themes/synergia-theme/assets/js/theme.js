(function () {
    const body = document.body;
    const navToggle = document.querySelector('.nav-toggle');
    const primaryNav = document.querySelector('.primary-navigation');
    const navToggleLabel = navToggle ? navToggle.querySelector('.nav-toggle-label') : null;
    const navToggleOpenLabel = navToggle ? navToggle.getAttribute('data-open-label') : '';
    const navToggleCloseLabel = navToggle ? navToggle.getAttribute('data-close-label') : '';
    const navToggleIcon = navToggle ? navToggle.querySelector('.nav-toggle-icon') : null;
    const menuOverlay = document.querySelector('.menu-overlay');
    const langButtons = document.querySelectorAll('.language-switcher button');
    const counters = document.querySelectorAll('.counter-value');

    const setNavigationTabState = (isDisabled) => {
        if (!primaryNav) {
            return;
        }

        const focusable = primaryNav.querySelectorAll('a, button');
        focusable.forEach((element) => {
            if (isDisabled) {
                element.setAttribute('tabindex', '-1');
            } else {
                element.removeAttribute('tabindex');
            }
        });
    };

    if (primaryNav) {
        primaryNav.setAttribute('aria-hidden', 'true');
        setNavigationTabState(true);
    }

    if (body) {
        body.classList.add('js-enabled');
    }

    const closeNavigation = () => {
        if (!primaryNav || !navToggle) {
            return;
        }

        primaryNav.classList.remove('is-open');
        navToggle.setAttribute('aria-expanded', 'false');
        primaryNav.setAttribute('aria-hidden', 'true');
        setNavigationTabState(true);

        if (navToggleLabel) {
            navToggleLabel.textContent = navToggleOpenLabel || navToggleLabel.textContent;
        }

        if (navToggleIcon) {
            navToggleIcon.textContent = '☰';
        }

        if (menuOverlay) {
            menuOverlay.classList.remove('is-visible');
            menuOverlay.setAttribute('hidden', '');
        }

        body && body.classList.remove('nav-open');
    };

    const openNavigation = () => {
        if (!primaryNav || !navToggle) {
            return;
        }

        primaryNav.classList.add('is-open');
        navToggle.setAttribute('aria-expanded', 'true');
        primaryNav.setAttribute('aria-hidden', 'false');
        setNavigationTabState(false);

        if (navToggleLabel) {
            navToggleLabel.textContent = navToggleCloseLabel || navToggleLabel.textContent;
        }

        if (navToggleIcon) {
            navToggleIcon.textContent = '✕';
        }

        if (menuOverlay) {
            menuOverlay.classList.add('is-visible');
            menuOverlay.removeAttribute('hidden');
        }

        body && body.classList.add('nav-open');

        const firstLink = primaryNav.querySelector('a');
        if (firstLink) {
            firstLink.focus();
        }
    };

    if (navToggle && primaryNav) {
        navToggle.addEventListener('click', () => {
            if (primaryNav.classList.contains('is-open')) {
                closeNavigation();
            } else {
                openNavigation();
            }
        });

        if (menuOverlay) {
            menuOverlay.addEventListener('click', closeNavigation);
        }

        primaryNav.addEventListener('click', (event) => {
            if (event.target instanceof HTMLElement && event.target.tagName === 'A') {
                closeNavigation();
            }
        });

        window.addEventListener('keydown', (event) => {
            if (event.key === 'Escape' && primaryNav.classList.contains('is-open')) {
                event.preventDefault();
                closeNavigation();
                navToggle.focus();
            }
        });

        window.addEventListener('resize', () => {
            if (!primaryNav.classList.contains('is-open')) {
                return;
            }

            if (window.innerWidth >= 1200) {
                closeNavigation();
            }
        });
    }

    langButtons.forEach((button) => {
        button.addEventListener('click', () => {
            const lang = button.dataset.lang;
            body.classList.toggle('lang-en-active', lang === 'en');
            langButtons.forEach((btn) => btn.classList.toggle('active', btn === button));
        });
    });

    const animateCounter = (element) => {
        const target = parseInt(element.getAttribute('data-target'), 10);
        const prefix = element.getAttribute('data-prefix') || '';
        const suffix = element.getAttribute('data-suffix') || '';
        const duration = 1600;
        const start = performance.now();

        const step = (now) => {
            const progress = Math.min((now - start) / duration, 1);
            const value = Math.floor(progress * target);
            element.textContent = prefix + value.toLocaleString('fr-FR') + suffix;
            if (progress < 1) {
                requestAnimationFrame(step);
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
