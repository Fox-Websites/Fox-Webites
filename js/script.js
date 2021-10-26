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

// BACK TO TOP
let backToTop = document.getElementById("back_to_top");

// INDICATOR
const indicator = document.getElementById("indicator");
const maxHeight = document.body.scrollHeight - window.innerHeight;

window.addEventListener("scroll", () => {
  const percent = (window.scrollY / maxHeight) * 100;
  indicator.style.width = `${Math.round(percent)}%`
  console.log(`${Math.round(percent)}%`);

  if (
    document.body.scrollTop > 400 ||
    document.documentElement.scrollTop > 400
  ) {
    backToTop.classList.remove("animate__fadeOutDown");
    backToTop.classList.add("animate__animated", "animate__fadeInUp");
    backToTop.style.display = "block";
  } else {
    backToTop.classList.remove("animate__fadeInUp");
    backToTop.classList.add("animate__fadeOutDown");
  }
});

backToTop.addEventListener("click", () => {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
});

