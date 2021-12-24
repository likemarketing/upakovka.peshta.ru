

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

function googleReachGoal(a,n){if("function"==typeof window.gtag&&window.gtag("event",n,{event_category:a,event_action:n}),window._gaq&&"function"==typeof window._gaq.push&&window._gaq.push(["_trackEvent",a,n]),"function"==typeof window.ga&&"function"==typeof window.ga.getAll)for(var e=window.ga.getAll(),o=0;o<e.length;o++)e[o].get("name").match(/^gtag_/i)||e[o].send("event",a,n);if(window._gaUA_real&&"function"==typeof window._gaUA_real.getAll){var e=window._gaUA_real.getAll();2==e.length&&e[1].send("event",a,n)}}var yandexReachGoal=function(a){if(window.Ya)for(var n=window.Ya.Metrika||window.Ya.Metrika2,e=n?n.counters():[],o=0;o<e.length;o++){var t="yaCounter"+e[o].id;window[t]&&window[t].reachGoal(a)}},reachGoal=function(a){var n,e="";(n=a.match(/^(.+?):(.+?)$/))&&(e=n[1],a=n[2]),yandexReachGoal(a),e&&(yandexReachGoal(e),googleReachGoal(e,a))};

window.addEventListener('onBitrixLiveChat', function(event) {
    var widget = event.detail.widget;

    $(widget.buttonInstance.container).find('.b24-widget-button-openline_livechat').on('click', function(e) {
        reachGoal('consultant');
    });

    widget.subscribe({
        type: BX.LiveChatWidget.SubscriptionType.userForm,
        callback: function(data) {
            reachGoal('form:contact');
        }
    });
});
