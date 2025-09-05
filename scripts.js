// 1️⃣ منوی موبایل (Toggle Menu)
document.addEventListener("DOMContentLoaded", function () {
  const menuToggle = document.querySelector('.menu-toggle');
  const nav = document.querySelector('.main-nav');

  if (menuToggle && nav) {
    menuToggle.addEventListener('click', () => {
      nav.classList.toggle('show');
    });
  }
});

// 2️⃣ اسلایدر خودکار و دستی
let currentSlide = 0;
const slides = document.querySelectorAll('.hero-slide');
const nextBtn = document.querySelector('.hero-next');
const prevBtn = document.querySelector('.hero-prev');
const totalSlides = slides.length;

function showSlide(index) {
  slides.forEach((slide, i) => {
    slide.classList.remove('active');
    if (i === index) {
      slide.classList.add('active');
    }
  });
}

function nextSlide() {
  currentSlide = (currentSlide + 1) % totalSlides;
  showSlide(currentSlide);
}

function prevSlide() {
  currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
  showSlide(currentSlide);
}

// دکمه‌های ناوبری (اختیاری)
if (nextBtn && prevBtn) {
  nextBtn.addEventListener('click', nextSlide);
  prevBtn.addEventListener('click', prevSlide);
}

// اجرای خودکار اسلایدر
setInterval(nextSlide, 7000); // هر 7 ثانیه

// نمایش اسلاید اول در ابتدا
if (slides.length > 0) {
  showSlide(currentSlide);
}

// 3️⃣ اسکرول نرم برای لینک‌های داخلی (اختیاری)
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
    e.preventDefault();
    const target = document.querySelector(this.getAttribute('href'));
    if (target) {
      target.scrollIntoView({ behavior: 'smooth' });
    }
  });
});
