function validateLogin() {
    var p = document.getElementById('pass01').value;
    var e = document.getElementById('email01').value;
    var emailcheck = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    var errors = [];

    if (e.search(emailcheck)) {
        errors.push("Please type a valid e-mail address.");
    }
    if (p.length < 8) {
        errors.push("Your password must be at least 8 characters");
    }
    if (p.length > 32) {
        errors.push("Your password must be at max 32 characters");
    }
    if (p.search(/[a-z]/i) < 0) {
        errors.push("Your password must contain at least one letter.");
    }
    if (p.search(/[A-Z]/) < 0) {
        errors.push("Your password must contain at least one upper case letter.");
    }
    if (p.search(/[0-9]/) < 0) {
        errors.push("Your password must contain at least one digit.");
    }
    if (p.search(/[!@#.\$%\^&\*_]/) < 0) {
        errors.push("Your password must contain at least special char from [ ! @ # $ % ^ & * _  .]");
    }
    if (errors.length > 0) {
        alert(errors.join("\n"));
        return false;
    }
    return true;
}

function validateCreateAccount() {
    var p = document.getElementById('pass02').value;
    var e = document.getElementById('email02').value;
    var n = document.getElementById('name02').value;
    var emailcheck = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    var errors = [];

    if (n.search(/^[a-zA-Z ]+$/)) {
        errors.push("Please type a valid Name and Surname.");
    }
    if (e.search(emailcheck)) {
        errors.push("Please type a valid e-mail address.");
    }
    if (p.length < 8) {
        errors.push("Your password must be at least 8 characters");
    }
    if (p.length > 32) {
        errors.push("Your password must be at max 32 characters");
    }
    if (p.search(/[a-z]/i) < 0) {
        errors.push("Your password must contain at least one letter.");
    }
    if (p.search(/[A-Z]/) < 0) {
        errors.push("Your password must contain at least one upper case letter.");
    }
    if (p.search(/[0-9]/) < 0) {
        errors.push("Your password must contain at least one digit.");
    }
    if (p.search(/[!@#.\$%\^&\*_]/) < 0) {
        errors.push("Your password must contain at least special char from [ ! @ # $ % ^ & * _  .]");
    }
    if (errors.length > 0) {
        alert(errors.join("\n"));
        return false;
    }
    return true;
}