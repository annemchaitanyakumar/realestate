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

  // 3. Cinematic Hero Slider
  const slides = document.querySelectorAll('.lp-hero-slide');
  const counterEl = document.querySelector('.lp-hero-counter');
  const prevBtn = document.querySelector('.lp-prev-slide');
  const nextBtn = document.querySelector('.lp-next-slide');

  if (slides.length > 0) {
    let currentSlide = 0;
    const totalSlides = slides.length;
    let slideInterval;

    function showSlide(index) {
      slides.forEach(s => s.classList.remove('active'));
      currentSlide = (index + totalSlides) % totalSlides;
      slides[currentSlide].classList.add('active');
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

    function startInterval() {
      slideInterval = setInterval(nextSlide, 6500);
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
});
