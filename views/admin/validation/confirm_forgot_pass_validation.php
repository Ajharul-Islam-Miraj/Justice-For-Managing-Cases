<?php
    $forgot_pass_new="";
    $err_forgot_pass_new="";
    $forgot_pass_confirm="";
    $err_forgot_pass_confirm="";
    $hasError=false;
    if(isset($_POST["forgot_pass_confirm_button"])){
        if(empty($_POST["forgot_pass_new"])){
            $err_forgot_pass_new="Please Enter New Password!";
            $hasError=true;
        }
        elseif(strlen($_POST["forgot_pass_new"])<8){
            $err_forgot_pass_new="Password must be 8 characters long.";
            $hasError=true;
        }
        elseif(!strpos($_POST['forgot_pass_new'], "1") && !strpos($_POST['forgot_pass_new'], "2") && !strpos($_POST['forgot_pass_new'], "3") && !strpos($_POST['forgot_pass_new'], "4")
            && !strpos($_POST['forgot_pass_new'], "5") && !strpos($_POST['forgot_pass_new'], "6") && !strpos($_POST['forgot_pass_new'], "7") && !strpos($_POST['forgot_pass_new'], "8")
            && !strpos($_POST['forgot_pass_new'], "9") && !strpos($_POST['forgot_pass_new'], "0")) {
            $err_forgot_pass_new="Password must have 1 numeric";
            $hasError=true;
        }
        elseif(strcmp(strtoupper($_POST["forgot_pass_new"]),$_POST["forgot_pass_new"])==0 && strcmp(strtolower($_POST["forgot_pass_new"]),$_POST["forgot_pass_new"])==0){
            $err_forgot_pass_new="Password must contain 1 Upper and Lowercase letter.";
            $hasError=true;
        }
        elseif(strpos($_POST["forgot_pass_new"],"#")==false && strpos($_POST["forgot_pass_new"],"?")==false){
            $err_forgot_pass_new="Password must contain '#' or '?'.";
            $hasError=true;
        }
        elseif(empty($_POST["forgot_pass_confirm"])){
            $err_forgot_pass_confirm="Please Enter Confirm New Password!";
            $hasError=true;
        }
        elseif(strcmp($_POST["forgot_pass_confirm"],$_POST["forgot_pass_new"])!=0){
            $err_forgot_pass_confirm="New Password and Confirm New Password must be same.";
            $hasError=true;
        }
        else{
            $forgot_pass_new=htmlspecialchars($_POST["forgot_pass_new"]);
        }

        if(!$hasError){
            header("Location: ".$_SERVER['DOCUMENT_ROOT']."[redirect to confirmation page].php");
        }
    }
?>