function formValidation() {

    //Declaring the variables
    let password = document.forms["regForm"]["psw"].value;
    let conPass = document.forms["regForm"]["confPsw"].value;
    let username = document.forms["regForm"]["username"].value;
    let email = document.forms["regForm"]["email"].value;
    let phoneNumber = document.forms["regForm"]["phoneNumber"].value;
    var errors = "";
    let max = 20;
    let min = 6;

    //getting the length of the username and password strings
    let pass_len = password.length;
    let username_len = username.length;

    if (passValidate(pass_len, max, min)) {}
    if (UserValidate(username_len, max, min)) {}
    if (emailValidate(email)) {}
    if (phNoValidate(phoneNumber)) {}
    if (conPassValidate(conPass)) {}

    //Functions
    function passValidate(pass_len, max, min) {
        if (pass_len == 0 || pass_len > max || pass_len < min) {
            errors += "* Password should not be empty / length be between " + min + " to " + max + '\n';
        }
    }

    function UserValidate(username_len, max, min) {
        var letters_user = /^[A-Za-z]+$/;
        if (username_len == 0 || username_len > max || username_len < min) {
            errors += "* Username not valid, it should not be empty/ length should be between " + min + " to " + max + '\n';
        }
        if (username.match(letters_user)) {} else {
            errors += "* Username must have alphabet characters only." + '\n';
        }
    }

    function emailValidate(email) {
        if (email == "") {
            errors += "* Email cannot be empty." + '\n';
        }
    }

    function phNoValidate(phoneNumber) {
        var numbers = /^[0-9]+$/;
        if (phoneNumber.match(numbers)) {} else {
            errors += "* Phone number must have numeric characters only" + '\n';
        }
    }

    function conPassValidate(conPass) {
        if (conPass != password) {
            errors += "* Password confirmation does not match the password";
        }
    }
    if (errors.length) {
        alert('One or more errors occurred:\n\n' + errors);
        return false;
    }
}