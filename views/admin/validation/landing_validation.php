<?php
    session_start();
	$login_email="";
	$err_login_email="";
	$login_pass="";
	$err_login_pass="";
	$hasError=false;
	$flag=false;
	if(isset($_POST["login_button"])){
		if(empty($_POST["login_email"])){
			$err_login_email="Email Required";
			$hasError =true;	
		}
		else{
			$login_email = htmlspecialchars($_POST["login_email"]);
		}
		if(empty ($_POST["login_pass"])){
			$err_login_pass="Password Required";
			$hasError = true;
		}
		else{
			$login_pass=htmlspecialchars($_POST["login_pass"]);
        }
		
		if(!$hasError){
			$users = simplexml_load_file("../xmldata/users.xml");
            $flag=false;
            $cookie_login_email="";
            $user_type="";
			foreach($users as $user){
                if(strcmp($user->email,$_POST["login_email"])==0 && strcmp($user->pass,$_POST["login_pass"])==0){
                    $flag=true;
                    $cookie_login_email=$user->email;
                    $user_type=$user->type;
					break;
                }
			}			
			if(!$flag){
				echo "Invalid Credentials!";
			}
			else{
				session_start();
			    $_SESSION["login_email"] = $cookie_login_email;
                setcookie("login_email",$cookie_login_email,time() + 120);
                if(strcmp($user_type,"admin")==0){
                    header("Location: ../pages/admin/admin_dashboard.php");
                }
                elseif(strcmp($user_type,"lawyer")==0){
                    header("Location: ../pages/lawyer/dashboard.php");
                }
                else{
                    header("Location: ../pages/complainant/dashboard.php");
                }
			}
		}
	}

	if(isset($_POST["signup_lawyer_button"])){
		header("Location: ../pages/lawyer/registration.php");
	}
	if(isset($_POST["signup_complainant_button"])){
		header("Location: ../pages/complainant/registration.php");
	}
?>