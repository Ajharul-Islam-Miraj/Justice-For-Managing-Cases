function getElement(id){
    return document.getElementById(id);
}

function registrationValidation(){
    refreshReg();
    var hasError=false;
    var pp=getElement("pp");
    var err_pp=getElement("err_pp");
    var fullname=getElement("fullname");
    var err_fullname=getElement("err_fullname");
    var username=getElement("username");
    var err_username=getElement("err_username");
    var email=getElement("email");
    var err_email=getElement("err_email");
    var phone=getElement("phone");
    var err_phone=getElement("err_phone");
    var pass=getElement("pass");
    var err_pass=getElement("err_pass");
    var cpass=getElement("cpass");
    var err_cpass=getElement("err_cpass");
    var nid=getElement("nid");
    var err_nid=getElement("err_nid");
    var dob=getElement("dob");
    var err_dob=getElement("err_dob");
    var gender_male=getElement("gender_male");
    var gender_female=getElement("gender_female");
    var err_gender=getElement("err_gender");
    var address=getElement("address");
    var err_address=getElement("err_address");
    var city=getElement("city");
    var err_city=getElement("err_city");
    var state=getElement("state");
    var err_state=getElement("err_state");
    var zip=getElement("zip");
    var err_zip=getElement("err_zip");
    //PROFILE PIC VALIDATION
    if(pp.value==""){
        hasError=true;
        err_pp.innerHTML="* Profile Picture Required.";
        pp.focus();
        pp.style.border="2px solid red";
    }
    //FULLNAME VALIDATION
    if(fullname.value==""){
        hasError=true;
        err_fullname.innerHTML="* Fullname Required.";
        fullname.focus();
        fullname.style.border="2px solid red";
    }
    //USERNAME VALIDATION
    if(username.value==""){
        hasError=true;
        err_username.innerHTML="* Username Required.";
        username.focus();
        username.style.border="2px solid red";
    }
    else if(username.value.search(" ")!=-1){
        hasError=true;
        err_username.innerHTML="* Username Cannot Contain Spaces.";
        username.focus();
        username.style.border="2px solid red";
    }
    else if(username.value.length<8){
        hasError=true;
        err_username.innerHTML="* Username Must Be >=8 Characters.";
        username.focus();
        username.style.border="2px solid red";
    }
    //EMAIL VALIDATION
    if(email.value==""){
        hasError=true;
        err_email.innerHTML="* Email Required.";
        email.focus();
        email.style.border="2px solid red";
    }
    else if(email.value.search("@")==-1){
        hasError=true;
        err_email.innerHTML="* Email Invalid.";
        email.focus();
        email.style.border="2px solid red";
    }
    //PHONE VALIDATION
    if(phone.value==""){
        hasError=true;
        err_phone.innerHTML="* Phone Required.";
        phone.focus();
        phone.style.border="2px solid red";
    }
    else if(phone.value.length!=11){
        hasError=true;
        err_phone.innerHTML="* Phone Number Must be 11 Digits.";
        phone.focus();
        phone.style.border="2px solid red";
    }
    //PASSWORD VALIDATION
    if(pass.value==""){
        hasError=true;
        err_pass.innerHTML="* Password Required.";
        pass.focus();
        pass.style.border="2px solid red";
    }
    else if(pass.value.length<8){
        hasError=true;
        err_pass.innerHTML="* Password must be >=8 characters.";
        pass.focus();
        pass.style.border="2px solid red";
    }
    else if(pass.value.search("1")==-1 && pass.value.search("2")==-1 && pass.value.search("3")==-1 && pass.value.search("4")==-1 && pass.value.search("5")==-1 && pass.value.search("6")==-1 && pass.value.search("7")==-1 && pass.value.search("8")==-1 && pass.value.search("9")==-1 && pass.value.search("0")==-1){
        hasError=true;
        err_pass.innerHTML="* Password must have 1 numeric";
        pass.focus();
        pass.style.border="2px solid red";
    }
    else if(pass.value.toLowerCase()==pass.value && pass.value.toUpperCase()==pass.value){
        hasError=true;
        err_pass.innerHTML="* Password must contain 1 Upper and Lowercase letter.";
        pass.focus();
        pass.style.border="2px solid red";
    }
    else if(pass.value.search("#")==-1 && pass.value.search("?")==-1){
        hasError=true;
        err_pass.innerHTML="* Password must contain '#' or '?'.";
        pass.focus();
        pass.style.border="2px solid red";
    }
    else if(cpass.value==""){
        hasError=true;
        err_cpass.innerHTML="* Confirmed Password Required.";
        cpass.focus();
        cpass.style.border="2px solid red";
    }
    else if(pass.value!=cpass.value){
        hasError=true;
        err_pass.innerHTML="* Password and Confirm Password must be same.";
        pass.focus();
        pass.style.border="2px solid red";
    }
    //NID VALIDATION
    if(nid.value==""){
        hasError=true;
        err_nid.innerHTML="* NID Required.";
        nid.focus();
        nid.style.border="2px solid red";
    }
    //DATE OF BIRTH VALIDATION
    if(dob.value==""){
        hasError=true;
        err_dob.innerHTML="* Birthday Required.";
        dob.focus();
        dob.style.border="2px solid red";
    }
    //GENDER VALIDATION
    if(gender_male.checked==false && gender_female.checked==false){
        hasError=true;
        err_gender.innerHTML="* Gender Required.";
        gender_male.focus();
        gender_male.style.border="2px solid red";
    }
    //ADDRESS VALIDATION
    if(address.value==""){
        hasError=true;
        err_address.innerHTML="* Address Required.";
        address.focus();
        address.style.border="2px solid red";
    }
    //CITY VALIDATION
    if(city.value==""){
        hasError=true;
        err_city.innerHTML="* City Required.";
        city.focus();
        city.style.border="2px solid red";
    }
    //STATE VALIDATION
    if(state.value==""){
        hasError=true;
        err_state.innerHTML="* State Required.";
        state.focus();
        state.style.border="2px solid red";
    }
    //ZIP VALIDATION
    if(zip.value==""){
        hasError=true;
        err_zip.innerHTML="* Zip/Postal Code Required.";
        zip.focus();
        zip.style.border="2px solid red";
    }
    return !hasError;
}

