/*Funksion per search bar , ne klikim te ikones hapet search bari*/
function showSearchBox() {
    var x1 = document.getElementById("search1");
    x1.classList.add("search-bar-active");
    var x2 = document.getElementById("search2");
    x2.classList.add("search-bar-active");
}

//Funksion per search bar, pasi qe eshte hapur search bar ne klikimin e butonit x mbullet ai
function closeSearchBox() {
    var x = document.getElementById("search1");
    x.classList.remove("search-bar-active");
}
/*Funksion per log in dhe sign up*/

function showLoginBox() {
    var x = document.getElementById("login1");
    x.classList.add("login-active");
}

function removeLoginBox() {
    var x = document.getElementById("login1");
    if (x.classList.contains("login-active")) {
        x.classList.remove("login-active");
    } else if (x.classList.contains("sign-up-active")) {
        x.classList.remove("sign-up-active");
    }
}

function showSignUpBox() {
    var x = document.getElementById("login1");
    x.classList.remove("login-active");
    x.classList.add("sign-up-active");
}

function showLoginBox2() {
    var x = document.getElementById("login1");
    x.classList.remove("sign-up-active");
    x.classList.add("login-active");
}

// Per fix menu gjate levizjes ne faqe rrin gjithmon ne top dhe kur preket ikona e search ose login
//nuk del ne fillin te faqes pra ndreq kete error

window.onscroll = function() { fixedNavbar() };

var header1 = document.getElementById("nav1");
var header2 = document.getElementById("nav2");

function fixedNavbar() {
    if (window.pageYOffset > 50) {
        header1.classList.add("fix-nav");
        header2.classList.add("fix-nav");
    } else {
        header1.classList.remove("fix-nav");
        header2.classList.remove("fix-nav");
    }
}