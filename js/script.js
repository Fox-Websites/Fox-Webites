const btnMobile = document.getElementById("btn-mobile");
const menuItems = document.getElementById("menu__items");
const menu = document.getElementById("header__menu");

function toogleMenu(event) {
  if (event.type === "touchStart") event.preventDefault();
  menu.classList.toggle("active");
  const active = menu.classList.contains("active");
  event.currentTarget.setAttribute("aria-expanded", active);
  if (active) {
    event.currentTarget.setAttribute("aria-label", "Fechar menu");
  } else {
    event.currentTarget.setAttribute("aria-label", "Abrir menu");
  }
}

function toogleItemMenu(event) {
  if (event.type === "touchStart") event.preventDefault();
  menu.classList.toggle("active");
}

btnMobile.addEventListener("click", toogleMenu);
btnMobile.addEventListener("touchStart", toogleMenu);
menuItems.addEventListener("click", toogleItemMenu);
menuItems.addEventListener("touchStart", toogleItemMenu);

const swiper = new Swiper(".swiper", {
  direction: "horizontal",
  loop: true,
  pagination: {
    el: ".swiper-pagination",
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  autoplay: {
    delay: 6000,
    disableOnInteraction: false,
  },
});
