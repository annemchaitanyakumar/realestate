/* ==========================================================================
   PAANCHAJANYA REALTY - LA PERLA CONTROLLER
   ========================================================================== */

document.addEventListener('DOMContentLoaded', function () {
  'use strict';

  // 1. Sticky Navigation Blur
  const header = document.querySelector('.lp-header');
  window.addEventListener('scroll', function () {
    if (window.scrollY > 50) {
      header.classList.add('scrolled');
    } else {
      header.classList.remove('scrolled');
    }
  });

  // 2. Mobile Drawer Navigation
  const menuToggle = document.querySelector('.lp-menu-toggle');
  const mobileNav = document.querySelector('.lp-mobile-nav');
  const backdrop = document.querySelector('.lp-mobile-nav-backdrop');

  if (menuToggle && mobileNav && backdrop) {
    function toggleMobileMenu() {
      menuToggle.classList.toggle('active');
      mobileNav.classList.toggle('open');
      backdrop.classList.toggle('show');
      document.body.style.overflow = mobileNav.classList.contains('open') ? 'hidden' : '';
    }

    menuToggle.addEventListener('click', toggleMobileMenu);
    backdrop.addEventListener('click', toggleMobileMenu);

    document.querySelectorAll('.lp-mobile-link').forEach(link => {
      link.addEventListener('click', () => {
        if (mobileNav.classList.contains('open')) {
          toggleMobileMenu();
        }
      });
    });
  }

  // 3. Cinematic Hero Slider with 4-Project Navigation Bar
  const slides = document.querySelectorAll('.lp-hero-slide');
  const navItems = document.querySelectorAll('.lp-hero-indicator-btn, .lp-slider-nav-item');
  const counterEl = document.querySelector('.lp-hero-counter');
  const prevBtn = document.querySelector('.lp-prev-slide');
  const nextBtn = document.querySelector('.lp-next-slide');
  const heroSection = document.querySelector('.lp-hero');

  if (slides.length > 0) {
    let currentSlide = 0;
    const totalSlides = slides.length;
    let slideInterval;
    const SLIDE_DURATION = 6500;

    function showSlide(index) {
      slides.forEach(s => s.classList.remove('active'));
      navItems.forEach(n => n.classList.remove('active'));

      currentSlide = (index + totalSlides) % totalSlides;
      slides[currentSlide].classList.add('active');

      if (navItems[currentSlide]) {
        navItems[currentSlide].classList.add('active');
      }

      if (counterEl) {
        const currentStr = String(currentSlide + 1).padStart(2, '0');
        const totalStr = String(totalSlides).padStart(2, '0');
        counterEl.textContent = currentStr + ' / ' + totalStr;
      }
    }

    function nextSlide() {
      showSlide(currentSlide + 1);
    }

    function prevSlide() {
      showSlide(currentSlide - 1);
    }

    if (nextBtn) nextBtn.addEventListener('click', () => { nextSlide(); resetInterval(); });
    if (prevBtn) prevBtn.addEventListener('click', () => { prevSlide(); resetInterval(); });

    navItems.forEach((btn) => {
      btn.addEventListener('click', () => {
        const targetIdx = parseInt(btn.getAttribute('data-slide-index'), 10);
        if (!isNaN(targetIdx)) {
          showSlide(targetIdx);
          resetInterval();
        }
      });
    });

    if (heroSection) {
      heroSection.addEventListener('mouseenter', () => clearInterval(slideInterval));
      heroSection.addEventListener('mouseleave', () => resetInterval());
    }

    function startInterval() {
      slideInterval = setInterval(nextSlide, SLIDE_DURATION);
    }

    function resetInterval() {
      clearInterval(slideInterval);
      startInterval();
    }

    startInterval();
  }

  // 4. Booking & Site Visit Modal
  const modalBackdrop = document.querySelector('.lp-modal-backdrop');
  const modalClose = document.querySelector('.lp-modal-close');
  const modalProjectInput = document.querySelector('#modal_project');
  const modalTriggers = document.querySelectorAll('[data-open-modal]');

  if (modalBackdrop) {
    modalTriggers.forEach(trigger => {
      trigger.addEventListener('click', function (e) {
        e.preventDefault();
        const projectName = this.getAttribute('data-project') || 'General Site Visit';
        if (modalProjectInput) {
          modalProjectInput.value = projectName;
        }
        modalBackdrop.classList.add('open');
        document.body.style.overflow = 'hidden';
      });
    });

    if (modalClose) {
      modalClose.addEventListener('click', closeModal);
    }

    modalBackdrop.addEventListener('click', function (e) {
      if (e.target === modalBackdrop) {
        closeModal();
      }
    });

    function closeModal() {
      modalBackdrop.classList.remove('open');
      document.body.style.overflow = '';
    }
  }

  // 5. Smooth Scroll for Anchor Links
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      const targetId = this.getAttribute('href');
      if (targetId.length > 1) {
        const targetElement = document.querySelector(targetId);
        if (targetElement) {
          e.preventDefault();
          const headerOffset = 80;
          const elementPosition = targetElement.getBoundingClientRect().top;
          const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

          window.scrollTo({
            top: offsetPosition,
            behavior: 'smooth'
          });
        }
      }
    });
  });

  // 6. Completed Projects Category Filter
  const filterPills = document.querySelectorAll('.lp-filter-pill');
  const completedCards = document.querySelectorAll('.lp-completed-grid .lp-comp-card, .lp-completed-grid .lp-project-card');

  if (filterPills.length > 0 && completedCards.length > 0) {
    filterPills.forEach(pill => {
      pill.addEventListener('click', function () {
        filterPills.forEach(p => p.classList.remove('active'));
        this.classList.add('active');

        const filterVal = this.getAttribute('data-filter');

        completedCards.forEach(card => {
          const category = card.getAttribute('data-category');
          if (filterVal === 'all' || category === filterVal) {
            card.style.display = 'flex';
            card.style.opacity = '0';
            card.style.transform = 'translateY(15px)';
            setTimeout(() => {
              card.style.transition = 'all 0.4s cubic-bezier(0.16, 1, 0.3, 1)';
              card.style.opacity = '1';
              card.style.transform = 'translateY(0)';
            }, 30);
          } else {
            card.style.display = 'none';
          }
        });
      });
    });
  }

  // 7. Animate On Scroll (AOS) Engine
  if ('IntersectionObserver' in window) {
    const aosObserver = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('aos-animate');
          observer.unobserve(entry.target);
        }
      });
    }, {
      threshold: 0.1,
      rootMargin: '0px 0px -40px 0px'
    });

    document.querySelectorAll('[data-aos]').forEach(el => {
      aosObserver.observe(el);
    });
  } else {
    // Fallback for older browsers
    document.querySelectorAll('[data-aos]').forEach(el => {
      el.classList.add('aos-animate');
    });
  }

  // 8. GPU-Accelerated Parallax Engine
  const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  if (!prefersReducedMotion) {
    let ticking = false;
    const heroSlides = document.querySelectorAll('.lp-hero-slide-img');
    const parallaxItems = document.querySelectorAll('[data-parallax]');

    function onScrollParallax() {
      const scrollY = window.pageYOffset;
      const windowH = window.innerHeight;

      // Hero Subtle Parallax
      if (scrollY < windowH) {
        heroSlides.forEach(img => {
          img.style.transform = `translate3d(0, ${(scrollY * 0.28).toFixed(1)}px, 0)`;
        });
      }

      // Card & Media Parallax
      parallaxItems.forEach(item => {
        const rect = item.getBoundingClientRect();
        if (rect.top < windowH && rect.bottom > 0) {
          const speed = parseFloat(item.getAttribute('data-parallax-speed')) || 0.12;
          const centerDelta = (windowH / 2) - (rect.top + rect.height / 2);
          const offsetY = (centerDelta * speed).toFixed(1);
          item.style.transform = `translate3d(0, ${offsetY}px, 0)`;
        }
      });

      ticking = false;
    }

    window.addEventListener('scroll', function () {
      if (!ticking) {
        window.requestAnimationFrame(onScrollParallax);
        ticking = true;
      }
    }, { passive: true });

    onScrollParallax();
  }
});

