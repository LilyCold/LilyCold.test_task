document.addEventListener("DOMContentLoaded", function () {
  const container = document.querySelector(".specialists-slider-container");
  const slides = container.querySelectorAll(".specialists-slider-slide");
  const dotsContainer = document.querySelector(".slider-dots");

  let currentPage = 0;
  let startX = 0;
  let isDragging = false;

  function getVisibleCount() {
    const width = window.innerWidth;
    if (width <= 576) return 1;
    if (width <= 992) return 2;
    if (width <= 1200) return 3;
    return 4;
  }

  function getTotalPages() {
    return Math.ceil(slides.length / getVisibleCount());
  }

  function createDots() {
    dotsContainer.innerHTML = "";
    const totalPages = getTotalPages();
    for (let i = 0; i < totalPages; i++) {
      const dot = document.createElement("button");
      dot.className = "slider-dot";
      if (i === currentPage) dot.classList.add("active");
      dot.addEventListener("click", () => {
        currentPage = i;
        updateSlider();
      });
      dotsContainer.appendChild(dot);
    }
  }

  function updateSlider() {
    const slideWidth = slides[0].offsetWidth + 20;
    const visibleCount = getVisibleCount();
    const offset = currentPage * slideWidth * visibleCount;
    container.style.transition = "transform 0.3s ease";
    container.style.transform = `translateX(-${offset}px)`;

    dotsContainer.querySelectorAll(".slider-dot").forEach((dot, i) => {
      dot.classList.toggle("active", i === currentPage);
    });
  }

  // свайп
  container.addEventListener("touchstart", (e) => {
    startX = e.touches[0].clientX;
    isDragging = true;
    container.style.transition = "none";
  });

  container.addEventListener("touchend", (e) => {
    if (!isDragging) return;
    isDragging = false;
    const endX = e.changedTouches[0].clientX;
    const diff = endX - startX;

    if (Math.abs(diff) > 50) {
      if (diff < 0) {
        const maxPage = getTotalPages() - 1;
        if (currentPage < maxPage) currentPage++;
      } else {
        if (currentPage > 0) currentPage--;
      }
    }
    updateSlider();
  });

  window.addEventListener("resize", () => {
    currentPage = 0;
    createDots();
    updateSlider();
  });

  createDots();
  updateSlider();
});
