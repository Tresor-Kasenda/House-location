var swiper = new Swiper(".homeSwiper", {
    navigation: {
        nextEl: '.swip-next-homeslide',
        prevEl: '.swip-prev-homeslide',
    },
    pagination: {
        el: ".home-swiper-pagination",
        bulletClass: 'costum-bullet',
        bulletActiveClass: 'costum-bullet-active',
        clickable: true,
        renderBullet: function (index, className) {
            return '<span class="' + className + ' costumSwiperPagination">' + "</span>";
        },
    },
});

 new Swiper(".swiperBestrate", {
    slidesPerView: 1,
    spaceBetween: 10,
    navigation: {
        nextEl: '.swip-next-bestrate',
        prevEl: '.swip-prev-bestrate',
    },
    breakpoints: {
        640: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        1024: {
            slidesPerView: 3,
            spaceBetween: 30,
        },
    },
})

new Swiper(".swiperBestcommis", {
    slidesPerView: 1,
    spaceBetween: 10,
    navigation: {
        nextEl: '.swip-next-bestcommis',
        prevEl: '.swip-prev-bestcommis',
    },
    breakpoints: {
        640: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        1024: {
            slidesPerView: 3,
            spaceBetween: 30,
        },
    },
})

new Swiper(".swipertestimonial", {
    slidesPerView: 1,
    spaceBetween: 10,
    navigation: {
        nextEl: '.swip-next-testim',
        prevEl: '.swip-prev-testim',
    },
    breakpoints: {
        640: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        768: {
            slidesPerView: 3,
            spaceBetween: 30,
        },
        1240: {
            slidesPerView: 4,
            spaceBetween: 30,
        },
    },
})
