function checkValidation(){
    var firstname = document.getElementById('firstName').value;
    var lastname = document.getElementById('lastName').value;
    var age = document.getElementById('age').value;
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    var file = document.getElementById('myfile').value;
    var language = document.getElementById('planguage');

    if(firstname == ""){
        document.getElementById('firstnamedata').innerHTML = "First name cannot be empty";
        return false;
    }
    else if(/^[a-zA-Z]+$/.test(document.getElementById('firstName').value)==false){
        document.getElementById('firstnamedata').innerHTML = "First name cannot contain number";
        return false;
    }
    else{
        document.getElementById('firstnamedata').innerHTML = "";
    }
    
    if(lastname == ""){
        document.getElementById('lastnamedata').innerHTML = "Last name cannot be empty";
        return false;
    }
    else if(/^[a-zA-Z]+$/.test(document.getElementById('lastName').value)==false){
        document.getElementById('lastnamedata').innerHTML = "Last name cannot contain number";
        return false;
    }
    else{
        document.getElementById('lastnamedata').innerHTML = "";
    }
    
    if(age == ""){
        document.getElementById('agedata').innerHTML = "Age cannot be empty";
    }
    else if(isNaN(age)){
        document.getElementById('agedata').innerHTML = "Age must be number";
        return false;
    }else{
        document.getElementById('agedata').innerHTML = "";
    }

    if(document.getElementById('JP').checked == false && document.getElementById('SP').checked == false && document.getElementById('PL').checked == false){
        document.getElementById('designationData').innerHTML = "Please select your designation";
        return false;
    }else{
        document.getElementById('designationData').innerHTML = "";
    }

    if (language.checked == false) {
        document.getElementById('languageData').innerHTML = "please select a language";
        return false;
    }else{
        document.getElementById('languageData').innerHTML = "";
    }

    if(email == ""){
        document.getElementById('emailData').innerHTML = "Email cannot be empty";
        return false;
    }
    else if(/^\S+@+[a-z]{5}\S+.\S+$/.test(document.getElementById('email').value)==false){
        document.getElementById('emailData').innerHTML = "Please enter a valid email";
        return false;
    }
    else{
        document.getElementById('emailData').innerHTML = "";
    }

    if(password == ""){
        document.getElementById('passwordData').innerHTML = "Please cannot be empty";
        return false;
    }
    else if(/^(?!.*\s)(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[!@#$%^&*().]).{8,}$/
    .test(document.getElementById('password').value)==false){
        document.getElementById('passwordData').innerHTML = "Please enter a valid password with one upper case one lower case and a special charecter";
        return false; 
    }
    else{
        document.getElementById('passwordData').innerHTML = "";
    }

    if(file == ""){
        document.getElementById('fileData').innerHTML = "Please enter picture";
        return false;
    }else{
        document.getElementById('fileData').innerHTML = "";
    }
    
    
}