$(document).ready (function (){
    $(document).on("keyup", function(e) {
        let asd = e.target.id.split("-")[0];
        let checkerControl;
        switch (asd){
            case "reg":
                checkerControl = document.getElementById('registerChecker');
                if(localStorage.getItem("usernameCheck") == "true" && localStorage.getItem("emailCheck") == "true" && localStorage.getItem("passwordCheck") == "true"){
                    console.log("triple true check");
                    document.getElementById('reg-submit').disabled = false;
                } else {
                    console.log("else check");
                    document.getElementById('reg-submit').disabled = true;
                }
                break;
            case "log":
                checkerControl = document.getElementById('loginChecker');
                if(localStorage.getItem("emailCheck") == "true"){
                    console.log("true check");
                    document.getElementById('log-submit').disabled = false;
                } else {
                    console.log("else check");
                    document.getElementById('log-submit').disabled = true;
                }
                break;
        }

        checkerControl.innerHTML = '';
        switch (e.target.id) {
            case "reg-username":
                setChecker("register", "username");
                realTimeValidation("username", e.target.value);
                break;
            case "reg-email":
                setChecker("register","email");
                realTimeValidation("email", e.target.value);
                break;
            case "reg-password":
                setChecker("register","password");
                realTimeValidation("password", e.target.value);
                break;
            case "log-email":
                setChecker("login", "email");
                realTimeValidation("email", e.target.value);
                break;
            default:
                break;
        }
    });
});
const realTimeValidation = (type, value) =>{
    switch (type){
        case "username":{
            let lengthPattern = new RegExp("(?=.{6,})");
            let element;
            if (lengthPattern.test(value)){
                element = document.getElementById("lengthUsername");
                element.style.background = "green";
                setValid("reg-username", value);
                localStorage.setItem("usernameCheck", "true");
            }else{
                setInvalid("reg-username");
                localStorage.setItem("usernameCheck", "false");
            }
            break;
        }
        case "email":{
            let validEmailPattern = new RegExp("^\\w+([\\.-]?\\w+)*@\\w+([\\.-]?\\w+)*(\\.\\w{2,3})+$");
            let element;
            if (validEmailPattern.test(value)){
                element = document.getElementById("validEmail");
                element.style.background = "green";
                setValid("reg-email", value)
                localStorage.setItem("emailCheck", "true");
            }else{
                setInvalid("reg-email");
                localStorage.setItem("emailCheck", "false");
            }
            break;
        }
        case "password":{
            let lowercasePattern   = new RegExp("(?=.*[a-z])");
            let uppercasePattern   = new RegExp("(?=.*[A-Z])");
            let numberPattern      = new RegExp("(?=.*[0-9])")
            let specialCharPattern = new RegExp("([^A-Za-z0-9])");
            let minLength          = 8;
            let element;
            if (lowercasePattern.test(value)){
                element = document.getElementById("lowercasePassword");
                element.style.background = "green";
            }

            if (uppercasePattern.test(value)){
                element = document.getElementById("uppercasePassword");
                element.style.background = "green";
            }

            if (numberPattern.test(value)){
                element = document.getElementById("numberPassword");
                element.style.background = "green";
            }

            if (specialCharPattern.test(value)){
                element = document.getElementById("specialCharPassword");
                element.style.background = "green";
            }

            /*if (minLength < value.length()){
                element = document.getElementById("minLengthPassword");
                element.style.background = "green";
            }*/

            if(lowercasePattern.test(value) && uppercasePattern.test(value) && numberPattern.test(value) && specialCharPattern.test(value) && minLength <= value.length){
                setValid("reg-password", value);
                localStorage.setItem("passwordCheck", "true");
                console.log("PASSWORD CHEKC GOOOD");
            }else{
                setInvalid("reg-password");
                localStorage.setItem("passwordCheck", "false");
                console.log("PASSWORD CHEKC SHITI");
            }
            break;
        }
    }
};
const setChecker = (type, element) => {
    console.log("SET CHECKER");
    let checkerControl;
    switch (type) {
        case "login":
            checkerControl = document.getElementById("loginChecker");
            break;
        case "register":
            checkerControl = document.getElementById("registerChecker");
            break;
    }
    switch (element){
        case "username": {
            console.log("SET CHECKER case1");
            let length = document.createElement("div");
            let className = "twenty-width text-extra-small flex center darkblue-bgc white-font";
            let customStyle = "line-height: 1.5; border-radius: 25px;";

            length.className = className;
            length.style = customStyle;
            length.id = "lengthUsername";
            length.innerHTML = "Hosszúság";

            checkerControl.style.justifyContent = "center";
            checkerControl.appendChild(length);
            break;
        }
        case "email": {
            console.log("SET CHECKER case2");
            let validEmail = document.createElement("div");
            let className = "twenty-width text-extra-small flex center darkblue-bgc white-font";
            let customStyle = "line-height: 1.5; border-radius: 25px;";

            validEmail.className = className;
            validEmail.style = customStyle;
            validEmail.id = "validEmail";
            validEmail.innerHTML = "Helyes Email";

            checkerControl.style.justifyContent = "center";
            checkerControl.appendChild(validEmail);
            break;
        }
        case "password": {
            console.log("SET CHECKER case3");
            let uppercase   = document.createElement("div");
            let lowercase   = document.createElement("div");
            let number      = document.createElement("div");
            let specialChar = document.createElement("div");
            let minLength   = document.createElement("div");

            let className = "twenty-width text-extra-small flex center darkblue-bgc white-font";
            let customStyle = "line-height: 1.5; border-radius: 25px;";

            uppercase.className = className;
            uppercase.style     = customStyle;
            uppercase.id        = "uppercasePassword";
            uppercase.innerHTML = "Nagybetű";

            lowercase.className = className;
            lowercase.style     = customStyle;
            lowercase.id        = "lowercasePassword";
            lowercase.innerHTML = "Kisbetű";

            number.className = className;
            number.style     = customStyle;
            number.id        = "numberPassword";
            number.innerHTML = "Szám";

            specialChar.className = className;
            specialChar.style     = customStyle;
            specialChar.id        = "specialCharPassword";
            specialChar.innerHTML = "Speciális karakter";

            minLength.className = className;
            minLength.style     = customStyle;
            minLength.id        = "minLengthPassword";
            minLength.innerHTML = "Minimalis karakter szam";

            checkerControl.style.justifyContent = "space-between";
            checkerControl.appendChild(uppercase);
            checkerControl.appendChild(lowercase);
            checkerControl.appendChild(number);
            checkerControl.appendChild(specialChar);
            //checkerControl.appendChild(minLength);
            break;
        }
    }
};
const setInvalid = (elementID) => {
    console.log(elementID);
    const element = document.getElementById(elementID);
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');
    errorDisplay.innerHTML = "<i class='fas fa-times-circle' style='color: red; font-size: 24px;'></i>";
};
const setValid = (elementID, elementValue) => {
    const element = document.getElementById(elementID);
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    element.value = elementValue;
    errorDisplay.innerHTML = "<i class='fa fa-check' style='color: green; font-size: 24px;'></i>";
};

