let swiperCards = new Swiper('.testimoni_content', {
    loop: true,
    spaceBetween: 32,
    grabCursor: true,

    pagination: {
      el: '.swiper-pagination',
      clickable: true,
      dynamicBullets: true,
    },

    breakpoints:{
        600:{
            slidesPerView: 2,
        },
        968:{
            slidesPerView: 3,
        },
    },
});