(function () {
    const body = document.body;
    const navToggle = document.querySelector('.nav-toggle');
    const primaryNav = document.querySelector('.primary-navigation');
    const langButtons = document.querySelectorAll('.language-switcher button');
    const counters = document.querySelectorAll('.counter-value');

    if (navToggle && primaryNav) {
        navToggle.addEventListener('click', () => {
            primaryNav.classList.toggle('open');
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
