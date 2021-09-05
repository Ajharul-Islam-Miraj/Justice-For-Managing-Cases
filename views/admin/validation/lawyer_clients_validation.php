<?php
    $client_pay_nid="";
    $err_client_pay_nid="";
    $client_pay_due="";
    $err_client_pay_due="";
    $client_pay_due_date="";
    $err_client_pay_due_date="";
    $hasError=false;

    if(isset($_POST["add_pay_button"])){
        if(empty($_POST["client_pay_nid"])){
            $err_client_pay_nid="!";
            $hasError=true;
        }
        else{
            $client_pay_nid=htmlspecialchars($_POST["client_pay_nid"]);
        }
        if(empty($_POST["client_pay_due"])){
            $err_client_pay_due="!";
            $hasError=true;
        }
        else{
            $client_pay_due=htmlspecialchars($_POST["client_pay_due"]);
        }
        if(!isset($_POST["client_pay_due_date"])){
            $err_client_pay_due_date="!";
            $hasError=true;
        }
        else{
            $client_pay_due_date=$_POST["client_pay_due_date"];
        }

        if(!$hasError){
            //SEARCH FOR NID IN THE SYSTEM
            //NID ASSOCIATED WITH THAT CLIENT MUST BE IN LAWYERS CLIENT LIST
            //ADD PAYMENT
        }
    }
?>