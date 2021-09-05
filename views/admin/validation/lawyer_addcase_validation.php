<?php
    $case_title="";
    $err_case_title="";
    $case_description="";
    $err_case_description="";
    $case_complainant_nid="";
    $err_case_complainant_nid="";
    $case_client_nid="";
    $err_case_client_nid="";
    $add_doc="";
    $err_add_doc="";
    $date_added="";
    $err_date_added="";
    $hearing_date="";
    $err_hearing_date="";
    $initial_status="";
    $err_initial_status="";
    $hasError=false;

    if(isset($_POST["add_case_button"])){
        if(empty($_POST["case_title"])){
            $err_case_title="Case Title Required";
            $hasError=true;
        }
        else{
            $case_title=htmlspecialchars($_POST["case_title"]);
        }
        if(empty($_POST["case_description"])){
            $err_case_description="Case Description Required";
            $hasError=true;
        }
        else{
            $case_description=htmlspecialchars($_POST["case_description"]);
        }
        if(empty($_POST["case_complainant_nid"])){
            $err_case_complainant_nid="Complainant NID Required";
            $hasError=true;
        }
        else{
            $case_complainant_nid=htmlspecialchars($_POST["case_complainant_nid"]);
        }
        if(empty($_POST["case_client_nid"])){
            $err_case_client_nid="Client NID Required";
            $hasError=true;
        }
        else{
            $case_client_nid=htmlspecialchars($_POST["case_client_nid"]);
        }
        if(!isset($_POST["add_doc"])){
            $err_add_doc="Document Required";
            $hasError=true;
        }
        else{
            $add_doc=$_POST["add_doc"];
        }
        if(!isset($_POST["date_added"])){
            $err_date_added="Date Added Required Required";
            $hasError=true;
        }
        else{
            $date_added=$_POST["date_added"];
        }
        if(!isset($_POST["hearing_date"])){
            $err_hearing_date="Hearing Date Required Required";
            $hasError=true;
        }
        else{
            $date_added=$_POST["hearing_date"];
        }
        if(!isset($_POST["initial_status"])){
            $err_initial_status="Status Required";
            $hasError=true;
        }
        else{
            $date_added=$_POST["initial_status"];
        }

        if(!$hasError){
            echo "Case Added";
        }
    }
?>