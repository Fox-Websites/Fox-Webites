// MENU
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

// BUDGET SWIPER
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

// SEND CONTACT EMAIL
const form = document.getElementById("contact__content__form");

async function handleSubmit(event) {
  event.preventDefault();
  const data = new FormData(event.target);
  fetch(event.target.action, {
    method: form.method,
    body: data,
    headers: {
      'Accept': 'application/json'
    }
  }).then(response => {
    alert("Obrigado pelo contato, em breve entraremos em contato!")
  }).catch(error => {
    alert("Não foi possivel enviar o email!")
  })
}
form.addEventListener("submit", handleSubmit)