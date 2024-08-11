let nameError = document.querySelector("#name-error");
let phoneError = document.querySelector("#phone-error");
let emailError = document.querySelector("#email-error");
let passwordError = document.querySelector("#password-error");
let msgError = document.querySelector("#message-error");
let submitError = document.querySelector("#submit-error");

function validateName() {
    // console.log("name validate function run");

    let nameField = document.querySelector("#nameField").value;

    if(nameField.length == 0) {
        nameError.innerHTML = "name is required";
        return false;

    }
    if(nameField.length < 3) {
        nameError.innerHTML = "name should be more then 3 char.";
        return false;

    }
    nameError.innerHTML = "";
    return true;
}

function validatePhone() {
    let phoneField = document.querySelector("#phoneField").value;

    if(phoneField.length == 0) {
        phoneError.innerHTML = "phone number is requeird";
        return false;

    }
    if(phoneField.length != 10) {
        phoneError.innerHTML = "phone number should be 10 digit";
        return false;

    }
    phoneError.innerHTML = ""
    return true;


}

function validateEmail() {
    let emailField = document.querySelector("#emailField").value;
  

    if(emailField.length == 0) {
        emailError.innerHTML = "Email is requried";
        return false;

    }
    if(emailField.indexOf('@') <= 0) {
        emailError.innerHTML = "invalid email";
        return false;

    }
    if(emailField.lastIndexOf('.') !== emailField.length - 4 && emailField.lastIndexOf('.') !== emailField.length - 3) {
        emailError.innerHTML = "invalid email";
        return false;

    }
    emailError.innerHTML = "";
    return true;


}

function validatepassword() {

    let passwordField = document.querySelector("#passwordField").value;


    if(passwordField.length == 0) {
        passwordError.innerHTML = "password is required";
        return false;

    }
    if(passwordField.length < 8) {
        passwordError.innerHTML = "password should be 8 character long";
        return false;

    }
    passwordError.innerHTML = "";
    return true;



}

function validateForm() {

    if(!validateName() || !validatePhone || !validateEmail() || !validatepassword()) {
        submitError.innerHTML = "Please fill all the fields";
        // alert("not validate form");
        setTimeout(() => {
            submitError.innerHTML = "";
        }, 3000);
        return false;
    }
    else {
        submitError.innerHTML = "";
        alert("Thanks for apply");
        return true;
    }

}



/* show gallery btn */

function showImage() {
    let showImage = document.querySelector(".image_box1");
    showImage.classList.toggle("show_galery");
}


