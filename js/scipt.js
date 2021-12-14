//Funksion per search bar , ne klikim te ikones hapet search bari
$(document).on('click','.search',function(){
    $('.search-bar').addClass('search-bar-active')
});
//Funksion per search bar, pasi qe eshte hapur search bar ne klikimin e butonit x mbullet ai
$(document).on('click','.search-cancel',function(){
    $('.search-bar').removeClass('search-bar-active')
});