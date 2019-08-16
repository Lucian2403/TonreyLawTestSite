// document.querySelector('.fa-search').onclick = function (){searchIcon()};

let parent = document.querySelector('.search_icon');

let form = parent.querySelector('form');
let field = form.querySelector('input');
let button = parent.querySelector('.fa-search');


function searchIcon() {
    field.style.display = "inline-block";
}

document.addEventListener('click', (e) => {

    if (field.style.display === 'inline-block' ) {
        if (e.target === field || e.target === form) {
            field.style.display = 'inline-block';
            return;
        }
        if (e.target !== field || e.target !== button){
            field.style.display = 'none';
        }
    } else if (e.target === button) {
        searchIcon();
    }

});

//Hamburger Icon Effect
var icon        = document.querySelector('.hamburger');
var mmenuCanvas = document.querySelector('#primary-menu');

document.addEventListener('click', (e) => {
    if (e.target === icon) {
        icon.classList.toggle('x-effect');
    } else {
        icon.classList.remove('x-effect');
    }
});


//MMENU
$(document).ready(function() {

    // MMENU
    var $navbar = $('#primary-menu');
    var $mobileNav = $('#nav-mobile');

    $navbar
        .clone()
        //.removeClass('navbar')
        .appendTo($mobileNav);

    $mobileNav.mmenu({
        offCanvas: {
            position: 'left',
            zposition: 'front',
        },
        "extensions": [
            "pagedim-black",
            "theme-dark",
            "fx-listitems-slide",
            "shadow-page",
            "shadow-panels"
        ],
        "navbars": [
            {
                "position": "top",
                "content": [
                    "searchfield"
                ]
            }
        ],
        "searchfield": {
            "panel": true
        }
    }, {
        "searchfield": {
            "clear": true
        }
    });
});