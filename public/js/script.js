const btn = document.querySelector("button.mobile-menu-button");
const menu = document.querySelector(".mobile-menu");

btn.addEventListener("click", () => {
    menu.classList.toggle("hidden");
});

$(window).scroll(function () {
    $('nav').toggleClass('scrolled', $(this).scrollTop() > 150);
})

$(window).scroll(function () {
    $('#bar1').barfiller({ barColor: '#d63031', duration: '4000' });
})

$(window).scroll(function () {
    $('#bar2').barfiller({ barColor: '#0984e3', duration: '4000' });
})

$(window).scroll(function () {
    $('#bar3').barfiller({ barColor: '#f9ca24', duration: '4000' });
})

$(window).scroll(function () {
    $('#bar4').barfiller({ barColor: 'cyan', duration: '4000' });
})

$(window).scroll(function () {
    $('#bar5').barfiller({ barColor: '#1e3799', duration: '4000' });
})


// init Isotope
var $grid = $('.item-details').isotope({
    // options
});
// filter items on button click
$('.item-menu').on('click', 'li', function () {
    var filterValue = $(this).attr('data-filter');
    $grid.isotope({ filter: filterValue });
});

$('.owl-carousel').owlCarousel({
    loop: true,
    autoplay: true,
    autoplaySpeed: 1000,
    autoplayTimeout: 4000,
    slideTransition: 'linear',
    margin: 10,
    dots: true,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        765: {
            items: 2
        },
        1000: {
            items: 3
        }
    }
});







$(document).ready(function () {
    $('.item-details').magnificPopup({
        delegate: 'a',
        type: 'image',
        tLoading: 'Loading image #%curr%...',
        mainClass: 'mfp-img-mobile',
        gallery: {
            enabled: true,
            navigateByImgClick: true,
            preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
        },
        image: {
            tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
            titleSrc: function (item) {
                return item.el.attr('title') + '<small>by Marsel Van Oosten</small>';
            }
        }
    });
});
$('html').smoothScroll();


$("#type").typer({
    strings: [
        "junior web desinger",
        "junior web developer",
        "junior graphics designer"
    ],
    typeSpeed: 80,
    backspaceSpeed: 60,

});
AOS.init({
    duration: 1500,
});
