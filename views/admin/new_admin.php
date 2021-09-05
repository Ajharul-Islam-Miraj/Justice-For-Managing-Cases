<?php
    include_once "./validation/new_admin_validation.php";
?>

<html>
    <head>
        <title>ADMIN - Registration</title>
        <link rel="stylesheet" type="text/css" href="../../css/admin_registration_style.css">
		<!-- <link rel="stylesheet" type="text/css" href="../../styles/lawyer_validation.css"> -->
    </head>
    <body>
        <center>
            <form action="" method="POST" onsubmit="return registrationValidation()" enctype="multipart/form-data">
                <table>
                    <tr>
                        <td><img src="../../assets/justicelogo.png"; width="380" height="480"></td>
                        <td align="right" id="registration-box-style">
                            <h4>ADMIN Registration</h4>
                            
                            <label for="profile">Profile Picture: </label><input id="pp" type="file" name="pp">
                            <span id="err_pp" style="color:red;"></span><br><br>
                            <label for="fullname">Full Name: </label><input id = "fullname" type="text" name="fullname" placeholder="Full Name"><span id = "err_fullname"style="color:red;"></span><br><br>
                            
                            <label for="username">User Name: </label><input id = "username"type="text" name="username" placeholder="User Name"><span id = "err_username"style="color:red;"></span><br><br>
                            
                            <label for="email">Email: </label><input id = "email"type="text" name="email" placeholder="Email"><span id = "err_email"style="color:red;"></span><br><br>
                            <label for="phone">Phone: </label><input id = "phone"type="number" name="phone" placeholder="Phone Number"><span id = "err_phone"style="color:red;"></span><br><br>
                            
                            <label for="password">Password: </label><input id = "pass"type="password" name="pass" placeholder="Password"><span id = "err_pass"style="color:red;"></span><br><br>
                            
                            <label for="confirm_password">Confirm Password: </label><input id = "cpass" type="password" name="cpass" placeholder="Confirm Password"><span id = "err_cpass"style="color:red;"></span><br><br>
                            
                            <label for="nid">NID: </label><input id = "nid"type="number" name="nid" placeholder="NID" ><span id = "err_nid"style="color:red;"></span><br><br>
                            

                            <label for="birthday">Birthday: </label><input id = "dob"type="date" name="dob"><span id = "err_dob" style="color:red;"></span><br><br>
                            

                            <label for="gender">Gender: </label><input id = "gender_male" type="radio" name="gender" value="Male">Male
                            <input type="radio" id = "gender_female" name="gender" value="Female">Female
                            <span id = "err_gender" style="color:red;"></span><br><br>

                            <label for="address">Address: </label><input id="address" type="text" name="address" placeholder="Enter Address">
                            <span id = "err_address" style="color:red;"></span><br><br>

							<label for="city">City: </label><input id = "city" type="text" name="city" placeholder="City"><span id = "err_city"style="color:red;"></span><br><br>
                            
                            <label for="state">State: </label><input id = "state" type="text" name="state" placeholder="State" ><span id = "err_state" style="color:red;"></span><br><br>
                            <label for="zip">Zip: </label><input id = "zip" type="text" name="zip" placeholder="Zip"><span id = "err_zip"style="color:red;"></span><br><br>
                            
                            <a href="../landing.php">Cancel</a> <input type="submit" name="reg_button" value="Register"><br><br>
                        </td>
                    </tr>
                </table>
            </form>
        </center>
		<a href="admin_dashboard.php">Back</a>
        <script src="../../scripts/lawyer_validation.js"></script>
    </body>
</html>