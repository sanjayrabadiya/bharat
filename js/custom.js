// to get current year
function getYear() {
    var currentDate = new Date();
    var currentYear = currentDate.getFullYear();
    document.querySelector("#displayYear").innerHTML = currentYear;
}

getYear();
var isAnimated = false;
// nice select
$(document).ready(function () {
    $("select").niceSelect();
   // $(".progress-bar").loading();
    //$(window).scroll(animateElements);

    $("#navbarDropdown").on("click",function(){
        window.location.href="products.html"
    })
});


// Show animated elements

// client section owl carousel
$(".client_owl-carousel").owlCarousel({
    loop: true,
    items: 4,
    center: true,
    margin: 10,
    dots: false,
    nav: true,
    navText: [],
    autoplay: true,
    autoplayHoverPause: true,
    navText: [
        '<i class="fa fa-angle-left" aria-hidden="true"></i>',
        '<i class="fa fa-angle-right" aria-hidden="true"></i>'
    ],
    responsive: {
        0: {
            items: 1
        },
        992: {
            items: 2
        }
    }
});

$(".prduct-carousel").owlCarousel({
    loop: false,
    items: 1,
    margin: 50,
    dots: false,
    nav: true,
    navText: [],
    autoplay: true,
    autoplayHoverPause: true,
    navText: [
        '<i class="fa fa-angle-left" aria-hidden="true"></i>',
        '<i class="fa fa-angle-right" aria-hidden="true"></i>'
    ],
    responsive: {
        0: {
            items: 1
        },
        992: {
            items: 2
        }
    }
});