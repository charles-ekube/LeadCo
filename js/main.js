$(document).ready(function () {
    $(".owl-carousel").owlCarousel({
        loop:true,
        autoPlay:true,
        autoPlayTimeout:9000,
        autoPlayHoverPause:true,
        nav:false,
        dots:true,
        responsive:{
            300:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:3
            }
        }
    });



    $('.pop').magnificPopup({
        type: 'video'
    });
});

$(document).ready(function(){
    $('.carousel').carousel(
        {
            dist: 0,
            padding: 0,
            indicators: false,
            duration: 100
        }
    );
});

autoplay()
function autoplay() {
    $('.carousel').carousel('next');
    setTimeout(autoplay, 4500);
}