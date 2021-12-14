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

//Full slider - slider per ofeta 
$(document).ready(function() {
    $('#adaptive').lightSlider({
        adaptiveHeight: true,
        auto: true,
        item: 1,
        slideMargin: 0,
        loop: true
    });
});