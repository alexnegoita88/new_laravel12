<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


<head>
    <meta charset="utf-8" />
    <title>Swiper demo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />

    <!-- Demo styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>






        .thumbSwiper .swiper-slide {
            width: 25%;
            height: 100%;
            opacity: 0.4;
        }

        .thumbSwiper .swiper-slide-thumb-active {
            opacity: 1;
        }

        .thumbSwiper .swiper-slide {
            position: relative;
            height: 40px;
            margin: 8px auto;
            border-radius: 5px;
            overflow: hidden;
            cursor: pointer;
        }
        
        .thumbSwiper .swiper-slide img {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
        }

        </style>
</head>

<body>

    <div class="container mx-auto">
        <!-- product view -->
        <div class="product_view_wrap section_padding_b pb-14">
            <div class="container">
                <div class="grid grid-cols-12 gap-6">
                    <div class="col-span-12 lg:col-span-6" x-data="productImageModule">

                        <div class="swiper propductSwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="swiper-zoom-container">
                                        <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="swiper-zoom-container">
                                        <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="swiper-zoom-container">
                                        <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="swiper-zoom-container">
                                        <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="swiper-zoom-container">
                                        <img src="https://swiperjs.com/demos/images/nature-5.jpg" />
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="swiper-zoom-container">
                                        <img src="https://swiperjs.com/demos/images/nature-6.jpg" />
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="swiper-zoom-container">
                                        <img src="https://swiperjs.com/demos/images/nature-7.jpg" />
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="swiper-zoom-container">
                                        <img src="https://swiperjs.com/demos/images/nature-8.jpg" />
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="swiper-zoom-container">
                                        <img src="https://swiperjs.com/demos/images/nature-9.jpg" />
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="swiper-zoom-container">
                                        <img src="https://swiperjs.com/demos/images/nature-10.jpg" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div thumbsSlider="" style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
                            class="swiper thumbSwiper group">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-5.jpg" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-6.jpg" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-7.jpg" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-8.jpg" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-9.jpg" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-10.jpg" />
                                </div>
                            </div>
                            <div
                                class="swiper-button-next box_shadow w-8 h-8 bg-[#eceef0] absolute right-0 top-1/2 opacity-0 group-hover:opacity-100 transition duration-300">
                            </div>
                            <div
                                class="swiper-button-prev box_shadow w-8 h-8 bg-[#eceef0] absolute left-0 top-1/2 opacity-0 group-hover:opacity-100 transition duration-300">
                            </div>
                        </div>

                    </div>

                    <div class="col-span-12 lg:col-span-6">

                        <h1>Aici alt continut</h1>

                    </div>
                </div>
            </div>

        </div>


    </div>




</body>



</html>