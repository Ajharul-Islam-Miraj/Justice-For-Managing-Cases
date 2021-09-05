<?php
    $meeting_title="";
    $err_meeting_title="";
    $meeting_description="";
    $err_meeting_description="";
    $meeting_date="";
    $err_meeting_date="";
    $meeting_time="";
    $err_meeting_time="";
    $hasError=false;

    if(isset($_POST["schedule_meeting_button"])){
        if(empty($_POST["meeting_title"])){
            $err_meeting_title="Meeting Title Required";
            $hasError=true;
        }
        else{
            $meeting_title=htmlspecialchars($_POST["meeting_title"]);
        }
        if(empty($_POST["meeting_description"])){
            $err_meeting_description="Meeting Description Required";
            $hasError=true;
        }
        else{
            $meeting_description=htmlspecialchars($_POST["meeting_description"]);
        }
        if(!isset($_POST["meeting_date"])){
            $err_meeting_date="Meeting Date Required";
            $hasError=true;
        }
        else{
            $meeting_date=$_POST["meeting_date"];
        }
        if(!isset($_POST["meeting_time"])){
            $err_meeting_time="Meeting Time Required";
            $hasError=true;
        }
        else{
            $meeting_time=$_POST["meeting_time"];
        }

        if(!$hasError){
            //SCHEDULE A MEETING
        }
    }
?>