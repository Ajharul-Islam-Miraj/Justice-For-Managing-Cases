function getElement(id){
    return document.getElementById(id);
}

function landingValidation(){
    refreshLog();
    var hasError=false;
    var login_email=getElement("login_email");
    var login_pass=getElement("login_pass");
    var err_login_email=getElement("err_login_email");
    var err_login_pass=getElement("err_login_pass");
    //EMAIL VALIDATION
    if(login_email.value==""){
        hasError=true;
        err_login_email.innerHTML="* Email Required";
        login_email.focus();
        login_email.style.border="2px solid red";
    }
    else if(login_email.value.search("@")==-1){
        hasError=true;
        err_login_email.innerHTML="* Email Invalid";
        login_email.focus();
        login_email.style.border="2px solid red";
    }
    //PASSWORD VALIDATION
    if(login_pass.value==""){
        hasError=true;
        err_login_pass.innerHTML="* Password Required";
        login_pass.focus();
        login_pass.style.border="2px solid red";
    }
    return !hasError;
}

function refreshLog(){
    var login_email=getElement("login_email");
    var login_pass=getElement("login_pass");
    var err_login_email=getElement("err_login_email");
    var err_login_pass=getElement("err_login_pass");
    err_login_email.innerHTML="";
    err_login_pass.innerHTML="";
    login_email.style.border="2px solid black";
    login_pass.style.border="2px solid black";
}