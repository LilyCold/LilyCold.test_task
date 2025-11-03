document.addEventListener("DOMContentLoaded", function () {
  const aboutLink = document.querySelector(
    ".header__menu__navigation__link:nth-child(2)"
  );
  const burgerMenu = document.querySelector(
    ".header__menu__navigation__burger"
  );

  if (aboutLink && burgerMenu) {
    // Показываем меню при наведении
    aboutLink.addEventListener("mouseenter", function () {
      burgerMenu.classList.add("show");
    });

    // Скрываем меню когда курсор уходит с ссылки или меню
    aboutLink.addEventListener("mouseleave", function () {
      setTimeout(() => {
        if (!burgerMenu.matches(":hover")) {
          burgerMenu.classList.remove("show");
        }
      }, 100);
    });

    // Скрываем меню когда курсор уходит с меню
    burgerMenu.addEventListener("mouseleave", function () {
      burgerMenu.classList.remove("show");
    });

    // Показываем меню когда курсор на меню (для плавности)
    burgerMenu.addEventListener("mouseenter", function () {
      burgerMenu.classList.add("show");
    });
  }
});
