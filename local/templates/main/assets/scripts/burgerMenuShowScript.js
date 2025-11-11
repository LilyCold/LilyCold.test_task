document.addEventListener("DOMContentLoaded", function () {
  const aboutLink = document.querySelector(
    ".header__menu__navigation__link:nth-child(2)"
  );
  const burgerMenu = document.querySelector(
    ".header__menu__navigation__burger"
  );

  if (aboutLink && burgerMenu) {
    aboutLink.addEventListener("mouseenter", function () {
      burgerMenu.classList.add("show");
    });

    aboutLink.addEventListener("mouseleave", function () {
      setTimeout(() => {
        if (!burgerMenu.matches(":hover")) {
          burgerMenu.classList.remove("show");
        }
      }, 100);
    });

    burgerMenu.addEventListener("mouseleave", function () {
      burgerMenu.classList.remove("show");
    });

    burgerMenu.addEventListener("mouseenter", function () {
      burgerMenu.classList.add("show");
    });
  }
});
