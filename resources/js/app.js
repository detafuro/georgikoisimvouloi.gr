import './bootstrap';

document.addEventListener('DOMContentLoaded', () => {
    // Mobile menu toggle
    const menuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');

    if (menuButton && mobileMenu) {
        function openMenu() {
            menuButton.setAttribute('aria-expanded', 'true');
            mobileMenu.setAttribute('aria-hidden', 'false');
            mobileMenu.style.visibility = 'visible';
            mobileMenu.style.maxHeight = mobileMenu.scrollHeight + 'px';
            mobileMenu.style.opacity = '1';
        }
        function closeMenu() {
            menuButton.setAttribute('aria-expanded', 'false');
            mobileMenu.setAttribute('aria-hidden', 'true');
            mobileMenu.style.maxHeight = '0';
            mobileMenu.style.opacity = '0';
            // Wait for transition to complete before hiding
            setTimeout(() => {
                if (menuButton.getAttribute('aria-expanded') === 'false') {
                    mobileMenu.style.visibility = 'hidden';
                }
            }, 350);
        }

        menuButton.addEventListener('click', () => {
            const expanded = menuButton.getAttribute('aria-expanded') === 'true';
            if (expanded) closeMenu(); else openMenu();
        });

        // Close menu when clicking a link
        mobileMenu.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => closeMenu());
        });

        // Close menu on Escape key
        mobileMenu.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') {
                closeMenu();
                menuButton.focus();
            }
        });
    }

    // Tab keyboard navigation (arrow keys per WAI-ARIA tabs pattern)
    const tablist = document.querySelector('[role="tablist"]');
    if (tablist) {
        const tabs = Array.from(tablist.querySelectorAll('[role="tab"]'));
        tablist.addEventListener('keydown', (e) => {
            const currentIndex = tabs.indexOf(document.activeElement);
            if (currentIndex === -1) return;
            let newIndex;
            if (e.key === 'ArrowRight' || e.key === 'ArrowDown') {
                e.preventDefault();
                newIndex = (currentIndex + 1) % tabs.length;
            } else if (e.key === 'ArrowLeft' || e.key === 'ArrowUp') {
                e.preventDefault();
                newIndex = (currentIndex - 1 + tabs.length) % tabs.length;
            } else if (e.key === 'Home') {
                e.preventDefault();
                newIndex = 0;
            } else if (e.key === 'End') {
                e.preventDefault();
                newIndex = tabs.length - 1;
            }
            if (newIndex !== undefined) {
                tabs[currentIndex].setAttribute('tabindex', '-1');
                tabs[newIndex].setAttribute('tabindex', '0');
                tabs[newIndex].focus();
                tabs[newIndex].click();
            }
        });
    }

    // Smart header: hide on scroll down, show on scroll up with shadow
    const header = document.getElementById('site-header');
    if (header) {
        let lastScrollY = 0;
        window.addEventListener('scroll', () => {
            const currentScrollY = window.scrollY;
            if (currentScrollY > lastScrollY && currentScrollY > 80) {
                // Scrolling down — hide
                header.style.transform = 'translateY(-100%)';
                header.classList.remove('shadow-md');
            } else {
                // Scrolling up — show
                header.style.transform = 'translateY(0)';
                if (currentScrollY > 10) {
                    header.classList.add('shadow-md');
                } else {
                    header.classList.remove('shadow-md');
                }
            }
            lastScrollY = currentScrollY;
        }, { passive: true });
    }

    // Smooth parallax on hero image
    const parallax = document.getElementById('hero-parallax');
    if (parallax && !window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
        let ticking = false;
        window.addEventListener('scroll', () => {
            if (!ticking) {
                requestAnimationFrame(() => {
                    const container = parallax.parentElement;
                    const rect = container.getBoundingClientRect();
                    const windowH = window.innerHeight;
                    // progress: 0.5 when centered in viewport, 0 at bottom, 1 at top
                    const progress = 1 - (rect.top + rect.height / 2) / windowH;
                    // Shift up/down by max 50px from centered position
                    const offset = (progress - 0.5) * 140;
                    parallax.style.transform = `translateY(${offset}px)`;
                    ticking = false;
                });
                ticking = true;
            }
        }, { passive: true });
    }
});
