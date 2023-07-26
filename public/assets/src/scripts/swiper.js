/* eslint-disable */

import Swiper, { Navigation } from 'swiper';

const swiperAbout = new Swiper('.swiper-about', {
    slidesPerView: 1,
    loop: true,
    centeredSlides: true,
    autoplay: {
        delay: 4000,
        disableOnInteraction: true,
    },
})

const swiperClinics = new Swiper('.swiper-life', {
    slidesPerView: 1.2,
    spaceBetween: 30,
    loop: false,
    centeredSlides: true,
    navigation: {
        nextEl: '.enterprise-button-next',
        prevEl: '.enterprise-button-prev',
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});
