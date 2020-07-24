var swiper = new Swiper('.swiper-container', {
    // spaceBetween: 30,
    centeredSlides: true,
    autoplay: {
        delay: 8000,
        stopOnLastSlide: false,
        disableOnInteraction: true,
    },
    pagination: {
        el: '.doctor-swiper-pagination',
        clickable: true,
    },
    // navigation: {
    //     nextEl: '.swiper-button-next',
    //     prevEl: '.swiper-button-prev',
    // },
});
