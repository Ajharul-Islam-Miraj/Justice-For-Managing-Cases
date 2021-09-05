function getEmailAddress(email){
    var xhttp=new XMLHttpRequest();
	xhttp.onreadystatechange=function()
	{
    	if(xhttp.readyState ==4 && xhttp.status==200){
            if(xhttp.responseText.length==15){
                document.getElementById("valid_email").innerHTML="* Email Valid";
                document.getElementById("invalid_email").innerHTML="";
                document.getElementById("reset_pass_email_button").disabled=false;
            }
            else{
                document.getElementById("valid_email").innerHTML="";
                document.getElementById("invalid_email").innerHTML="* Email Invalid";
                document.getElementById("reset_pass_email_button").disabled=true;
            }
		}
	}
	if(email){
        xhttp.open("GET","../controllers/landing_controller.php?email="+email+"&email_search=true",true);
	    xhttp.send();
    }
    else{
        document.getElementById("valid_email").innerHTML="";
        document.getElementById("invalid_email").innerHTML="";
    }
}
function sendOtp(){
    var xhttp=new XMLHttpRequest();
	xhttp.onreadystatechange=function()
	{
    	if(xhttp.readyState ==4 && xhttp.status==200){
            document.getElementById("step1").style.display="none";
            document.getElementById("step2").style.display="";
		}
    }
    xhttp.open("GET","../controllers/common_controller.php?email="+document.getElementById("email").value+"&send_otp=true",true);
	xhttp.send();
}
function matchOtp(otp){
    var xhttp=new XMLHttpRequest();
	xhttp.onreadystatechange=function()
	{
    	if(xhttp.readyState ==4 && xhttp.status==200){
			if(xhttp.responseText.length!=0){
                document.getElementById("valid_otp").innerHTML="* OTP Valid";
                document.getElementById("invalid_otp").innerHTML="";
                document.getElementById("reset_pass_otp_button").disabled=false;
            }
            else{
                document.getElementById("valid_otp").innerHTML="";
                document.getElementById("invalid_otp").innerHTML="* OTP Invalid";
                document.getElementById("reset_pass_otp_button").disabled=true;
            }
		}
    }
    if(otp){
        xhttp.open("GET","../controllers/common_controller.php?sent_otp="+otp+"&match_otp=true",true);
	    xhttp.send();
    }
    else{
        document.getElementById("valid_otp").innerHTML="";
        document.getElementById("invalid_otp").innerHTML="";
    }
}
function submitOtp(){
    document.getElementById("step1").style.display="none";
    document.getElementById("step2").style.display="none";
    document.getElementById("step3").style.display="";
}
function getElement(id){
    return document.getElementById(id);
}
function updatePassword(){
    refreshPassErrorMsg();
    var hasError=false;
    var new_pass=getElement("new_pass");
    var err_new_pass=getElement("err_new_pass");
    var new_cpass=getElement("new_cpass");
    var err_new_cpass=getElement("err_new_cpass");
    //PASSWORD VALIDATION
    if(new_pass.value==""){
        hasError=true;
        err_new_pass.innerHTML="* Password Required.";
        new_pass.focus();
        new_pass.style.border="2px solid red";
    }
    else if(new_pass.value.length<8){
        hasError=true;
        err_new_pass.innerHTML="* Password must be >=8 characters.";
        new_pass.focus();
        new_pass.style.border="2px solid red";
    }
    else if(new_pass.value.search("1")==-1 && new_pass.value.search("2")==-1 && new_pass.value.search("3")==-1 && new_pass.value.search("4")==-1 && new_pass.value.search("5")==-1 && new_pass.value.search("6")==-1 && new_pass.value.search("7")==-1 && new_pass.value.search("8")==-1 && new_pass.value.search("9")==-1 && new_pass.value.search("0")==-1){
        hasError=true;
        err_new_pass.innerHTML="* Password must have 1 numeric";
        new_pass.focus();
        new_pass.style.border="2px solid red";
    }
    else if(new_pass.value.toLowerCase()==new_pass.value && new_pass.value.toUpperCase()==new_pass.value){
        hasError=true;
        err_new_pass.innerHTML="* Password must contain 1 Upper and Lowercase letter.";
        new_pass.focus();
        new_pass.style.border="2px solid red";
    }
    else if(new_pass.value.search("#")==-1 && new_pass.value.search("?")==-1){
        hasError=true;
        err_new_pass.innerHTML="* Password must contain '#' or '?'.";
        new_pass.focus();
        new_pass.style.border="2px solid red";
    }
    else if(new_cpass.value==""){
        hasError=true;
        err_new_cpass.innerHTML="* Confirmed Password Required.";
        new_cpass.focus();
        new_cpass.style.border="2px solid red";
    }
    else if(new_pass.value!=new_cpass.value){
        hasError=true;
        err_new_pass.innerHTML="* Password and Confirm Password must be same.";
        new_pass.focus();
        new_pass.style.border="2px solid red";
    }
    if(!hasError){
        var xhttp=new XMLHttpRequest();
	    xhttp.onreadystatechange=function()
	    {
    	    if(xhttp.readyState ==4 && xhttp.status==200){
                document.getElementById("step1").style.display="none";
                document.getElementById("step2").style.display="none";
                document.getElementById("step3").style.display="none";
                document.getElementById("step4").style.display="";
		    }
        }
        xhttp.open("GET","../controllers/common_controller.php?pass="+encodeURIComponent(new_pass.value)+"&email="+encodeURIComponent(document.getElementById("email").value)+"&update_pass=true",true);
	    xhttp.send();
    }
}
function refreshPassErrorMsg(){
    var new_pass=getElement("new_pass");
    var err_new_pass=getElement("err_new_pass");
    var new_cpass=getElement("new_cpass");
    var err_new_cpass=getElement("err_new_cpass");
    new_pass.style.border="2px solid black";
    err_new_pass.innerHTML="";
    new_cpass.style.border="2px solid black";
    err_new_cpass.innerHTML="";
}