function getElement(id){
    return document.getElementById(id);
}
function addClientValidation(){
    refreshClient();
    var hasError=false;
    var client_nid=getElement("client_nid");
    var err_client_nid=getElement("err_client_nid");
    if(client_nid.value==""){
        hasError=true;
        err_client_nid.innerHTML="* NID Required.";
        client_nid.focus();
        client_nid.style.border="2px solid red";
    }
    return !hasError;
}
function refreshClient(){
    var client_nid=getElement("client_nid");
    client_nid.style.border="2px solid black";
    var err_client_nid=getElement("err_client_nid");
    err_client_nid.innerHTML="";
}

function uploadDocValidation(){
    refreshUpload();
    var hasError=false;
    var att_document=getElement("document");
    var err_document=getElement("err_document");
    if(att_document.value==""){
        hasError=true;
        err_document.innerHTML="* Document Required.";
        att_document.focus();
        att_document.style.border="2px solid red";
    }
    return !hasError;
}
function refreshUpload(){
    var att_document=getElement("document");
    att_document.style.border="2px solid black";
    var err_document=getElement("err_document");
    err_document.innerHTML="";
}