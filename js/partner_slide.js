var swiper = new Swiper(".myPartner", {
    slidesPerView: 3,
    spaceBetween: 30,
    autoplay: {
      delay: 2000,
    },
    cssMode: true,
    loop:true,
    breakpoints: {
      640: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      768: {
        slidesPerView: 3,
        spaceBetween: 40,
      },
      1024: {
        slidesPerView: 7,
        spaceBetween: 30,
      },
    },
  });