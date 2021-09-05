<?php
    require_once '../models/db_conn.php';
    require_once '../models/mail_sender.php';
?>
<?php
    $pp="";
    $err_pp="";
    $fullname="";
    $err_fullname="";
    $username="";
    $err_username="";
    $email="";
    $err_email="";
    $phone="";
    $err_phone="";
    $pass="";
    $err_pass="";
    $cpass="";
    $err_cpass="";
    $nid="";
    $err_nid="";
    $dob="";
    $err_dob="";
    $gender="";
    $err_gender="";
    $address="";
    $err_address="";
    $city="";
    $err_city="";
    $state="";
    $err_state="";
    $zip="";
    $err_zip="";
    $cookie_value=uniqid();
    $cookie_name="unique_id";
    $hasError=false;

    if(isset($_POST["reg_button"])){
        //PROFILE PIC VALIDATION
        if(empty($_FILES["pp"]["name"])){
            $err_pp="* Profile Picture Required.";
            $hasError=true;
        }
        else{
            $fileType=strtolower(pathinfo(basename($_FILES["pp"]["name"]),PATHINFO_EXTENSION));
            $pp="../storage/images/".uniqid().".$fileType";
            move_uploaded_file($_FILES["pp"]["tmp_name"],$pp);
        }
        //FULLNAME VALIDATION
        if(empty($_POST["fullname"])){
            $err_fullname="* Full Name Required.";
            $hasError=true;
        }
        else{
            $fullname=htmlspecialchars($_POST["fullname"]);
        }
        //USERNAME VALIDATION
        if(empty($_POST["username"])){
            $err_username="* User Name Required.";
            $hasError=true;
        }
        elseif(strpos($_POST["username"]," ")!=false && strlen($_POST["username"])<8){
            $err_username="* Username Cannot Contain Spaces and Must Be >8 Characters.";
            $hasError=true;
        }
        else{
            $username=htmlspecialchars($_POST["username"]);
        }
        //EMAIL VALIDATION
        if(empty($_POST["email"])){
            $err_email="* Email Required.";
            $hasError=true;
        }
        elseif(strpos($_POST["email"],"@") && strpos($_POST["email"],".")){
            if(strpos($_POST["email"],"@") < strpos($_POST["email"],".")){
                getjudgeByEmail(htmlspecialchars($_POST["email"]));
                $email=htmlspecialchars($_POST["email"]);
            }
            else{
                $err_email="* '@' Must be before '.'.";
                $hasError=true;
            }
        }
        else{
            $err_email="* Email must contain '@' and '.'.";
            $hasError=true;
        }
        //PHONE VALIDATION
        if(empty($_POST["phone"])){
            $err_phone="* Phone Number Required.";
            $hasError=true;
        }
        elseif(strlen($_POST["phone"])!=11){
            $err_phone="* Phone Number Must be 11 Digits.";
            $hasError=true;
        }
        else{
            $phone=$_POST["phone"];
        }
        //PASSWORD VALIDATION
        if(empty($_POST["pass"])){
            $err_pass="* Password Required.";
            $hasError=true;
        }
        elseif(strlen($_POST["pass"])<8){
            $err_pass="* Password must be >=8 characters.";
            $hasError=true;
        }
        elseif(!strpos($_POST['pass'], "1") && !strpos($_POST['pass'], "2") && !strpos($_POST['pass'], "3") && !strpos($_POST['pass'], "4")
            && !strpos($_POST['pass'], "5") && !strpos($_POST['pass'], "6") && !strpos($_POST['pass'], "7") && !strpos($_POST['pass'], "8")
            && !strpos($_POST['pass'], "9") && !strpos($_POST['pass'], "0")) {
            $err_pass="* Password must have 1 numeric.";
            $hasError=true;
        }
        elseif(strcmp(strtoupper($_POST["pass"]),$_POST["pass"])==0 && strcmp(strtolower($_POST["pass"]),$_POST["pass"])==0){
            $err_pass="* Password must contain 1 Upper and Lowercase letter.";
            $hasError=true;
        }
        elseif(strpos($_POST["pass"],"#")==false && strpos($_POST["pass"],"?")==false){
            $err_pass="* Password must contain '#' or '?'.";
            $hasError=true;
        }
        elseif(empty($_POST["cpass"])){
            $err_cpass="* Confirmed Password Required.";
            $hasError=true;
        }
        elseif(strcmp($_POST["cpass"],$_POST["pass"])!=0){
            $err_cpass="* Password and Confirm Password must be same.";
            $hasError=true;
        }
        else{
            $pass=md5(htmlspecialchars($_POST["pass"]));
        }
        //NID VALIDATION
        if(empty($_POST["nid"])){
            $err_nid="* NID Required.";
            $hasError=true;
        }
        else{
            $nid=htmlspecialchars($_POST["nid"]);
        }
        //DATE OF BIRTH VALIDATION
        if(!isset($_POST["dob"])){
            $err_dob="* Birthday Required.";
            $hasError=true;
        }
        else{
            $dob=$_POST["dob"];
        }
        //GENDER VALIDATION
        if(isset($_POST["gender"])){
            $gender=$_POST["gender"];
        }
        else{
            $err_gender="* Gender Required.";
            $hasError=true;
        }
        //ADDRESS VALIDATION
        if(empty($_POST["address"])){
            $err_address="* Address Required.";
            $hasError=true;
        }
        else{
            $address=htmlspecialchars($_POST["address"]);
        }
        //CITY VALIDATION
        if(empty($_POST["city"])){
            $err_city="* City Required.";
            $hasError=true;
        }
        else{
            $city=htmlspecialchars($_POST["city"]);
        }
        //STATE VALIDATION
        if(empty($_POST["state"])){
            $err_state="* State Required.";
            $hasError=true;
        }
        else{
            $state=htmlspecialchars($_POST["state"]);
        }
        //ZIP VALIDATION
        if(empty($_POST["zip"])){
            $err_zip="* Zip/Postal Code Required.";
            $hasError=true;
        }
        else{
            $zip=htmlspecialchars($_POST["zip"]);
        }

        if(!$hasError){
            setcookie($cookie_name, $cookie_value, time()+360, "/");
            $isHttps=(isset($_SERVER['HTTPS']))?"https://":"http://";
            $confLink=$isHttps.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']."?pp=".rawurlencode($pp)."&fullname=".rawurlencode($fullname)."&username=".rawurlencode($username)."&email=".rawurlencode($email)."&phone=".rawurlencode($phone)."&pass=".rawurlencode($pass)."&nid=".rawurlencode($nid)."&dob=".rawurlencode($dob)."&gender=".rawurlencode($gender)."&address=".rawurlencode($address)."&city=".rawurlencode($city)."&state=".$state."&zip=".rawurlencode($zip)."&unid=".rawurlencode($cookie_value)."&confirm=true";
            sendConfEmail($username, $email, $confLink);
            header("Location: confirmation_page.php");
        }
    }
    if(isset($_POST["update_button"])){
        if(empty($_FILES["pp"]["name"])){
            $err_pp="* Profile Picture Required.";
            $hasError=true;
        }
        else{
            $fileType=strtolower(pathinfo(basename($_FILES["pp"]["name"]),PATHINFO_EXTENSION));
            $pp="../storage/images/".uniqid().".$fileType";
            move_uploaded_file($_FILES["pp"]["tmp_name"],$pp);
        }
        if(empty($_POST["fullname"])){
            $err_fullname="* Full Name Required.";
            $hasError=true;
        }
        else{
            $fullname=htmlspecialchars($_POST["fullname"]);
        }

        if(!isset($_POST["dob"])){
            $err_dob="* Birthday Required.";
            $hasError=true;
        }
        else{
            $dob=$_POST["dob"];
        }

        if(empty($_POST["address"])){
            $err_address="* Address Required.";
            $hasError=true;
        }
        else{
            $address=htmlspecialchars($_POST["address"]);
        }

        if(empty($_POST["city"])){
            $err_city="* City Required.";
            $hasError=true;
        }
        else{
            $city=htmlspecialchars($_POST["city"]);
        }

        if(empty($_POST["state"])){
            $err_state="* State Required.";
            $hasError=true;
        }
        else{
            $state=htmlspecialchars($_POST["state"]);
        }

        if(empty($_POST["zip"])){
            $err_zip="* Zip/Postal Code Required.";
            $hasError=true;
        }
        else{
            $zip=htmlspecialchars($_POST["zip"]);
        }

        if(!$hasError){
            updatejudge($pp, $fullname, $dob, $address, $city, $state, $zip, $_COOKIE["id"]);
        }
    }

    if(isset($_GET["confirm"])){
        if(isset($_COOKIE[$cookie_name])){
            if(strcmp($_COOKIE[$cookie_name],$_GET["unid"])==0){
                unset($_COOKIE[$cookie_name]);
                setcookie($cookie_name, null, -1, '/');
                addjudge($_GET["pp"], $_GET["fullname"], $_GET["username"], $_GET["email"], $_GET["phone"], $_GET["pass"], $_GET["nid"], $_GET["dob"], $_GET["gender"], $_GET["address"], $_GET["city"], $_GET["state"], $_GET["zip"]);
                header("Location: successfull_signup.php");
            }
            else{
                header("Location: judge_registration.php");
            }
        }
        else{
            header("Location: judge_registration.php");
        }
    }


    //judge DATA ACCESS FUNCTIONS
    function addjudge($pp, $fullname, $username, $email, $phone, $pass, $nid, $dob, $gender, $address, $city, $state, $zip){
        $query="INSERT INTO users(PP, FULLNAME, USERNAME, EMAIL, PHONE, PASS, NID, DOB, GENDER, ADDRESS, CITY, STATE, ZIP, TYPE) VALUES('$pp','$fullname','$username','$email','$phone','$pass','$nid','$dob','$gender','$address','$city','$state','$zip','judge')";
        doNoQuery($query);
    }


    function updatejudge($pp, $fullname, $dob, $address, $city, $state, $zip, $id){
        $query="UPDATE users SET pp='$pp',fullname='$fullname',dob='$dob',address='$address',city='$city',state='$state',zip='$zip' WHERE id=".$id;
        doNoQuery($query);
    }
    function deletejudge($id){
        $query="DELETE FROM users WHERE id=".$id;
        doNoQuery($query);
    }
    function getjudge($id){
        $query="SELECT * FROM users WHERE ID=".$id;
        return doQuery($query);
    }
    function getjudges(){
        $query="SELECT * FROM users";
        return doQuery($query);
    }
    function getjudgeByEmail($email){
        global $hasError, $err_email;
        $query="SELECT * FROM users WHERE email='$email'";
        $result=doQuery($query);
        if(count($result)>0){
            $err_email="* Email Taken";
            $hasError=true;
        }
        getjudgeByUsername(htmlspecialchars($_POST["username"]));
    }
    function getjudgeByUsername($username){
        global $hasError, $err_username;
        $query="SELECT * FROM users WHERE username='$username'";
        $result=doQuery($query);
        if(count($result)>0){
            $err_username="* Username Taken";
            $hasError=true;
        }
        getjudgeByNid(htmlspecialchars($_POST["nid"]));
    }
    function getjudgeByNid($nid){
        global $hasError, $err_nid;
        $query="SELECT * FROM users WHERE nid='$nid'";
        $result=doQuery($query);
        if(count($result)>0){
            $err_nid="* NID Taken";
            $hasError=true;
        }
        getjudgeByPhone($_POST["phone"]);
    }
    function getjudgeByPhone($phone){
        global $hasError, $err_phone;
        $query="SELECT * FROM users WHERE phone='$phone'";
        $result=doQuery($query);
        if(count($result)>0){
            $err_phone="* Phone Taken";
            $hasError=true;
        }
    }

    
?>
