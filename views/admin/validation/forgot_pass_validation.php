<?php
    $forgot_pass_email="";
    $err_forgot_pass_email="";
    $hasError=false;
    if(isset($_POST["forgot_pass_button"])){
        if(empty($_POST["forgot_pass_email"])){
            $err_forgot_pass_email="Please Enter Email!";
            $hasError=true;
        }
        elseif(strpos($_POST["forgot_pass_email"],"@") && strpos($_POST["forgot_pass_email"],".")){
            if(strpos($_POST["forgot_pass_email"],"@") < strpos($_POST["forgot_pass_email"],".")){
                $forgot_pass_email=htmlspecialchars($_POST["forgot_pass_email"]);
            }
            else{
                $err_forgot_pass_email="'@' Must be before '.'.";
                $hasError=true;
            }
        }
        else{
            $err_forgot_pass_email="Email must contain '@' and '.'.";
            $hasError=true;
        }
        if(!$hasError){
            $users = simplexml_load_file("../xmldata/users.xml");
            $flag=false;
            
            foreach($users as $user){
                if(strcmp($user->email,$_POST["forgot_pass_email"])==0){
                    $flag=true;
                    $forgot_pass_email=htmlspecialchars($user->email);
                    break;
                }
            }
            if($flag){
                header("Location: confirm_forgot_pass.php");
            }
            else{
                $err_forgot_pass_email="This Email Does Not Exists!";
            }
        }
    }
?>