function ErrorCheck(element, index, data, type){
    let username = data[0];
    let email    = data[1];
    console.log(data);
    switch (type){
        case "register":{
            if(element == 'NULL'){
                switch (index){
                    case 0:
                        setValid('reg-username', username);
                        break;
                    case 1:
                        setValid('reg-email', email);
                        break;
                    case 2:
                        setValid('reg-password', '');
                        break;
                    case 3:
                        setValid('reg-rpassword', '');
                        break;
                }
            }else if(element == 'ERROR'){
                switch (index){
                    case 0:
                        setInvalid('reg-username');
                        break;
                    case 1:
                        setInvalid('reg-email');
                        break;
                    case 2:
                        setInvalid('reg-password');
                        break;
                    case 3:
                        setInvalid('reg-password');
                        setInvalid('reg-rpassword');
                        break;
                }
            }
        }
        case "login":{
            let email = data[0];
            console.log(email);
            if(element == 'NULL'){
                switch (index){
                    case 0:
                        setValid('log-email', email);
                    case 1:
                        setValid('log-password', '');
                }
            }else if(element == 'ERROR'){
                switch (index){
                    case 0:
                        setInvalid('log-email');
                    case 1:
                        setInvalid('log-password');
                }
            }
        }
    }
}
const manageErrors = (errors, type, data) =>{
    localStorage.passwordCheck = false;
    console.log('manegeErrors');
    //errors[0] - username, errors[1] - email, errors[2] - pass, errors[3] - rpass
    let errorsObj = JSON.parse(errors);
    let dataObj   = JSON.parse(data);
    console.log(errorsObj);
    console.log(dataObj);
    errorsObj.forEach(function (element, index){
            ErrorCheck(element, index, dataObj, type);
    });
};

