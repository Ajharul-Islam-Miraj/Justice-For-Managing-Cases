function isTakenUsername(username){
    var xhttp=new XMLHttpRequest();
	xhttp.onreadystatechange=function()
	{
    	if(xhttp.readyState ==4 && xhttp.status==200){
			document.getElementById("err_username").innerHTML=xhttp.responseText;
		}
	}
	if(username){
        xhttp.open("GET","../controllers/landing_controller.php?username="+username+"&username_search=true",true);
	    xhttp.send();
    }
    else{
        document.getElementById("err_username").innerHTML="";
    }
}

function isTakenEmail(email){
    var xhttp=new XMLHttpRequest();
	xhttp.onreadystatechange=function()
	{
    	if(xhttp.readyState ==4 && xhttp.status==200){
			document.getElementById("err_email").innerHTML=xhttp.responseText;
		}
	}
	if(email){
        xhttp.open("GET","../controllers/landing_controller.php?email="+email+"&email_search=true",true);
	    xhttp.send();
    }
    else{
        document.getElementById("err_email").innerHTML="";
    }
}

function isTakenNid(nid){
    var xhttp=new XMLHttpRequest();
	xhttp.onreadystatechange=function()
	{
    	if(xhttp.readyState ==4 && xhttp.status==200){
			document.getElementById("err_nid").innerHTML=xhttp.responseText;
		}
	}
	if(nid){
        xhttp.open("GET","../controllers/landing_controller.php?nid="+nid+"&nid_search=true",true);
	    xhttp.send();
    }
    else{
        document.getElementById("err_nid").innerHTML="";
    }
}

function isTakenPhone(phone){
    var xhttp=new XMLHttpRequest();
	xhttp.onreadystatechange=function()
	{
    	if(xhttp.readyState ==4 && xhttp.status==200){
			document.getElementById("err_phone").innerHTML=xhttp.responseText;
		}
	}
	if(phone){
        xhttp.open("GET","../controllers/landing_controller.php?phone="+phone+"&phone_search=true",true);
	    xhttp.send();
    }
    else{
        document.getElementById("err_phone").innerHTML="";
    }
}

function onLogOutDeleteSessionCookie(){
	document.cookie = "id=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
	var xhttp=new XMLHttpRequest();
	xhttp.onreadystatechange=function()
	{
    	if(xhttp.readyState ==4 && xhttp.status==200){
			//DO NOTHING WITH RESPONSE
		}
	}
	xhttp.open("GET","../controllers/destroy_session.php",true);
	xhttp.send();
}