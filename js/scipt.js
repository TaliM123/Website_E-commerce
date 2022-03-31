//Funksion per search bar , ne klikim te ikones hapet search bari
$(document).on('click', '.search', function () {
    $('.search-bar').addClass('search-bar-active')
});
//Funksion per search bar, pasi qe eshte hapur search bar ne klikimin e butonit x mbullet ai
$(document).on('click', '.search-cancel', function () {
    $('.search-bar').removeClass('search-bar-active')
});

// Per fix menu gjate levizjes ne faqe rrin gjithmon ne top dhe kur preket ikona e search ose login
//nuk del ne fillin te faqes pra ndreq kete error
$(window).scroll(function () {
    if ($(document).scrollTop() > 50) {
        $('.navigation').addClass('fix-nav');
    } else {
        $('.navigation').removeClass('fix-nav');
    }
});

/*Per menu responzive*/
$(document).ready(function () {
    $('.toggle').click(function () {
        $('.toggle').toggleClass('active')
        $('.navigation').toggleClass('active')
    })
})

/*Pop up for registering and log in*/
function successfulRegister() {
    alert("Thanks for Registering with Us!");
}
/*Check if at least one checkbox in adminpanel is checked*/
$(document).ready(function(){
    var checkboxes = $('.checkboxes');
    checkboxes.change(function(){
        if($('.checkboxes:checked').length>0) {
            checkboxes.removeAttr('required');
        } else {
            checkboxes.attr('required', 'required');
        }
    });
});