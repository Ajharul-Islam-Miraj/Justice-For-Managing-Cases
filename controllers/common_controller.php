<?php
    require_once '../models/mail_sender.php';
    require_once '../models/db_conn.php';

    if(isset($_GET["send_otp"])){
        sendOtp();
    }
    if(isset($_GET["match_otp"])){
        matchOtp();
    }
    /*PASS RESET PART START(AJAX)*/
    if(isset($_GET["update_pass"])){
        updatePassword($_GET["email"], md5($_GET["pass"]));
    }
    /*PASS RESET PART END(AJAX)*/
    function sendOtp(){
        $cookie_name="otp";
        $cookie_value=(string)rand(100000,999999);
        setcookie($cookie_name, $cookie_value, time()+360, "/");
        sendOtpEmail("User",$_GET["email"],$cookie_value);
    }
    function matchOtp(){
        if(strcmp($_COOKIE["otp"],$_GET["sent_otp"])==0){
            echo "success";
        }
    }
    function updatePassword($email, $pass){
        $query="UPDATE users SET pass='$pass' WHERE email='$email'";
        doNoQuery($query);
    }
?>