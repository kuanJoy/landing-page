// ========================= Hamburger =========================
const hamburger = document.querySelector(".hamburger--slider");
const navCollapse = document.querySelector(".nav-collapse");
hamburger.addEventListener("click", () => {
  hamburger.classList.toggle("is-active");
  navCollapse.classList.toggle("is-active");
});

//========================= Swiper =========================
var swiper = new Swiper(".mySwiper", {
  slidesPerView: "1",
  rewind: true,
  navigation: {
    nextEl: ".rev_btn-next",
    prevEl: ".rev_btn-prev",
  },
});


//========================= Mix It Up =========================

var containerEl = document.querySelector('.container');

var mixer = mixitup(containerEl);