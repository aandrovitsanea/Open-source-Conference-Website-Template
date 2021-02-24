//-----INPUT VALIDATION-------//
function SubmitForm() {
    //----FIRST NAME----//
    let fnameValid = /^[α-ωΑ-ΩA-Za-zάέίύήόώΆΈΊΎΌΏΉ]+$/.test(document.getElementById("fname").value) && document.getElementById("fname").value.length <= 30; //Greek or Latin characters and less than 31 chartacters
    if (fnameValid) {
        console.log("fname")
        //document.getElementById("subscription_form").submit();
    } else {
        document.getElementById("fname").value = "";
        document.getElementById("fnameError").hidden = false;
    }
    //----LAST NAME----//
    let lnameValid = /^[α-ωΑ-ΩA-Za-zάέίύήόώΆΈΊΎΌΏΉ]+$/.test(document.getElementById("lname").value) && document.getElementById("lname").value.length <= 30; //Greek or Latin characters and less than 31 chartacters
    if (lnameValid) {
        console.log("lname")
    } else {
        document.getElementById("lname").value = "";
        document.getElementById("lnameError").hidden = false;
    }
    //----BIRTHDAY----//
    let dobValid = document.getElementById("dob").value != "";
    if (dobValid) {
        console.log("dob")
    } else {
        document.getElementById("dobError").hidden = false;
    }
    //----GENDER----//
    let genderValid = document.getElementById("Mrs").checked || document.getElementById("Mr").checked || document.getElementById("non_bin").checked;
    if (genderValid) {
        console.log("genderValid")
    } else {
        document.getElementById("genderError").hidden = false;
    }
    //----COUNTRY----//
    let countryValid = document.getElementById("country").value != "choose";
    if (countryValid) {
        console.log("CountryValid")
    } else {
        document.getElementById("countryError").hidden = false;
    }
    //----E-MAIL----//
    let emailValid = /^[a-zA-Z0-9.-_]{1,}@[a-zA-Z.-]{2,}[.]{1}[a-zA-Z]{2,}/.test(document.getElementById("email").value) // x@xx.xx format
    if (emailValid) {
        console.log("email")
    } else {
        document.getElementById("email").value = "";
        document.getElementById("emailError").hidden = false;
    }
    //----TELEPHONE----//
    let phoneValid = /^[0-9]{7,10}/.test(document.getElementById("telephone").value) // 7-10 numbers
    if (phoneValid) {
        console.log("pohne")
    } else {
        document.getElementById("telephone").value = "";
        document.getElementById("phoneError").hidden = false;
    }
    //----USERNAME----//
    let usernameValid = /^[A-Za-z]{6,8}/.test(document.getElementById("username").value) // 6-8 latin characters
    if (usernameValid) {
        console.log("username")
    } else {
        document.getElementById("username").value = "";
        document.getElementById("usernameError").hidden = false;
    }
    //----PASSWORD----//
    let passwordValid = /^[A-Za-z]{6,8}/.test(document.getElementById("password").value) // 6-8 latin characters
    if (passwordValid) {
        console.log("password")
    } else {
        document.getElementById("password").value = "";
        document.getElementById("passwordError").hidden = false;
    }
    //----CONFIRM PASSWORD----//
    let confirmPassword = document.getElementById("password").value == document.getElementById("conf_password").value;
    if (confirmPassword) {
        console.log("conf_pass")
    } else {
        document.getElementById("conf_password").value = "";
        document.getElementById("conf_passwordError").hidden = false;
    }
    let acceptConditions = document.getElementById("terms").value
    if (fnameValid && lnameValid && dobValid && genderValid && countryValid && emailValid && phoneValid && usernameValid && passwordValid && confirmPassword && acceptConditions) {
        document.getElementById("subscription_form").submit();
    }
}

//-----HIDE ERROR MESSAGES----//
function de_Error(errorID) {
    document.getElementById(errorID).hidden = true;
}
