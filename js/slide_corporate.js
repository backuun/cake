var swiper = new Swiper(".swiperCorporate", {
    slidesPerView: 2,
    spaceBetween: 0,
    autoplay:true,
    cssMode: true,
    loop:true,
    breakpoints: {
        640: {
          slidesPerView: 2,
          spaceBetween: 0,
        },
        768: {
          slidesPerView: 4,
          spaceBetween: 0,
        },
        1024: {
          slidesPerView: 4,
          spaceBetween: 0,
        },
      },
  });