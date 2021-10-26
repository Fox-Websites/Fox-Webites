function animationLeft() {
  const sr = ScrollReveal({
    origin: "left",
    distance: "50px",
    duration: "1000",
  });

  ScrollReveal().reveal("#schedule__title", { delay: 200 });
  ScrollReveal().reveal("#differential__title", { delay: 200 });
  ScrollReveal().reveal("#projects__title", { delay: 200 });
  ScrollReveal().reveal("#posts__title", { delay: 200 });
  ScrollReveal().reveal("#about__content__title", { delay: 200 });
  ScrollReveal().reveal("#teamwork__title", { delay: 200 });
  ScrollReveal().reveal("#portfolio__title", { delay: 200 });
  ScrollReveal().reveal("#blog__title", { delay: 200 });
  ScrollReveal().reveal("#contact__content__title", { delay: 200 });
  ScrollReveal().reveal("#contact__info__contact", { delay: 200 });
}

function animationRight() {
  const sr = ScrollReveal({
    origin: "right",
    distance: "50px",
    duration: "1000",
  });

  ScrollReveal().reveal("#schedule__subtitle", { delay: 250 });
  ScrollReveal().reveal("#differential__subtitle", { delay: 250 });
  ScrollReveal().reveal("#projects__subtitle", { delay: 250 });
  ScrollReveal().reveal("#about__content__description", { delay: 250 });
  ScrollReveal().reveal("#teamwork__subtitle", { delay: 250 });
  ScrollReveal().reveal("#portfolio__subtitle", { delay: 250 });
  ScrollReveal().reveal("#blog__subtitle", { delay: 250 });
  ScrollReveal().reveal("#contact__content__subtitle", { delay: 250 });
  ScrollReveal().reveal("#contact__info__location", { delay: 200 });
}

function animationTop() {
  const sr = ScrollReveal({
    origin: "top",
    distance: "50px",
    duration: "1000",
  });

  ScrollReveal().reveal(".schedule__item", { delay: 300 });
  ScrollReveal().reveal(".differential__item", { delay: 300 });
  ScrollReveal().reveal(".project__item", { delay: 300 });
  ScrollReveal().reveal("#budget__content__title", { delay: 200 });
  ScrollReveal().reveal(".swiper", { delay: 250 });
  ScrollReveal().reveal(".posts__item", { delay: 250 });
  ScrollReveal().reveal("#about__content__image", { delay: 300 });
  ScrollReveal().reveal(".teamwork__people__item", { delay: 300 });
  ScrollReveal().reveal(".portfolio__item", { delay: 300 });
  ScrollReveal().reveal(".blog__grid__item", { delay: 300 });
  ScrollReveal().reveal("#contact__content__form", { delay: 300 });
}

function animationBottom() {
  const sr = ScrollReveal({
    origin: "bottom",
    distance: "50px",
    duration: "1000",
  });

  ScrollReveal().reveal("#projects__button", { delay: 200 });
  ScrollReveal().reveal("#budget__content__cta", { delay: 250 });
  ScrollReveal().reveal("#contact__info__contact__map", { delay: 300 });
}

animationLeft();
animationRight();
animationTop();
animationBottom();
