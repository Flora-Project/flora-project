$('.owl-1').owlCarousel({
    loop: true,
    nav: true,
    autoplay: true,
    dots: false,
    autoplayHoverPause: true,
    autoplayTimeout: 3000,
    navText : ["<i class='icon-circle-left'></i>","<i class='icon-circle-right'></i>"],
    responsive: {
        0: {
            items: 3,
            margin: 1
        },
        768: {
            margin: 5,
            items: 5
        },
        1000: {
            items: 3,
            margin: 10

        }
    }
})


$('#html5-videos').lightGallery();


////////////Blog Caurosel


  


$(document).ready(function(){
    $('.owl-2').owlCarousel({

    loop: false,
    margin: 20,  
    stagePadding: 200,
    nav: false,
    autoplay: false,
    dots: false,
    autoplayHoverPause: true,
    autoplayTimeout: 3000,
    navText : ["<i class='icon-circle-left'></i>","<i class='icon-circle-right'></i>"],
    responsive: {
        0: {
            items: 1,
            autoplay: true,
            stagePadding: 30,
            loop: true,
            dots: true,
            margin: 10
        },
        500:{
            items: 1,
            autoplay: true,
            stagePadding: 150,
            loop: true,
            margin: 20,
            dots: true,
        },
        650:{
            items:3,
            stagePadding: 30,
            margin: 30
        },
        768: {
            items: 3,
            stagePadding: 50
        },
        1000: {
            items: 3
        }
    }
    });
});


$(document).ready(function(){
    $('.owl-3').owlCarousel({

    loop: true,  
    margin: 4,
    nav: true,
    autoplay: true,
    dots: false,
    autoplayHoverPause: true,
    autoplayTimeout: 3000,
    navText : ["<i class='icon-circle-left'></i>","<i class='icon-circle-right'></i>"],
    responsive: {
        0: {
            items: 3,
            
        },
 
        700: {
            items: 6,
        },
        1000: {
            items: 9
        }
    }
    });
});