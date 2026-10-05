document.documentElement.classList.add('js');

document.addEventListener('DOMContentLoaded', function () {
  const carousel = document.querySelector('.home-carousel');
  if (!carousel) return;

  const slides = Array.from(carousel.querySelectorAll('.home-slide'));
  const dots = Array.from(carousel.querySelectorAll('.home-carousel__dots button'));
  const prev = carousel.querySelector('.home-carousel__arrow--prev');
  const next = carousel.querySelector('.home-carousel__arrow--next');

  let current = 0;
  let timer = null;

  function show(index) {
    current = (index + slides.length) % slides.length;
    slides.forEach((slide, i) => slide.classList.toggle('is-active', i === current));
    dots.forEach((dot, i) => dot.classList.toggle('is-active', i === current));
  }

  function restart() {
    window.clearInterval(timer);
    timer = window.setInterval(() => show(current + 1), 6500);
  }

  if (prev) prev.addEventListener('click', () => { show(current - 1); restart(); });
  if (next) next.addEventListener('click', () => { show(current + 1); restart(); });

  dots.forEach((dot, i) => dot.addEventListener('click', () => {
    show(i);
    restart();
  }));

  carousel.addEventListener('mouseenter', () => window.clearInterval(timer));
  carousel.addEventListener('mouseleave', restart);

  show(0);
  restart();
});
