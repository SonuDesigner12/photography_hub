
console.log("file add");


let nameError = document.querySelector("#name-error");
let emailError = document.querySelector("#email-error");
let phoneError = document.querySelector("#phone-error");
let passwordError = document.querySelector("#password-error");
let messageError = document.querySelector("#message-error");
let submitError = document.querySelector("#submit-error");

function validateName() {
    let nameField = document.querySelector("#name").value;

    if(nameField.length == 0) {
        nameError.innerHTML = "Name is required";
        console.log("name is requeired");
        return false;

    }
     if(nameField.length < 3) {
            nameError.innerHTML = "Name should be at least 3 characters long";
            return false;

        }
        nameError.innerHTML = "";
        return true;

}

function validateEmail() {
    let emailField = document.querySelector("#email").value;

    if(emailField.length == 0) {
        emailError.innerHTML = "Email is required";
        return false;

    }
    if(emailField.indexOf("@") <= 0) {
        emailError.innerHTML = "Invalid email address";
        return false;

    }
    if(emailField.lastIndexOf('.') !== emailField.length - 4 && emailField.lastIndexOf('.') !== emailField.length - 3) {
        emailError.innerHTML = "invalid email";
        return false;

    }
        emailError.innerHTML = "";
        return true;

}

function validatePhone() {
    let phoneField = document.querySelector("#phone").value;

    if(phoneField.length == 0) {
        phoneError.innerHTML = "Phone number is required";
        return false;

    }
    if(phoneField.length != 10) {
        phoneError.innerHTML = "write only 10 digits phone number";
        return false;

    }
    
        phoneError.innerHTML = "";
        return true;

        
}

function validatePassword() {
    let passwordField = document.querySelector("#password").value;

    if(passwordField.length == 0) {
        passwordError.innerHTML = "Password is required";
        return false;

    }
    if(passwordField.length < 8) {
        passwordError.innerHTML = "Password must be at least 8 characters long";
        return false;

    }

        passwordError.innerHTML = "";
        return true;


}

function validateMessage() {
    let messageField = document.querySelector("#message").value;
    let requeiredChar = 6;
    let leftChar = requeiredChar - messageField.length;

    if(messageField.length == 0) {
        messageError.innerHTML = "Message is required";
        return false;

    }
    if(leftChar > 0) {
        messageError.innerHTML = `${leftChar} character more required`;
        return false;

    }
        
        messageError.innerHTML = "";
        return true;
    
}


function validateForm() {

    if(!validateName() || !validateEmail() || !validatePhone() || !validatePassword() || !validateMessage()) {

        submitError.innerHTML = "please fill required filed";
        setTimeout(() => {
            submitError.innerHTML = ""
        }, 3000);
        return false;

    }else {
        submitError.innerHTML = "";
       

    }
}


