const btnOrcamentoNav = document.getElementById("header__menu__orcamento");
const btnBanner = document.getElementById("banner__cta");
const btnOrcamentoBudget = document.getElementById("budget__content__cta");

const modalContainer = document.getElementById("modal_container");
const btnClose = document.getElementById("modal__header__close");

function openModal() {
  modalContainer.classList.add("show");
}

btnOrcamentoNav.addEventListener("click", openModal);
if (btnBanner !== null) {
  btnBanner.addEventListener("click", openModal);
}

if (btnOrcamentoBudget !== null) {
  btnOrcamentoBudget.addEventListener("click", openModal);
}

btnClose.addEventListener("click", () => {
  modalContainer.classList.remove("show");
});
