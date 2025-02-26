import './bootstrap';
import Swiper from 'swiper';
import { Autoplay, Navigation, Thumbs, Zoom } from 'swiper/modules';
import 'swiper/swiper-bundle.css'


var thumbSwiper = new Swiper(".thumbSwiper", {
    modules: [Navigation],
    loop: true,
    spaceBetween: 8,
    slidesPerView: 5,
    freeMode: true,

    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    watchSlidesProgress: true,
});
var propductSwiper = new Swiper(".propductSwiper", {
    modules: [Thumbs, Autoplay, Zoom],
    loop: true,
    zoom: true,
    autoplay: {
        delay: 15000,
        pauseOnMouseEnter: true
    },
    spaceBetween: 8,

    thumbs: {
        swiper: thumbSwiper,
    },
});