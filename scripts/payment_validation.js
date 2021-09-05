function getElement(id){
    return document.getElementById(id);
}
function addPaymentValidation(){
    refreshAddPayment();
    var hasError=false;
    var due=getElement("due");
    var due_date=getElement("due_date");
    var payer_id=getElement("payer_id");
    var err_payer_id=getElement("err_payer_id");
    var err_due=getElement("err_due");
    var err_due_date=getElement("err_due_date");
    if(due.value==""){
        hasError=true;
        err_due.innerHTML="* Due Amount Required.";
        due.focus();
        due.style.border="2px solid red";
    }
    if(due_date.value==""){
        hasError=true;
        err_due_date.innerHTML="* Due Date Required.";
        due_date.focus();
        due_date.style.border="2px solid red";
    }
    if(payer_id.value==""){
        hasError=true;
        err_payer_id.innerHTML="* Payer Required.";
        payer_id.focus();
        payer_id.style.border="2px solid red";
    }
    return !hasError;
}
function refreshAddPayment(){
    var due=getElement("due");
    var due_date=getElement("due_date");
    var payer_id=getElement("payer_id");
    var err_payer_id=getElement("err_payer_id");
    var err_due=getElement("err_due");
    var err_due_date=getElement("err_due_date");
    err_due.innerHTML="";
    err_due_date.innerHTML="";
    err_payer_id.innerHTML="";
    due.style.border="2px solid black";
    due_date.style.border="2px solid black";
    payer_id.style.border="2px solid black";
}