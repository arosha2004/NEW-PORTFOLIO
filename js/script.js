// ============================================================
// AROSHA MAHAGEDARA — PORTFOLIO SCRIPTS
// ============================================================

document.addEventListener('DOMContentLoaded', () => {

    // ===== NAVBAR SCROLL =====
    const navbar = document.getElementById('navbar');
    window.addEventListener('scroll', () => {
        navbar.classList.toggle('scrolled', window.scrollY > 60);
        updateActiveNav();
    }, { passive: true });

    // ===== HAMBURGER MENU =====
    const hamburger = document.getElementById('hamburger');
    const navLinks = document.getElementById('nav-links');

    hamburger?.addEventListener('click', () => {
        const open = navLinks.classList.toggle('open');
        hamburger.setAttribute('aria-expanded', open);
        const spans = hamburger.querySelectorAll('span');
        spans[0].style.transform = open ? 'rotate(45deg) translate(5px, 5px)' : '';
        spans[1].style.opacity = open ? '0' : '1';
        spans[2].style.transform = open ? 'rotate(-45deg) translate(5px, -5px)' : '';
    });

    navLinks?.querySelectorAll('a').forEach(link => {
        link.addEventListener('click', () => {
            navLinks.classList.remove('open');
            hamburger?.setAttribute('aria-expanded', 'false');
        });
    });

    // ===== ACTIVE NAV =====
    function updateActiveNav() {
        const sections = document.querySelectorAll('section[id]');
        const scrollY = window.scrollY + 100;
        sections.forEach(sec => {
            const top = sec.offsetTop;
            const h = sec.offsetHeight;
            const id = sec.getAttribute('id');
            const link = document.querySelector(`.nav-links a[href="#${id}"]`);
            if (link) link.classList.toggle('active', scrollY >= top && scrollY < top + h);
        });
    }

    // ===== SCROLL REVEAL =====
    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (!entry.isIntersecting) return;
            entry.target.classList.add('visible');

            // Animate skill bars
            if (entry.target.id === 'skills-bars') {
                entry.target.querySelectorAll('.skill-bar-fill').forEach((fill, i) => {
                    setTimeout(() => {
                        fill.style.width = fill.getAttribute('data-width');
                    }, i * 80);
                });
            }
        });
    }, { threshold: 0.12, rootMargin: '0px 0px -60px 0px' });

    document.querySelectorAll('.reveal').forEach(el => revealObserver.observe(el));

    // ===== TYPED TEXT (hero subtitle) =====
    const typed = document.getElementById('typed-text');
    if (typed) {
        const words = ['PHP Developer', 'Web Developer', 'CS Student', 'Problem Solver'];
        let wordIdx = 0;
        let charIdx = 0;
        let deleting = false;

        function tick() {
            const word = words[wordIdx];
            typed.textContent = deleting
                ? word.substring(0, charIdx--)
                : word.substring(0, ++charIdx);

            if (!deleting && charIdx === word.length) {
                deleting = true;
                setTimeout(tick, 2000);
                return;
            }
            if (deleting && charIdx < 0) {
                deleting = false;
                wordIdx = (wordIdx + 1) % words.length;
            }
            setTimeout(tick, deleting ? 55 : 95);
        }
        tick();
    }

    // ===== CONTACT FORM — Formspree AJAX =====
    const form = document.getElementById('contact-form');
    const successMsg = document.getElementById('form-success-msg');

    form?.addEventListener('submit', async function (e) {
        e.preventDefault();

        const btn = form.querySelector('.btn-submit');
        const originalText = btn.textContent;
        btn.textContent = 'Sending…';
        btn.disabled = true;

        try {
            const data = new FormData(form);
            const response = await fetch(form.action, {
                method: 'POST',
                body: data,
                headers: { 'Accept': 'application/json' }
            });

            if (response.ok) {
                // Show success message
                successMsg.textContent = "Message sent successfully! I'll get back to you soon.";
                successMsg.classList.add('show');
                form.reset();
                // Scroll success into view
                successMsg.scrollIntoView({ behavior: 'smooth', block: 'center' });
            } else {
                const json = await response.json();
                const errText = json?.errors?.map(e => e.message).join(', ')
                    || 'Something went wrong. Please try emailing me directly.';
                successMsg.textContent = errText;
                successMsg.classList.add('show');
                successMsg.style.background = 'rgba(239,68,68,0.08)';
                successMsg.style.borderColor = 'rgba(239,68,68,0.3)';
                successMsg.style.color = '#ef4444';
            }
        } catch (_) {
            successMsg.textContent = 'Network error. Please email me at arosh1126@gmail.com';
            successMsg.classList.add('show');
        } finally {
            btn.textContent = originalText;
            btn.disabled = false;
        }
    });

});