function refreshReg(){
    var err_pp=getElement("err_pp");
    var err_fullname=getElement("err_fullname");
    var err_username=getElement("err_username");
    var err_email=getElement("err_email");
    var err_phone=getElement("err_phone");
    var err_pass=getElement("err_pass");
    var err_cpass=getElement("err_cpass");
    var err_nid=getElement("err_nid");
    var err_dob=getElement("err_dob");
    var err_gender=getElement("err_gender");
    var err_address=getElement("err_address");
    var err_city=getElement("err_city");
    var err_state=getElement("err_state");
    var err_zip=getElement("err_zip");

    var pp=getElement("pp");
    var fullname=getElement("fullname");
    var username=getElement("username");
    var email=getElement("email");
    var phone=getElement("phone");
    var pass=getElement("pass");
    var cpass=getElement("cpass");
    var nid=getElement("nid");
    var dob=getElement("dob");
    var gender_male=getElement("gender_male");
    var gender_female=getElement("gender_female");
    var address=getElement("address");
    var city=getElement("city");
    var state=getElement("state");
    var zip=getElement("zip");

    err_pp.innerHTML="";
    err_fullname.innerHTML="";
    err_username.innerHTML="";
    err_email.innerHTML="";
    err_phone.innerHTML="";
    err_pass.innerHTML="";
    err_cpass.innerHTML="";
    err_nid.innerHTML="";
    err_dob.innerHTML="";
    err_gender.innerHTML="";
    err_address.innerHTML="";
    err_city.innerHTML="";
    err_state.innerHTML="";
    err_zip.innerHTML="";

    pp.style.border="2px solid black";
    fullname.style.border="2px solid black";
    username.style.border="2px solid black";
    email.style.border="2px solid black";
    phone.style.border="2px solid black";
    pass.style.border="2px solid black";
    cpass.style.border="2px solid black";
    nid.style.border="2px solid black";
    dob.style.border="2px solid black";
    gender_male.style.border="2px solid black";
    gender_female.style.border="2px solid black";
    address.style.border="2px solid black";
    city.style.border="2px solid black";
    state.style.border="2px solid black";
    zip.style.border="2px solid black";
}