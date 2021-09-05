function getElement(id){
    return document.getElementById(id);
}
function chatBoxValidation(){
    refreshChatBox();
    hasError=false;
    chat_box=getElement("chat_box");
    if(chat_box.value==""){
        hasError=true;
        chat_box.focus();
        chat_box.style.border="2px solid red";
    }
    return !hasError;
}
function refreshChatBox(){
    chat_box=getElement("chat_box");
    chat_box.style.border="2px solid black";
}

function getMyChats(receiver_id){
    var xhttp=new XMLHttpRequest();
	xhttp.onreadystatechange=function()
	{
    	if(xhttp.readyState ==4 && xhttp.status==200){
            document.getElementById("my_chats").innerHTML=xhttp.responseText;
		}
    }
    xhttp.open("GET","../controllers/chats_controller.php?receiver_id="+receiver_id+"&chat_refresh=true",true);
	xhttp.send();
}

function getCookieReceiverId(name){
    const value = `; ${document.cookie}`;
    const parts = value.split(`; ${name}=`);
    if (parts.length === 2) return parts.pop().split(';').shift();
}

function chatRefresh(receiver_id){
    document.cookie = "receiver_id="+receiver_id;
    getMyChats(receiver_id);
}

function sendMessage(){
    if(chatBoxValidation()){
        receiver_id=getCookieReceiverId("receiver_id");
        var xhttp=new XMLHttpRequest();
	    xhttp.onreadystatechange=function()
	    {
    	    if(xhttp.readyState ==4 && xhttp.status==200){
                chatRefresh(receiver_id);
                document.getElementById("chat_box").value="";
		    }
        }
        if(receiver_id){
            xhttp.open("GET","../controllers/chats_controller.php?receiver_id="+receiver_id+"&message="+getElement("chat_box").value+"&send=true",true);
	        xhttp.send();
        }
    }
}