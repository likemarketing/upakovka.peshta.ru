

if($('.main-slider').length !== 0){
    $('.main-slider').slick({
        infinite: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        initialSlide: 0,
        fade: true,
        arrows: true,
        nextArrow: '<span class="arrow-next"></span>',
        prevArrow: '<span class="arrow-prev"></span>',
        asNavFor: '.thumb-slider',
        adaptiveHeight: true
    });

    $('.thumb-slider').slick({
        infinite: false,
        slidesToShow: 6,
        slidesToScroll: 1,
        arrows: false,
        focusOnSelect: true,
        asNavFor: '.main-slider',
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 4
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 2
                }
            }
        ]
    });
}


const filter = document.querySelector('.blur');

const addFilters = () => filter.classList.toggle('multiple-filters');
