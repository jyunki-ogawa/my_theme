class HeroSlider {
    constructor(el) {
        this.el = el;
        this.swiper = this._initSwiper();
    }

    _initSwiper() {
        return new Swiper(this.el, {
            loop: true,
            // loopAdditionalSlides: 1,
            autoplay: {
                delay: 4000,
                disableOnInteraction: false,
            },
            speed: 800,
            grabCursor: true,
            centeredSlides: true,
            spaceBetween: 56,
            slidesPerView: 'auto',
            breakpoints: {
                0: {
                    slidesPerView: 1.5,
                    spaceBetween: 16,
                },
                700: {
                    slidesPerView: 'auto',
                    spaceBetween: 40,
                },
            }
        });
    }

    start(options = {}) {
        options = Object.assign({
            delay: 4000,
            disableOnInteraction: false
        }, options);
        
        this.swiper.params.autoplay = options;
        this.swiper.autoplay.start();
    }
    stop() {
        this.swiper.autoplay.stop();
    }
}