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
