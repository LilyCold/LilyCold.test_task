document.addEventListener("DOMContentLoaded", function () {
  let currentIndex = 0;
  const container = document.querySelector(".slider-container");
  const slides = document.querySelectorAll(".slider-slide");
  const prevBtn = document.querySelector(".slider-prev");
  const nextBtn = document.querySelector(".slider-next");

  // console.log("Найдено слайдов:", slides.length);

  function updateSlider() {
    const slidesToShow = window.innerWidth <= 768 ? 1 : 2;

    const slideWidth = slides[0].offsetWidth + 20;
    const translateX = -currentIndex * slideWidth;

    console.log("Текущий индекс:", currentIndex, "Смещение:", translateX);

    container.style.transform = `translateX(${translateX}px)`;
  }

  function nextSlide() {
    const slidesToShow = window.innerWidth <= 768 ? 1 : 2;
    const maxIndex = slides.length - slidesToShow;

    if (currentIndex < maxIndex) {
      currentIndex++;
    } else {
      currentIndex = 0;
    }
    updateSlider();
  }

  function prevSlide() {
    const slidesToShow = window.innerWidth <= 768 ? 1 : 2;

    if (currentIndex > 0) {
      currentIndex--;
    } else {
      currentIndex = slides.length - slidesToShow;
    }
    updateSlider();
  }

  nextBtn.addEventListener("click", nextSlide);
  prevBtn.addEventListener("click", prevSlide);

  window.addEventListener("resize", updateSlider);

  updateSlider();
});
