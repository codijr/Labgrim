var swiper = new Swiper('.swiper-news', {
  effect: 'slide',
  speed: 800,
//   spaceBetween: 25,
  setWrapperSize:true,
  slidesPerView: 1,
  observeParents: true,
  autoplay: {
    delay: 2000,
    disableOnInteraction:false,
  },
  breakpoints: {
    992: {
      slidesPerView: 2,
    },
    1200: {
      slidesPerView: 3,
    }
  },
  pagination: {
    el: ".swiper-pagination",
    clickable:true,
  },
});