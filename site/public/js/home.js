/* DMU Homepage JS (Phase 2 redesign)
   - Smooth anchor scrolling
   - Count-up animation for hero/stat numbers
   Carousel initialisers were removed because the redesigned homepage no
   longer uses Bootstrap carousels. */

/* ---- Measure header heights so the overlay nav lines up under the utility bar ---- */
(function () {
    function setHeaderVars() {
        var th = document.querySelector('.top-header'), bb = document.querySelector('.brand-bar');
        if (th) document.body.style.setProperty('--th-h', th.offsetHeight + 'px');
        if (bb && !bb.classList.contains('fixed')) document.body.style.setProperty('--bb-h', bb.offsetHeight + 'px');
    }
    setHeaderVars();
    document.addEventListener('DOMContentLoaded', setHeaderVars);
    window.addEventListener('load', setHeaderVars);
    window.addEventListener('resize', setHeaderVars);
})();

/* ---- Lazy-load hero carousel slides 2..N (defer their images past first paint) ---- */
(function () {
    function loadHeroSlides() {
        document.querySelectorAll('.home-hero__bg[data-bg]').forEach(function (el) {
            el.style.backgroundImage = "url('" + el.getAttribute('data-bg') + "')";
            el.removeAttribute('data-bg');
        });
    }
    // Load them once the page has finished loading (after the visible hero + content).
    if (document.readyState === 'complete') { loadHeroSlides(); }
    else { window.addEventListener('load', loadHeroSlides); }
    // Safety: also load as soon as the carousel is about to move to a slide.
    var hero = document.getElementById('heroCarousel');
    if (hero) hero.addEventListener('slide.bs.carousel', loadHeroSlides, { once: true });
})();

document.addEventListener('DOMContentLoaded', function () {
    /* ---- Smooth scroll for in-page anchors ---- */
    document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {
        anchor.addEventListener('click', function (e) {
            var targetId = this.getAttribute('href');
            if (targetId === '#' || targetId.length < 2) return;
            var target = document.querySelector(targetId);
            if (target) {
                e.preventDefault();
                window.scrollTo({ top: target.offsetTop - 100, behavior: 'smooth' });
            }
        });
    });

    /* ---- Count-up for [data-count] numbers ---- */
    var counters = document.querySelectorAll('[data-count]');
    if (counters.length && 'IntersectionObserver' in window) {
        var run = function (el) {
            var target = parseFloat(el.getAttribute('data-count')) || 0;
            var suffix = el.getAttribute('data-suffix') || '';
            var dur = 1200, start = null;
            var step = function (ts) {
                if (!start) start = ts;
                var p = Math.min((ts - start) / dur, 1);
                el.textContent = Math.floor(p * target).toLocaleString() + suffix;
                if (p < 1) requestAnimationFrame(step);
            };
            requestAnimationFrame(step);
        };
        var io = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) { run(entry.target); io.unobserve(entry.target); }
            });
        }, { threshold: 0.4 });
        counters.forEach(function (c) { io.observe(c); });
    }
});
