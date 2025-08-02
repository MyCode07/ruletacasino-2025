import { Swiper, Autoplay, Lazy } from "swiper";

const casinoSlider = document.querySelector('.casino-slider .swiper');
const casinoSliderSlides = document.querySelectorAll('.casino-slider .swiper .swiper-slide');

if (casinoSliderSlides.length) {
    new Swiper(casinoSlider, {
        modules: [Autoplay, Lazy],
        loop: false,
        slidesPerView: 'auto',
        autoplay: {
            delay: 1000,
            pauseOnMouseEnter: true,
        },
        speed: 700,

        preloadImages: false,
        lazy: {
            loadPrevNext: true,
            loadOnTransitionStart: false
        },
        watchSlidesProgress: true,
        watchOverflow: true,
        grabCursor: true,

        breakpoints: {
            300: {
                spaceBetween: 15,
                centeredSlides: true,
            },
            600: {
                spaceBetween: 20,
                centeredSlides: false,
            }
        }
    })
}


const rouletteSlider = document.querySelector('.roulette-slider .swiper');
const rouletteSliderSlides = document.querySelectorAll('.roulette-slider .swiper .swiper-slide');

if (rouletteSliderSlides.length) {
    new Swiper(rouletteSlider, {
        modules: [Autoplay],
        loop: false,
        slidesPerView: 'auto',
        autoplay: {
            delay: 1000,
            pauseOnMouseEnter: true,
        },
        speed: 700,

        preloadImages: false,
        lazy: {
            loadPrevNext: true,
            loadOnTransitionStart: false
        },
        watchSlidesProgress: true,
        watchOverflow: true,
        grabCursor: true,

        breakpoints: {
            300: {
                spaceBetween: 15,
                centeredSlides: true,
            },
            600: {
                spaceBetween: 20,
                centeredSlides: false,
            }
        }
    })
}


const darkSlider = document.querySelector('.dark-slider .swiper');
const darkSliderSlides = document.querySelectorAll('.dark-slider .swiper .swiper-slide');

if (darkSliderSlides.length) {
    new Swiper(darkSlider, {
        modules: [Autoplay],
        loop: false,
        slidesPerView: 'auto',
        autoplay: {
            delay: 1000,
            pauseOnMouseEnter: true,
        },
        speed: 700,

        preloadImages: false,
        lazy: {
            loadPrevNext: true,
            loadOnTransitionStart: false
        },
        watchSlidesProgress: true,
        watchOverflow: true,
        grabCursor: true,

        breakpoints: {
            300: {
                spaceBetween: 15,
                centeredSlides: true,
            },
            600: {
                spaceBetween: 20,
                centeredSlides: false,
            }
        }
    })
}
