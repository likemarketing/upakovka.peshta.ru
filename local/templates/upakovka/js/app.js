/********** RECAPTCHA **********/
var onloadCallbackRecap = function() {
    grecaptcha.ready(function () {
        grecaptcha.execute('6LfkvkMaAAAAABn08kEced07b6TehmZKvtKfsrTc', { action: 'contact_callback' }).then(function (token) {
            var inputs = document.getElementsByName("recaptcha_response");
            inputs.forEach(el => el.value = token);
        });
    });
};
/********** SLIDERS **********/
$(document).ready(function(){
    $('.works-slider').slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        centerMode: false,
        variableWidth: true,
        arrows: true,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    arrows: false,
                    slidesToShow: 1,
                    adaptiveHeight: false,
                    dots: true,
                }
            }],
    });

    $('.reviews-slider').slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 3,
        adaptiveHeight: false,
        autoplay: false,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    arrows: false,
                    slidesToShow: 1,
                    adaptiveHeight: false
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    slidesToShow: 1,
                    adaptiveHeight: false
                }
            }
        ]
    });

    $('.cases-list').slick({
        lazyLoad: 'ondemand',
        dots: false,
        infinite: false,
        speed: 300,
        slidesToShow: 1,
        adaptiveHeight: false,
        autoplay: true,
    });

    $('.catalog-section-detail-cases__list.mobile').slick({
        /*lazyLoad: 'ondemand',*/
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        infinite: false,
        arrows: false,
    });
});
