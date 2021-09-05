<?php
    require_once '../models/db_conn.php';
?>

<?php
    /*LOGIN PAGE PART START*/
    $login_email="";
	$err_login_email="";
	$login_pass="";
    $err_login_pass="";
    $cookie_name="id";
    $cookie_value="";
	$hasError=false;
	$flag=false;
	if(isset($_POST["login_button"])){
		if(empty($_POST["login_email"])){
			$err_login_email="* Email Required";
			$hasError =true;
		}
		else{
			$login_email = htmlspecialchars($_POST["login_email"]);
		}
		if(empty($_POST["login_pass"])){
			$err_login_pass="* Password Required";
			$hasError = true;
		}
		else{
			$login_pass=htmlspecialchars($_POST["login_pass"]);
        }

		if(!$hasError){
            $login_email=htmlspecialchars($_POST["login_email"]);
            $login_pass=md5(htmlspecialchars($_POST["login_pass"]));
            $user_id=getUser($login_email,$login_pass);
            $flag=false;
            if($user_id!=false){
                $flag=true;
            }
			if(!$flag){
                echo "<center><span style=\"color:red;\">";
                echo "<h2>Invalid Credentials!</h2>";
                echo "</center></span>";
			}
			else{
                session_start();
                $cookie_value=$user_id[0]["id"];
                setcookie($cookie_name, $cookie_value, time()+1800, "/");
                if(strcmp($user_id[0]["type"],"admin")==0){
                    //REDIRECT TO ADMIN DASHBOARD
					header("Location: ./admin/admin_dashboard.php");
                }
                elseif(strcmp($user_id[0]["type"],"lawyer")==0){
                    header("Location: lawyer_dashboard.php");
                }
                elseif(strcmp($user_id[0]["type"],"judge")==0){
                    //REDIRECT TO JUDGE DASHBOARD
                }
                else{
                    //REDIRECT TO COMPLAINANT DASHBOARD
                }
			}
        }
    }
    
	if(isset($_POST["signup_lawyer_button"])){
		header("Location: lawyer_registration.php");
	}
	if(isset($_POST["signup_complainant_button"])){
		//REDIRECT TO COMPLAINANT REGISTRATION PAGE
    }
    if(isset($_POST["signup_judge_button"])){
		//REDIRECT TO JUDGE REGISTRATION PAGE
    }
    /*LOGIN PAGE PART END*/

    /*USERNAME AND EMAIL VALIDITY CHECK PART START(AJAX)*/
    if(isset($_GET["username_search"])){
        getUserByUsername($_GET["username"]);
    }
    if(isset($_GET["email_search"])){
        getUserByEmail($_GET["email"]);
    }
    if(isset($_GET["nid_search"])){
        getUserByNid($_GET["nid"]);
    }
    if(isset($_GET["phone_search"])){
        getUserByPhone($_GET["phone"]);
    }
    /*USERNAME AND EMAIL VALIDITY CHECK PART END(AJAX)*/
    
    //DATA ACCESS FUNCTIONS
    function getUser($email,$pass){
        $query="SELECT * FROM users WHERE email='$email' AND pass='$pass'";
        $result=doQuery($query);
        return (count($result)>0 ? $result : false);
    }
    function getUserByEmail($email){
        $query="SELECT * FROM users WHERE email='$email'";
        $result=doQuery($query);
        if(count($result)>0){
            echo "* Email Taken";
        }
    }
    function getUserByUsername($username){
        $query="SELECT * FROM users WHERE username='$username'";
        $result=doQuery($query);
        if(count($result)>0){
            echo "* Username Taken";
        }
    }
    function getUserByNid($nid){
        $query="SELECT * FROM users WHERE nid='$nid'";
        $result=doQuery($query);
        if(count($result)>0){
            echo "* NID Taken";
        }
    }
    function getUserByPhone($phone){
        $query="SELECT * FROM users WHERE phone='$phone'";
        $result=doQuery($query);
        if(count($result)>0){
            echo "* Phone Taken";
        }
    }
?>