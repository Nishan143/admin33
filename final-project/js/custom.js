$(function(){
    $('.study_slide').owlCarousel({
    loop:true,
    margin:30,
    stagePadding: 15,
    autoplay:true,
    smartSpeed: 500,
    autoplayTimeout:2000,
    autoplayHoverPause:true,
    nav: false,
    dots: false,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
        },
        600:{
            items:2,
        },
        1000:{
            items:3,
        },
        1200:{
            items:4,
        }
    }
});
     $('.student_say_slide').owlCarousel({
    loop:true,
    margin:30,
    stagePadding: 15,
    autoplay:true,
    smartSpeed: 500,
    autoplayTimeout:2000,
    autoplayHoverPause:true,
    nav: false,
    dots: false,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
        },
        600:{
            items:2,
        },
        1000:{
            items:3,
        },
        1200:{
            items:3,
        }
    }
})
});
