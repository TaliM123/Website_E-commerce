//Funksion per search bar , ne klikim te ikones hapet search bari
$(document).on('click', '.search', function() {
    $('.search-bar').addClass('search-bar-active')
});
//Funksion per search bar, pasi qe eshte hapur search bar ne klikimin e butonit x mbullet ai
$(document).on('click', '.search-cancel', function() {
    $('.search-bar').removeClass('search-bar-active')
});
//Funksion per log in dhe sign up 
$(document).on('click', '.user,.already-account', function() {
    $('.form').addClass('login-active').removeClass('sign-up-active')
});

$(document).on('click', '.sign-up-btn', function() {
    $('.form').addClass('sign-up-active').removeClass('login-active')
});

$(document).on('click', '.form-cancel', function() {
    $('.form').removeClass('login-active').removeClass('sign-up-active')
});

//Feature Slider - Slideri per Maicat ose produktet tjera qe jan ne dispozicion
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("full-slider-box");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) { slideIndex = 1 }
    if (n < 1) { slideIndex = slides.length }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
}


// Per fix menu gjate levizjes ne faqe rrin gjithmon ne top dhe kur preket ikona e search ose login
//nuk del ne fillin te faqes pra ndreq kete error
$(window).scroll(function() {
    if ($(document).scrollTop() > 50) {
        $('.navigation').addClass('fix-nav');
    } else {
        $('.navigation').removeClass('fix-nav');
    }
});