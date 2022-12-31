var swiper = new swiper(".swiper-slide", {
    slidesPerView: 3,
    spaceBetween: 25,
    loop: true,
    centerSlide: 'true',
    fade: 'true',
    grabCursor: 'true',
  
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },

    breakpoints:{
        0: {
            slidesPerView: 1,
        },
        520: {
            slidesPerView: 2,
        },
        950: {
            slidesPerView: 3,
        },
    },
  });


    let next = document.createElement("div");
  next.classList.add("swiper-button-next","swiper-navBtn");
  let prev = document.createElement("div");
  prev.classList.add("swiper-button-prev","swiper-navBtn");