function getElement(id){
    return document.getElementById(id);
}
function addMeetingValidation(){
    refreshAddMeeting();
    var hasError=false;
    var attandee_id=getElement("attandee_id");
    var err_attandee_id=getElement("err_attandee_id");
    var meeting_title=getElement("meeting_title");
    var err_meeting_title=getElement("err_meeting_title");
    var meeting_description=getElement("meeting_description");
    var err_meeting_description=getElement("err_meeting_description");
    var meeting_time=getElement("meeting_time");
    var err_meeting_time=getElement("err_meeting_time");
    if(attandee_id.value==""){
        hasError=true;
        err_attandee_id.innerHTML="* Attandee Required.";
        attandee_id.focus();
        attandee_id.style.border="2px solid red";
    }
    if(meeting_title.value==""){
        hasError=true;
        err_meeting_title.innerHTML="* Title Required.";
        meeting_title.focus();
        meeting_title.style.border="2px solid red";
    }
    if(meeting_description.value==""){
        hasError=true;
        err_meeting_description.innerHTML="* Description Required.";
        meeting_description.focus();
        meeting_description.style.border="2px solid red";
    }
    if(meeting_time.value==""){
        hasError=true;
        err_meeting_time.innerHTML="* Meeting Time Required.";
        meeting_time.focus();
        meeting_time.style.border="2px solid red";
    }
    return !hasError;
}
function refreshAddMeeting(){
    var attandee_id=getElement("attandee_id");
    attandee_id.style.border="2px solid black";
    var err_attandee_id=getElement("err_attandee_id");
    err_attandee_id.innerHTML="";
    var meeting_title=getElement("meeting_title");
    meeting_title.style.border="2px solid black";
    var err_meeting_title=getElement("err_meeting_title");
    err_meeting_title.innerHTML="";
    var meeting_description=getElement("meeting_description");
    meeting_description.style.border="2px solid black";
    var err_meeting_description=getElement("err_meeting_description");
    err_meeting_description.innerHTML="";
    var meeting_time=getElement("meeting_time");
    meeting_time.style.border="2px solid black";
    var err_meeting_time=getElement("err_meeting_time");
    err_meeting_time.innerHTML="";
}