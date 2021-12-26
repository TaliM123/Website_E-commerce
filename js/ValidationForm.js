function validateLogin() {
    var p = document.getElementById('pass011').value,
    var e = document.getElementById('email01').value,
    var emailcheck = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    
        errors = [];
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
        errors.push("Your password must contain at least special char from -[ ! @ # $ % ^ & * _  .]");
    }
    if(e.search(/^[^\s@]+@[^\s@]+\.[^\s@]+$/) = false){
        errors.push("Please Write a Valid Email Adress");
    }
    if (errors.length > 0) {
        alert(errors.join("\n"));
        return false;
    }
    return true;
}
