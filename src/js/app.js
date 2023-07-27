//-------- BURGER BTN -------
const burger = document.getElementById("burger-btn");
const navItems = document.getElementById("nav-items");
const navLinks = document.querySelectorAll(".nav-item");

//Open menu
burger.addEventListener("click", () => {
  navItems.classList.toggle("active");
});

//Close when click on link
navLinks.forEach((link) => {
  link.addEventListener("click", () => {
    navItems.classList.remove("active");
  });
});

//Close when click outside of menu
document.addEventListener("click", function handleClickOutsideBox(e) {
  if (!navItems.contains(e.target) && !burger.contains(e.target)) {
    navItems.classList.remove("active");
  }
});

//-------- MODALS -------
const modals = document.querySelectorAll(".modal");
const modalsClose = document.querySelectorAll(".close-modal");
const modalsOpen = document.querySelectorAll(".open-modal");
const modalContent = document.querySelectorAll(".modal-content");

for (let i = 0; i < modalsOpen.length; i++) {
  modalsOpen[i].addEventListener("click", () => {
    modals[i].classList.add("active");
  });
}

for (let i = 0; i < modalsClose.length; i++) {
  modalsClose[i].addEventListener("click", () => {
    modals[i].classList.remove("active");
  });
}
