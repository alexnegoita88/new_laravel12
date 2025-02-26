import './bootstrap';
import Swiper from 'swiper';
import { Navigation, Thumbs } from 'swiper/modules';
import 'swiper/swiper-bundle.css';


var thumbSwiper = new Swiper(".thumbSwiper", {
    modules: [Navigation],
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
    modules: [Thumbs],
    spaceBetween: 8,

    thumbs: {
        swiper: thumbSwiper,
    },
});