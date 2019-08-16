$(document).ready(function(){
    $('.owl-one').owlCarousel({
        loop:true,
        margin:40,
        nav: true,
        navText: [
            '<i class="fas fa-arrow-left owl-prev"></i>',
            '<i class="fas fa-arrow-right owl-next"></i>'
        ],
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
            },
            400:{
                items:1,
                stagePadding: 60,
            },
            600:{
                items:2,
            },
            1025:{
                items:3,
                loop:true
            },
            1351: {
                items:4,
                loop: true
            }
        }
    })

})

// EMPLOYERS SLIDE & SPECIALIZATION SLIDE FROM OVER ONS PAGE
$(document).ready(function(){
    $('.owl-two').owlCarousel({
        loop:false,
        margin:40,
        nav: false,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
            },
            400:{
                items:1,
                stagePadding: 20,
            },
            500:{
                items:1,
                stagePadding: 60,
            },
            600:{
                items:2,
            },
            1025:{
                items:3,
                loop:false
            },
            1351: {
                items:4,
                loop: false
            }
        }
    })
})

// TEXT SLIDE
$(document).ready(function(){
    $('.owl-three').owlCarousel({
        loop:true,
        margin:0,
        dots:true,
        nav: true,
        autoplay: true,
        autoplayTimeout: 3000,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
            },
            600:{
                items:1,
            },
            1000:{
                items:1,
                loop:true
            }
        }
    })
})


let navMobile = document.querySelector('.side_nav');

function openNav () {
    document.querySelector("#side-navigation").style.width = '30rem';
    document.querySelector("#side-navigation").style.display = 'block';
    document.querySelector("#open-menu").style.display = 'none';
    document.querySelector(".closebtn").style.display = 'block';
}

function closeNav() {
    navMobile.style.display = 'none';
    document.querySelector('#open-menu').style.display = 'block';
    document.querySelector(".closebtn").style.display = 'none';
}
